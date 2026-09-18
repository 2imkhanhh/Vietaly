@extends('layouts.app')
@section('title', 'Vietaly - Sản phẩm')

@section('page_css')
    @vite(['resources/css/products.css'])
@endsection

@section('content')
    <div class="products-page">
        <div class="custom-container">
            <h1 class="page-title">Tất cả sản phẩm</h1>
            <div class="products-toolbar">
                <div class="toolbar-left">
                    <button class="filter-btn">
                        <img src="{{ asset('images/icon_filter.svg') }}" alt="Filter" class="filter-icon">
                        Filter
                    </button>
                    <span class="product-count">48 sản phẩm</span>
                </div>
                <div class="toolbar-right">
                    <button class="sort-btn">
                        Xếp theo
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/category1.png') }}" alt="Socola Đen Nguyên Bản 72%" class="product-img">
                        <div class="product-actions">
                            <button class="btn-add">
                                <span class="material-symbols-outlined">local_mall</span>
                                Thêm
                            </button>
                            <button class="btn-details">Chi tiết</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Socola Đen Nguyên Bản 72%</h3>
                        <p class="product-price">890.000 VND</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/category2.png') }}" alt="Socola Đen Nguyên Bản 72%" class="product-img">
                        <div class="product-actions">
                            <button class="btn-add">
                                <span class="material-symbols-outlined">local_mall</span>
                                Thêm
                            </button>
                            <button class="btn-details">Chi tiết</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Socola Đen Nguyên Bản 72%</h3>
                        <p class="product-price">890.000 VND</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/category3.png') }}" alt="Socola Đen Nguyên Bản 72%" class="product-img">
                        <div class="product-actions">
                            <button class="btn-add">
                                <span class="material-symbols-outlined">local_mall</span>
                                Thêm
                            </button>
                            <button class="btn-details">Chi tiết</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Socola Đen Nguyên Bản 72%</h3>
                        <p class="product-price">890.000 VND</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/product4.png') }}" alt="Socola Caramel Muối Biển" class="product-img">
                        <div class="product-actions">
                            <button class="btn-add">
                                <span class="material-symbols-outlined">local_mall</span>
                                Thêm
                            </button>
                            <button class="btn-details">Chi tiết</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Socola Caramel Muối Biển</h3>
                        <p class="product-price">890.000 VND</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/product1.png') }}" alt="Socola Đen Nguyên Bản 72%" class="product-img">
                        <div class="product-actions">
                            <button class="btn-add">
                                <span class="material-symbols-outlined">local_mall</span>
                                Thêm
                            </button>
                            <button class="btn-details">Chi tiết</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Socola Đen Nguyên Bản 72%</h3>
                        <p class="product-price">890.000 VND</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/product2.png') }}" alt="Socola Đen Nguyên Bản 72%" class="product-img">
                        <div class="product-actions">
                            <button class="btn-add">
                                <span class="material-symbols-outlined">local_mall</span>
                                Thêm
                            </button>
                            <button class="btn-details">Chi tiết</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Socola Đen Nguyên Bản 72%</h3>
                        <p class="product-price">890.000 VND</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/product3.png') }}" alt="Socola Đen Nguyên Bản 72%" class="product-img">
                        <div class="product-actions">
                            <button class="btn-add">
                                <span class="material-symbols-outlined">local_mall</span>
                                Thêm
                            </button>
                            <button class="btn-details">Chi tiết</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Socola Đen Nguyên Bản 72%</h3>
                        <p class="product-price">890.000 VND</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/product4.png') }}" alt="Socola Caramel Muối Biển" class="product-img">
                        <div class="product-actions">
                            <button class="btn-add">
                                <span class="material-symbols-outlined">local_mall</span>
                                Thêm
                            </button>
                            <button class="btn-details">Chi tiết</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Socola Caramel Muối Biển</h3>
                        <p class="product-price">890.000 VND</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
