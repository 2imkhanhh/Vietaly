import os
import shutil
import re

def copy_dir(src, dst):
    if os.path.exists(dst):
        shutil.rmtree(dst)
    if os.path.exists(src):
        shutil.copytree(src, dst)

def fix_asset_paths(text):
    # Replace {{ asset('images/...') }} with images/...
    text = re.sub(r'\{\{\s*asset\([\'"]images/(.*?)[\'"]\)\s*\}\}', r'images/\1', text)
    return text

def fix_vite_tags(text):
    # Replace @vite(['resources/css/home.css']) with <link rel="stylesheet" href="css/home.css">
    # Replace @vite(['resources/js/home.js']) with <script src="js/home.js" defer></script>
    def vite_replace(match):
        content = match.group(1)
        # Find all strings inside the array
        paths = re.findall(r'[\'"](.*?)[\'"]', content)
        html_tags = []
        for path in paths:
            filename = os.path.basename(path)
            if path.endswith('.css'):
                html_tags.append(f'<link rel="stylesheet" href="css/{filename}">')
            elif path.endswith('.js'):
                html_tags.append(f'<script type="module" src="js/{filename}"></script>')
        return '\n    '.join(html_tags)

    text = re.sub(r'@vite\(\[(.*?)\]\)', vite_replace, text, flags=re.DOTALL)
    return text

def fix_links(text):
    links_map = {
        r'href="/gioi-thieu"': r'href="about.html"',
        r'href="/san-pham"': r'href="products.html"',
        r'href="/tuyen-dung"': r'href="recruitment.html"',
        r'href="/cua-hang"': r'href="store.html"',
        r'href="/gio-hang"': r'href="cart.html"',
        r'href="/thanh-toan"': r'href="checkout.html"',
        r'href="/chitiet"': r'href="product-detail.html"', # Assuming chitiet route, we will adjust if needed
        r'href="/"': r'href="index.html"',
        r"href='/gioi-thieu'": r"href='about.html'",
        r"href='/san-pham'": r"href='products.html'",
        r"href='/tuyen-dung'": r"href='recruitment.html'",
        r"href='/cua-hang'": r"href='store.html'",
        r"href='/gio-hang'": r"href='cart.html'",
        r"href='/thanh-toan'": r"href='checkout.html'",
        r"href='/'": r"href='index.html'",
        r"window.location.href='/san-pham'": r"window.location.href='products.html'",
        r"window.location.href='/thanh-toan'": r"window.location.href='checkout.html'"
    }
    for k, v in links_map.items():
        text = text.replace(k, v)
    return text

def parse_layout(layout_path):
    with open(layout_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    content = fix_asset_paths(content)
    content = fix_vite_tags(content)
    content = fix_links(content)
    
    # Replace yield statements with placeholders
    # @yield('title', 'Vietaly')
    content = re.sub(r"@yield\('title',\s*'(.*?)'\)", r"{TITLE}", content)
    content = re.sub(r"@yield\('title'\)", r"{TITLE}", content)
    content = content.replace("@yield('page_css')", "{PAGE_CSS}")
    content = content.replace("@yield('page_js')", "{PAGE_JS}")
    content = content.replace("@yield('content')", "{CONTENT}")
    
    return content

def extract_section(text, section_name):
    # Matches @section('name') ... @endsection
    pattern = rf"@section\('{section_name}'\)(.*?)@endsection"
    match = re.search(pattern, text, flags=re.DOTALL)
    if match:
        return match.group(1).strip()
    
    # Sometimes it's @section('title', 'Something')
    pattern_inline = rf"@section\('{section_name}',\s*'(.*?)'\)"
    match_inline = re.search(pattern_inline, text)
    if match_inline:
        return match_inline.group(1).strip()
        
    return ""

def process_view(view_path, layout_html, dest_path):
    with open(view_path, 'r', encoding='utf-8') as f:
        content = f.read()
        
    title = extract_section(content, 'title')
    page_css = extract_section(content, 'page_css')
    page_js = extract_section(content, 'page_js')
    
    # To get page_content robustly:
    # 1. Remove @extends('layouts.app')
    # 2. Remove @section('title', ...)
    # 3. Remove @section('page_css') ... @endsection
    # 4. Remove @section('page_js') ... @endsection
    # 5. Remove @section('content') and the final @endsection
    
    page_content = content
    page_content = re.sub(r"@extends\(.*?\)", "", page_content)
    page_content = re.sub(r"@section\('title'.*?\)", "", page_content)
    page_content = re.sub(r"@section\('page_css'\).*?@endsection", "", page_content, flags=re.DOTALL)
    page_content = re.sub(r"@section\('page_js'\).*?@endsection", "", page_content, flags=re.DOTALL)
    page_content = re.sub(r"@section\('content'\)", "", page_content)
    # Remove the last @endsection which belongs to 'content'
    page_content = re.sub(r"@endsection\s*$", "", page_content.strip())
    
    # Process extracted parts
    page_css = fix_asset_paths(fix_vite_tags(page_css))
    page_js = fix_asset_paths(fix_vite_tags(page_js))
    page_content = fix_asset_paths(fix_vite_tags(page_content))
    page_content = fix_links(page_content)
    
    # Construct final html
    final_html = layout_html
    final_html = final_html.replace("{TITLE}", title)
    final_html = final_html.replace("{PAGE_CSS}", page_css)
    final_html = final_html.replace("{PAGE_JS}", page_js)
    final_html = final_html.replace("{CONTENT}", page_content)
    
    with open(dest_path, 'w', encoding='utf-8') as f:
        f.write(final_html)

def main():
    base_dir = r"d:\Vietaly"
    template_dir = os.path.join(base_dir, "template")
    
    # 1. Create template folder
    if not os.path.exists(template_dir):
        os.makedirs(template_dir)
        
    # 2. Copy assets
    copy_dir(os.path.join(base_dir, "resources", "css"), os.path.join(template_dir, "css"))
    copy_dir(os.path.join(base_dir, "resources", "js"), os.path.join(template_dir, "js"))
    copy_dir(os.path.join(base_dir, "public", "images"), os.path.join(template_dir, "images"))
    print("Copied CSS, JS, and Images.")
    
    # 3. Parse Layout
    layout_path = os.path.join(base_dir, "resources", "views", "layouts", "app.blade.php")
    layout_html = parse_layout(layout_path)
    
    # 4. Process all views
    views_dir = os.path.join(base_dir, "resources", "views")
    for filename in os.listdir(views_dir):
        if filename.endswith(".blade.php"):
            view_path = os.path.join(views_dir, filename)
            html_filename = filename.replace(".blade.php", ".html")
            dest_path = os.path.join(template_dir, html_filename)
            
            process_view(view_path, layout_html, dest_path)
            print(f"Converted {filename} to {html_filename}")
            
    print("Done!")

if __name__ == "__main__":
    main()
