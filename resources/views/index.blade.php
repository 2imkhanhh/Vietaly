@extends('layouts.app')
@section('title', 'Vietaly - Home')

@section('page_css')
    @vite(['resources/css/home.css'])
@endsection

@section('content')
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
            <div class="showcase-tabs">
                <button class="tab-btn active">Bán chạy</button>
                <button class="tab-btn">Mới về</button>
                <button class="tab-btn">Khuyến mãi</button>
                <button class="tab-btn">Set quà tặng</button>
            </div>

            <div class="showcase-carousel-wrapper">
                <button class="carousel-nav-btn showcase-prev">
                    <span class="material-symbols-outlined" style="transform: scaleX(-1);">arrow_right_alt</span>
                </button>

                <div class="showcase-track-container">
                    <div class="showcase-track">
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

    <!-- Who We Are Section -->
    <section class="who-we-are-section">
        <div class="custom-container who-we-are-container">
            <div class="who-we-are-left">
                <img src="{{ asset('images/weare.jpg') }}" alt="Chúng tôi là ai">
            </div>
            <div class="who-we-are-right">
                <h2 class="section-title text-left">Chúng tôi là ai?</h2>

                <div class="who-text-content">
                    <p>Chúng Tôi Tin Rằng Socola Không Chỉ Là Một Món Ăn, Mà Là Một Trải Nghiệm Cảm Xúc. Từ Việc Tuyển
                        Chọn Hạt Cacao Chất Lượng, Đến Từng Công Đoạn Chế Biến Tỉ Mỉ, Mỗi Sản Phẩm Đều Được Tạo Ra Với
                        Sự Chăm Chút Và Đam Mê.</p>
                    <p>Với Mong Muốn Mang Đến Những Hương Vị Tinh Tế Và Khác Biệt, Chúng Tôi Không Ngừng Thử Nghiệm,
                        Sáng Tạo Để Mỗi Thanh Socola Đều Kể Một Câu Chuyện Riêng – Nhẹ Nhàng, Sâu Lắng Nhưng Đầy Cuốn
                        Hút.</p>
                </div>
                <a href="#" class="view-more-link">Xem thêm <span
                        class="material-symbols-outlined">arrow_right_alt</span></a>
            </div>
        </div>
    </section>

    <!-- Store Section -->
    <section class="store-section">
        <div class="custom-container store-container">
            <div class="store-left">
                <div class="store-content-wrapper">
                    <h2 class="store-title">Cửa hàng</h2>
                    <div class="store-addresses">
                        <p>P.903, Tầng 9, Tòa Nhà Diamond Plaza, 34 Lê Duẩn, Phường Sài Gòn, Thành Phố Hồ Chí Minh, Việt
                            Nam</p>
                        <p>P.903, Tầng 9, Tòa Nhà Diamond Plaza, 34 Lê Duẩn, Phường Sài Gòn, Thành Phố Hồ Chí Minh, Việt
                            Nam</p>
                    </div>
                    <a href="#" class="store-link">Xem thêm <span
                            class="material-symbols-outlined">arrow_right_alt</span></a>
                </div>
            </div>
            <div class="store-right">
                <div class="store-images">
                    <div class="store-img-wrap side-img left-img">
                        <img src="{{ asset('images/store2.png') }}" alt="Store 2">
                    </div>
                    <div class="store-img-wrap center-img">
                        <img src="{{ asset('images/store1.png') }}" alt="Store 1">
                    </div>
                    <div class="store-img-wrap side-img right-img">
                        <img src="{{ asset('images/store3.png') }}" alt="Store 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Review Section -->
    <section class="review-section">
        <div class="custom-container review-container">
            <button class="review-nav-btn review-prev">
                <span class="material-symbols-outlined">arrow_left_alt</span>
            </button>

            <div class="review-track-container">
                <div class="review-track">
                    <div class="review-card">
                        <div class="review-card-left">
                            <span class="review-subtitle">KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI</span>
                            <p class="review-quote">“Mình không phải kiểu người mê socola lắm, nhưng thử bên này xong
                                là bị ghiền luôn. Vị không quá ngọt, ăn rất mượt và có chiều sâu chứ không bị gắt như
                                mấy loại thông thường. Đặc biệt là dòng caramel muối biển, ăn xong vẫn còn dư vị rất dễ
                                chịu. Đóng gói cũng xịn xò, nhận hàng thấy khá chỉn chu. Chắc chắn sẽ mua lại và thử
                                thêm mấy vị khác.”</p>
                            <span class="review-author">Sarah L.</span>

                            <div class="review-product">
                                <img src="{{ asset('images/product1.png') }}" alt="Product" class="review-product-img">
                                <div class="review-product-info">
                                    <span class="review-product-title">Socola Đen Nguyên Bản 72%</span>
                                    <span class="review-product-price">890.000 VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-card-right">
                            <img src="{{ asset('images/review.png') }}" alt="Review">
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-card-left">
                            <span class="review-subtitle">KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI</span>
                            <p class="review-quote">“Socola ở đây thật sự rất khác biệt, mỗi thanh đều mang lại cảm
                                giác chân thật về nguyên liệu chất lượng cao. Từ cách đóng gói tỉ mỉ đến hương vị tuyệt
                                vời, Vietaly thực sự làm mình ấn tượng. Mình sẽ còn ủng hộ dài dài!”</p>
                            <span class="review-author">Tony T.</span>

                            <div class="review-product">
                                <img src="{{ asset('images/product2.png') }}" alt="Product" class="review-product-img">
                                <div class="review-product-info">
                                    <span class="review-product-title">Socola Hạt Dẻ Cười 65%</span>
                                    <span class="review-product-price">950.000 VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-card-right">
                            <img src="{{ asset('images/banner2.jpg') }}" alt="Review 2">
                        </div>
                    </div>
                </div>
            </div>

            <button class="review-nav-btn review-next">
                <span class="material-symbols-outlined">arrow_right_alt</span>
            </button>
        </div>

        <div class="review-pagination">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="review-bottom-bg">
            <img src="{{ asset('images/background.svg') }}" alt="Background Pattern">
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="custom-container team-container">
            <div class="team-left">
                <img src="{{ asset('images/team.jpg') }}" alt="Team">
            </div>
            <div class="team-right">
                <h2 class="team-title">Mời vào đội</h2>
                <div class="team-positions">
                    <div class="team-position">
                        <h3>Nhân viên bán hàng (Sales Associate)</h3>
                        <p>Tư vấn sản phẩm, hỗ trợ khách hàng tại cửa hàng và đảm bảo trải nghiệm mua sắm tốt nhất.</p>
                    </div>
                    <div class="team-position">
                        <h3>Nhân viên vận hành đơn hàng (Order Fulfillment Staff)</h3>
                        <p>Xử lý đơn hàng, đóng gói sản phẩm và phối hợp giao vận nhanh chóng, chính xác.</p>
                    </div>
                    <div class="team-position">
                        <h3>Nhân viên Marketing (Marketing Executive)</h3>
                        <p>Lên ý tưởng nội dung, quản lý mạng xã hội và triển khai các chiến dịch quảng bá thương hiệu.</p>
                    </div>
                </div>
                <a href="#" class="btn-apply-circle">
                    <span>Ứng tuyển<br>ngay</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Instagram Section -->
    <section class="instagram-section">
        <div class="custom-container instagram-container">
            <div class="instagram-images">
                <div class="insta-img-wrap"><img src="{{ asset('images/footer1.jpg') }}" alt="Instagram 1"></div>
                <div class="insta-img-wrap"><img src="{{ asset('images/banner4.jpg') }}" alt="Instagram 2"></div>
                <div class="insta-img-wrap"><img src="{{ asset('images/weare.jpg') }}" alt="Instagram 3"></div>
            </div>
            <div class="instagram-text">
                <h2>Theo Dõi Chúng Tôi<br>Trên Instagram</h2>
                <a href="#" class="insta-link">@LA'VIETALY <span
                        class="material-symbols-outlined">call_made</span></a>
            </div>
        </div>
    </section>

@section('page_js')
    @vite(['resources/js/home.js'])
@endsection
@endsection
