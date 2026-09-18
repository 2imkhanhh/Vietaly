@extends('layouts.app')
@section('title', 'Vietaly - Chi tiết sản phẩm')

@section('page_css')
    @vite(['resources/css/product-detail.css'])
@endsection

@section('page_js')
    @vite(['resources/js/product-detail.js'])
@endsection

@section('content')
    <div class="product-detail-page">
        <div class="custom-container">
            <div class="product-detail-grid">

                <div class="product-gallery">
                    <div class="gallery-thumbnails">
                        <div class="thumbnail active">
                            <img src="{{ asset('images/productdetail1.png') }}" alt="Thumbnail 1">
                        </div>
                        <div class="thumbnail">
                            <img src="{{ asset('images/productdetail2.png') }}" alt="Thumbnail 2">
                        </div>
                        <div class="thumbnail">
                            <img src="{{ asset('images/productdetail3.png') }}" alt="Thumbnail 3">
                        </div>
                    </div>

                    <div class="gallery-main">
                        <button class="gallery-arrow prev-arrow">
                            <span class="material-symbols-outlined">arrow_left_alt</span>
                        </button>

                        <div class="main-image-container">
                            <div class="main-image-track" id="main-image-track">
                                <img src="{{ asset('images/productdetail1.png') }}" alt="Main Product Image 1"
                                    class="gallery-img">
                                <img src="{{ asset('images/productdetail2.png') }}" alt="Main Product Image 2"
                                    class="gallery-img">
                                <img src="{{ asset('images/productdetail3.png') }}" alt="Main Product Image 3"
                                    class="gallery-img">
                            </div>
                        </div>

                        <button class="gallery-arrow next-arrow">
                            <span class="material-symbols-outlined">arrow_right_alt</span>
                        </button>
                    </div>
                </div>

                <div class="product-info-panel">
                    <h1 class="product-title">Bộ Sưu Tập The Faiseurs: Hộp Quà 6 Thanh Sô-cô-la – Phiên Bản Phục Sinh</h1>
                    <p class="product-price">890.000đ</p>

                    <p class="product-desc">
                        Hãy tận hưởng những hương vị mê hoặc từ Bộ sưu tập The Faiseurs. Thưởng thức trọn vẹn dải hương vị
                        tuyệt vời của các dòng sô-cô-la đen thượng hạng.
                    </p>

                    <div class="add-to-cart-row">
                        <div class="quantity-selector">
                            <button class="qty-btn qty-minus">-</button>
                            <input type="text" class="qty-input" value="1" readonly>
                            <button class="qty-btn qty-plus">+</button>
                        </div>

                        <button class="btn-add-cart">
                            <span class="material-symbols-outlined">local_mall</span>
                            Thêm vào giỏ hàng
                        </button>
                    </div>

                    <div class="policy-boxes">
                        <div class="policy-box">
                            <img src="{{ asset('images/iconship.svg') }}" alt="Shipping" class="policy-icon">
                            <span>Giao hàng nội thành trong ngày, trong 1 giờ</span>
                        </div>
                        <div class="policy-box">
                            <img src="{{ asset('images/iconget.svg') }}" alt="Store" class="policy-icon">
                            <span>Nhận hàng miễn phí tại cửa hàng</span>
                        </div>
                        <div class="policy-box">
                            <img src="{{ asset('images/iconsupport.svg') }}" alt="Support" class="policy-icon">
                            <span>Hỗ trợ 24/7</span>
                        </div>
                    </div>

                    <div class="product-accordions">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Thành phần</h3>
                                <span class="material-symbols-outlined accordion-icon">add</span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <p>Thành Phần: Cacao 48% (Hạt Cacao, Bơ Cacao), Đường Mía, Sữa Bột Béo (21%).<br>
                                        Khối lượng tịnh: 24 g<br>
                                        Giá mỗi Kg: 2.750.000đ</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Chất gây dị ứng</h3>
                                <span class="material-symbols-outlined accordion-icon">add</span>
                            </div>
                            <div class="accordion-content">
                                <div class="accordion-inner">
                                    <p>Sản phẩm có thể chứa dấu vết của các loại hạt và sữa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="suggested-section">
                <h2 class="section-title">Gợi ý cho bạn</h2>

                <div class="showcase-carousel-wrapper">
                    <button class="carousel-nav-btn showcase-prev">
                        <span class="material-symbols-outlined" style="transform: scaleX(-1);">arrow_right_alt</span>
                    </button>

                    <div class="showcase-track-container">
                        <div class="showcase-track">
                            <div class="product-card group">
                                <div class="product-image-wrap">
                                    <img src="{{ asset('images/suggest1.png') }}" alt="Suggest 1" class="main-img">
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
                                    <img src="{{ asset('images/suggest2.png') }}" alt="Suggest 2" class="main-img">
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
                                    <img src="{{ asset('images/suggest3.png') }}" alt="Suggest 3" class="main-img">
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
                                    <img src="{{ asset('images/suggest4.png') }}" alt="Suggest 4" class="main-img">
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
                                    <img src="{{ asset('images/suggest1.png') }}" alt="Suggest 1" class="main-img">
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
                                    <img src="{{ asset('images/suggest2.png') }}" alt="Suggest 2" class="main-img">
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
                                    <img src="{{ asset('images/suggest3.png') }}" alt="Suggest 3" class="main-img">
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
                                    <img src="{{ asset('images/suggest4.png') }}" alt="Suggest 4" class="main-img">
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

                <div class="showcase-pagination">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </section>

        </div>
    </div>
@endsection
