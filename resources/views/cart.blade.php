@extends('layouts.app')
@section('title', 'Vietaly - Giỏ hàng')

@section('page_css')
    @vite(['resources/css/cart.css'])
@endsection

@section('content')
<div class="cart-page">
    <div class="custom-container">
        <h1 class="cart-title">Giỏ hàng</h1>
        
        <div class="cart-container">
            <div class="cart-items">
                <!-- Item 1 -->
                <div class="cart-item">
                    <div class="cart-item-img">
                        <img src="{{ asset('images/product1.png') }}" alt="Chocolate">
                    </div>
                    <div class="cart-item-info">
                        <div class="cart-item-name">The Faiseurs Collection 6 Chocolate Bars Gift Box - Easter Edition</div>
                    </div>
                    <div class="cart-item-price">890.000 VND</div>
                    <div class="cart-item-quantity">
                        <button class="qty-btn">-</button>
                        <span>1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="cart-item-remove">
                        <span class="material-symbols-outlined">delete</span>
                    </button>
                </div>

                <!-- Item 2 -->
                <div class="cart-item">
                    <div class="cart-item-img">
                        <img src="{{ asset('images/product2.png') }}" alt="Chocolate">
                    </div>
                    <div class="cart-item-info">
                        <div class="cart-item-name">The Faiseurs Collection 6 Chocolate Bars Gift Box - Easter Edition</div>
                    </div>
                    <div class="cart-item-price">890.000 VND</div>
                    <div class="cart-item-quantity">
                        <button class="qty-btn">-</button>
                        <span>1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="cart-item-remove">
                        <span class="material-symbols-outlined">delete</span>
                    </button>
                </div>

                <!-- Item 3 -->
                <div class="cart-item" style="border-bottom: none;">
                    <div class="cart-item-img">
                        <img src="{{ asset('images/product3.png') }}" alt="Chocolate">
                    </div>
                    <div class="cart-item-info">
                        <div class="cart-item-name">The Faiseurs Collection 6 Chocolate Bars Gift Box - Easter Edition</div>
                    </div>
                    <div class="cart-item-price">890.000 VND</div>
                    <div class="cart-item-quantity">
                        <button class="qty-btn">-</button>
                        <span>1</span>
                        <button class="qty-btn">+</button>
                    </div>
                    <button class="cart-item-remove">
                        <span class="material-symbols-outlined">delete</span>
                    </button>
                </div>
            </div>

            <div class="ticket">
                <div class="summary-row">
                    <span>Tổng tiền hàng</span>
                    <span>800.000đ</span>
                </div>
                <div class="summary-row discount">
                    <span>Giảm giá sản phẩm</span>
                    <span>- 200.000đ</span>
                </div>
                <div class="summary-row">
                    <span>Phí vận chuyển</span>
                    <span>0đ</span>
                </div>
                
                <div class="summary-divider"></div>
                
                <div class="summary-total">
                    <span>Tổng</span>
                    <span>800.000đ</span>
                </div>
                
                <div class="coupon-box">
                    <img src="{{ asset('images/iconticket.svg') }}" alt="Ticket" class="coupon-icon">
                    <input type="text" placeholder="Nhập mã giảm giá">
                    <button class="coupon-btn">Áp dụng</button>
                </div>
                
                <button class="checkout-btn">Tiến hành thanh toán</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_js')
    @vite(['resources/js/cart.js'])
@endsection
