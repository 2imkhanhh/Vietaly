<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vietaly - Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600&family=Calistoga&family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="header-wrapper">
        <!-- TOP BAR -->
        <div class="top-bar">
            <div class="custom-container">
                <div class="hotline">HOTLINE: 0971773868</div>
                <div class="language-selector">
                    <span class="lang-text">EN - US</span>
                    <span class="material-symbols-outlined">keyboard_arrow_down</span>
                </div>
            </div>
        </div>

        <!-- MAIN HEADER -->
        <div class="main-header">
            <div class="custom-container main-header-container">
                <!-- Left Menu -->
                <nav class="nav-menu">
                    <a href="#">Giới thiệu</a>
                    <div class="nav-item">
                        <span>Sản phẩm</span>
                        <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        <!-- MEGA MENU -->
                        <div class="mega-menu">
                            <div class="mega-menu-inner">
                                <!-- Cột Danh mục -->
                                <div class="mega-categories">
                                    <h3>Danh mục</h3>
                                    <ul>
                                        <li><a href="#" class="cat-link active" data-target="cat-artisan">Socola
                                                thủ công (Artisan)</a></li>
                                        <li><a href="#" class="cat-link" data-target="cat-bars">Socola thanh
                                                (Bars)</a></li>
                                        <li><a href="#" class="cat-link" data-target="cat-truffles">Socola tươi
                                                (Truffles)</a></li>
                                        <li><a href="#" class="cat-link" data-target="cat-dark">Socola đen nguyên
                                                chất</a></li>
                                    </ul>
                                </div>

                                <!-- Cột Sản phẩm nổi bật -->
                                <div class="mega-products">
                                    <div class="mega-products-header">
                                        <h3>Sản phẩm nổi bật</h3>
                                        <a href="#" class="view-all-link">Xem tất cả<span
                                                class="material-symbols-outlined">arrow_right_alt</span></a>
                                    </div>

                                    <!-- Nhóm: Artisan (3 sản phẩm) -->
                                    <div class="mega-product-group active" id="cat-artisan">
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Artisan 1">
                                            <h4>Hộp Socola Artisan Nghệ Thuật</h4>
                                            <p class="price">850.000đ</p>
                                        </div>
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Artisan 2">
                                            <h4>Viên Socola Bonbon Hảo Hạng</h4>
                                            <p class="price">320.000đ</p>
                                        </div>
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Artisan 3">
                                            <h4>Set Quà Tặng Artisan Độc Bản</h4>
                                            <p class="price">1.500.000đ</p>
                                        </div>
                                    </div>

                                    <!-- Nhóm: Bars (2 sản phẩm - Ít hơn) -->
                                    <div class="mega-product-group" id="cat-bars">
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Bar 1">
                                            <h4>Thanh Socola Đen 85% Cacao</h4>
                                            <p class="price">190.000đ</p>
                                        </div>
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Bar 2">
                                            <h4>Thanh Socola Sữa Trái Cây Hạt Dẻ</h4>
                                            <p class="price">210.000đ</p>
                                        </div>
                                    </div>

                                    <!-- Nhóm: Truffles (4 sản phẩm - Vượt số lượng 3) -->
                                    <div class="mega-product-group" id="cat-truffles">
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Truffle 1">
                                            <h4>Truffle Trà Xanh Matcha</h4>
                                            <p class="price">250.000đ</p>
                                        </div>
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Truffle 2">
                                            <h4>Truffle Dâu Tây Sữa</h4>
                                            <p class="price">280.000đ</p>
                                        </div>
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Truffle 3">
                                            <h4>Truffle Caramel Muối Biển</h4>
                                            <p class="price">260.000đ</p>
                                        </div>
                                        <div class="mega-product-card">
                                            <img src="/images/product1.png" alt="Truffle 4">
                                            <h4>Truffle Socola Đắng Nguyên Chất</h4>
                                            <p class="price">290.000đ</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#">Tuyển dụng</a>
                    <a href="#">Cửa hàng</a>
                    <a href="#">Đặt lịch trải nghiệm</a>
                    <div class="magic-line"></div>
                </nav>

                <!-- Center Logo -->
                <div class="logo-wrapper">
                    <div class="logo-container">
                        <a href="/" style="text-decoration: none;">
                            <img src="{{ asset('images/logo.svg') }}" alt="LA' VIETALY Logo">
                        </a>
                    </div>
                </div>

                <!-- Right Actions -->
                <div class="header-actions">
                    <div class="search-box">
                        <input type="text" placeholder="Tìm kiếm">
                        <span class="material-symbols-outlined">search</span>
                    </div>

                    <div class="icon-actions">
                        <a href="#" class="icon-btn">
                            <span class="material-symbols-outlined">account_circle</span>
                        </a>
                        <a href="#" class="icon-btn">
                            <span class="material-symbols-outlined">local_mall</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Banner -->
    <div class="hero-banner">
        <div class="hero-banner-track">
            <div class="hero-slide" style="background-image: url('{{ asset('images/banner.jpg') }}');"></div>
            <div class="hero-slide" style="background-image: url('{{ asset('images/banner2.jpg') }}');"></div>
        </div>

        <button class="banner-btn btn-prev">
            <span class="material-symbols-outlined">arrow_right_alt</span>
        </button>
        <div class="banner-text">
            <h1>Chạm vị Việt</h1>
            <p>Touching Vietnamese flavor</p>
        </div>
        <button class="banner-btn btn-next">
            <span class="material-symbols-outlined">arrow_right_alt</span>
        </button>
    </div>

    <!-- Product Showcase Section -->
    <section class="product-showcase">
        <div class="custom-container showcase-container">
            <!-- Tabs -->
            <div class="showcase-tabs">
                <button class="tab-btn active">Bán chạy</button>
                <button class="tab-btn">Mới về</button>
                <button class="tab-btn">Khuyến mãi</button>
                <button class="tab-btn">Set quà tặng</button>
            </div>

            <!-- Carousel Area -->
            <div class="showcase-carousel-wrapper">
                <button class="carousel-nav-btn showcase-prev">
                    <span class="material-symbols-outlined" style="transform: scaleX(-1);">arrow_right_alt</span>
                </button>
                
                <div class="showcase-track-container">
                    <div class="showcase-track">
                        <!-- Product 1 -->
                        <div class="product-card group">
                            <div class="product-image-wrap">
                                <img src="{{ asset('images/product1.png') }}" alt="Product 1" class="main-img">
                                <div class="product-hover-elements">

                                    <div class="product-actions">
                                        <button class="btn-add">
                                            <span class="material-symbols-outlined">local_mall</span> Thêm
                                        </button>
                                        <button class="btn-detail">Chi tiết</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3>Socola Đen Nguyên Bản 72%</h3>
                                <p class="price">890.000 VND</p>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card group">
                            <div class="product-image-wrap">
                                <img src="{{ asset('images/product2.png') }}" alt="Product 2" class="main-img">
                                <div class="product-hover-elements">

                                    <div class="product-actions">
                                        <button class="btn-add">
                                            <span class="material-symbols-outlined">local_mall</span> Thêm
                                        </button>
                                        <button class="btn-detail">Chi tiết</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3>Socola Đen Nguyên Bản 72%</h3>
                                <p class="price">890.000 VND</p>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card group">
                            <div class="product-image-wrap">
                                <img src="{{ asset('images/product3.png') }}" alt="Product 3" class="main-img">
                                <div class="product-hover-elements">

                                    <div class="product-actions">
                                        <button class="btn-add">
                                            <span class="material-symbols-outlined">local_mall</span> Thêm
                                        </button>
                                        <button class="btn-detail">Chi tiết</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3>Socola Đen Nguyên Bản 72%</h3>
                                <p class="price">890.000 VND</p>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card group">
                            <div class="product-image-wrap">
                                <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="main-img">
                                <div class="product-hover-elements">

                                    <div class="product-actions">
                                        <button class="btn-add">
                                            <span class="material-symbols-outlined">local_mall</span> Thêm
                                        </button>
                                        <button class="btn-detail">Chi tiết</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3>Socola Caramel Muối Biển</h3>
                                <p class="price">890.000 VND</p>
                            </div>
                        </div>

                        <!-- Product 5 (Clone 1) -->
                        <div class="product-card group">
                            <div class="product-image-wrap">
                                <img src="{{ asset('images/product1.png') }}" alt="Product 1" class="main-img">
                                <div class="product-hover-elements">

                                    <div class="product-actions">
                                        <button class="btn-add">
                                            <span class="material-symbols-outlined">local_mall</span> Thêm
                                        </button>
                                        <button class="btn-detail">Chi tiết</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3>Socola Đen Nguyên Bản 72%</h3>
                                <p class="price">890.000 VND</p>
                            </div>
                        </div>

                        <!-- Product 6 (Clone 2) -->
                        <div class="product-card group">
                            <div class="product-image-wrap">
                                <img src="{{ asset('images/product2.png') }}" alt="Product 2" class="main-img">
                                <div class="product-hover-elements">

                                    <div class="product-actions">
                                        <button class="btn-add">
                                            <span class="material-symbols-outlined">local_mall</span> Thêm
                                        </button>
                                        <button class="btn-detail">Chi tiết</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3>Socola Đen Nguyên Bản 72%</h3>
                                <p class="price">890.000 VND</p>
                            </div>
                        </div>

                        <!-- Product 7 (Clone 3) -->
                        <div class="product-card group">
                            <div class="product-image-wrap">
                                <img src="{{ asset('images/product3.png') }}" alt="Product 3" class="main-img">
                                <div class="product-hover-elements">

                                    <div class="product-actions">
                                        <button class="btn-add">
                                            <span class="material-symbols-outlined">local_mall</span> Thêm
                                        </button>
                                        <button class="btn-detail">Chi tiết</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3>Socola Đen Nguyên Bản 72%</h3>
                                <p class="price">890.000 VND</p>
                            </div>
                        </div>

                        <!-- Product 8 (Clone 4) -->
                        <div class="product-card group">
                            <div class="product-image-wrap">
                                <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="main-img">
                                <div class="product-hover-elements">

                                    <div class="product-actions">
                                        <button class="btn-add">
                                            <span class="material-symbols-outlined">local_mall</span> Thêm
                                        </button>
                                        <button class="btn-detail">Chi tiết</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3>Socola Caramel Muối Biển</h3>
                                <p class="price">890.000 VND</p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-nav-btn showcase-next">
                    <span class="material-symbols-outlined">arrow_right_alt</span>
                </button>
            </div>

            <!-- Pagination -->
            <div class="showcase-pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section class="category-section">
        <div class="custom-container">
            <h2 class="section-title">Danh mục sản phẩm</h2>
            <div class="category-list">
                <a href="#" class="category-item">
                    <div class="cat-img-wrap">
                        <img src="{{ asset('images/category1.png') }}" alt="Nama chocolate">
                    </div>
                    <p>Nama chocolate</p>
                </a>
                <a href="#" class="category-item">
                    <div class="cat-img-wrap">
                        <img src="{{ asset('images/category2.png') }}" alt="Nama chocolate">
                    </div>
                    <p>Nama chocolate</p>
                </a>
                <a href="#" class="category-item">
                    <div class="cat-img-wrap">
                        <img src="{{ asset('images/category3.png') }}" alt="Nama chocolate">
                    </div>
                    <p>Nama chocolate</p>
                </a>
                <a href="#" class="category-item">
                    <div class="cat-img-wrap">
                        <img src="{{ asset('images/category1.png') }}" alt="Nama chocolate">
                    </div>
                    <p>Nama chocolate</p>
                </a>
                <a href="#" class="category-item">
                    <div class="cat-img-wrap">
                        <img src="{{ asset('images/category2.png') }}" alt="Nama chocolate">
                    </div>
                    <p>Nama chocolate</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Split Banner Section -->
    <section class="split-banner-section">
        <div class="split-left">
            <img src="{{ asset('images/banner3.jpg') }}" alt="Process">
        </div>
        <div class="split-right">
            <img src="{{ asset('images/banner4.jpg') }}" alt="New Arrivals">
            
            <div class="new-arrival-card" style="background-image: url('{{ asset('images/card.png') }}');">
                <h2 class="new-title">Mới về</h2>
                <h3 class="new-product-name">Socola Đen Nguyên Bản 72%</h3>
                <p class="new-price">890.000 VND</p>
                <button class="btn-shop-now">Shop now</button>
            </div>
        </div>
    </section>

</body>

</html>
