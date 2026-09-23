import os, glob, re
for f in glob.glob('template/*.html'):
    with open(f, 'r', encoding='utf-8') as file:
        content = file.read()
    content = re.sub(r'src="/images/', 'src="images/', content)
    with open(f, 'w', encoding='utf-8') as file:
        file.write(content)
print('Fixed paths')
