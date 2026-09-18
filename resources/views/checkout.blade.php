@extends('layouts.app')
@section('title', 'Vietaly - Thanh toán')

@section('page_css')
    @vite(['resources/css/checkout.css'])
@endsection

@section('content')
    <div class="checkout-page">
        <div class="custom-container">
            <div class="checkout-header">
                <a href="/gio-hang" class="back-link"><span class="material-symbols-outlined">west</span> Quay lại</a>
            </div>

            <div class="checkout-container">
                <div class="checkout-form-section">
                    <div class="checkout-title-row">
                        <h1 class="checkout-title">Thanh toán</h1>
                        <div class="login-link">Có tài khoản? <a href="#">Đăng nhập</a></div>
                    </div>

                    <!-- Contact Info -->
                    <div class="form-group">
                        <h2 class="form-title">Thông tin liên hệ</h2>
                        <div class="form-row">
                            <input type="email" placeholder="Email address*" class="form-input">
                            <input type="text" placeholder="Phone number*" class="form-input">
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="form-group">
                        <h2 class="form-title">Địa chỉ giao hàng</h2>
                        <div class="form-row">
                            <input type="text" placeholder="Thành phố" class="form-input full-width">
                        </div>
                        <div class="form-row">
                            <input type="text" placeholder="Quận" class="form-input">
                            <input type="text" placeholder="Huyện" class="form-input">
                        </div>
                        <div class="form-row address-row">
                            <input type="text" placeholder="Địa chỉ" class="form-input address-detail">
                            <input type="text" placeholder="Căn hộ / Số phòng" class="form-input address-apt">
                        </div>
                    </div>

                    <!-- Delivery Method -->
                    <div class="form-group">
                        <h2 class="form-title">Phương thức giao nhận</h2>
                        <div class="form-row delivery-methods">
                            <label class="delivery-option" id="delivery-ship">
                                <input type="radio" name="delivery" value="giao-tan-noi">
                                <div class="delivery-icon"
                                    style="-webkit-mask-image: url('{{ asset('images/iconship.svg') }}'); mask-image: url('{{ asset('images/iconship.svg') }}');">
                                </div>
                                <span>Giao tận nơi</span>
                            </label>
                            <label class="delivery-option" id="delivery-store">
                                <input type="radio" name="delivery" value="nhan-tai-cua-hang">
                                <div class="delivery-icon"
                                    style="-webkit-mask-image: url('{{ asset('images/iconget.svg') }}'); mask-image: url('{{ asset('images/iconget.svg') }}');">
                                </div>
                                <span>Nhận tại cửa hàng</span>
                            </label>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="form-group">
                        <h2 class="form-title">Phương thức thanh toán</h2>
                        <div class="payment-methods-box">
                            <label class="payment-option">
                                <input type="radio" name="payment" value="paypal" checked>
                                <span class="radio-custom"></span>
                                <span class="payment-name">Paypal</span>
                                <img src="{{ asset('images/iconpaypal.png') }}" alt="Paypal" class="payment-logo">
                            </label>
                            <label class="payment-option">
                                <input type="radio" name="payment" value="visa">
                                <span class="radio-custom"></span>
                                <span class="payment-name">Thẻ thanh toán quốc tế</span>
                            </label>
                            <label class="payment-option">
                                <input type="radio" name="payment" value="atm">
                                <span class="radio-custom"></span>
                                <span class="payment-name">Thẻ thanh toán nội địa</span>
                            </label>
                            <label class="payment-option">
                                <input type="radio" name="payment" value="qr">
                                <span class="radio-custom"></span>
                                <span class="payment-name">Quét mã QR</span>
                            </label>
                        </div>
                    </div>

                    <button class="confirm-btn">Xác nhận thông tin</button>

                    <div class="checkout-footer-links">
                        <a href="#">Privacy policy</a>
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>

                <div class="checkout-summary-section">
                    <div class="ticket-wrapper">
                        <div class="ticket-top">
                            <div class="summary-items">
                                <div class="summary-item">
                                    <div class="summary-item-img">
                                        <img src="{{ asset('images/product1.png') }}" alt="Chocolate">
                                    </div>
                                    <div class="summary-item-info">
                                        <div class="summary-item-name">Socola Đen Nguyên Bản 72%</div>
                                        <div class="summary-item-qty">
                                            <button class="qty-btn">-</button>
                                            <span>1</span>
                                            <button class="qty-btn">+</button>
                                        </div>
                                    </div>
                                    <div class="summary-item-price">
                                        <div class="old-price">1.000.000đ</div>
                                        <div class="new-price">890.000đ</div>
                                    </div>
                                </div>

                                <div class="summary-item">
                                    <div class="summary-item-img">
                                        <img src="{{ asset('images/product2.png') }}" alt="Chocolate">
                                    </div>
                                    <div class="summary-item-info">
                                        <div class="summary-item-name">Socola Đen Nguyên Bản 72%</div>
                                        <div class="summary-item-qty">
                                            <button class="qty-btn">-</button>
                                            <span>1</span>
                                            <button class="qty-btn">+</button>
                                        </div>
                                    </div>
                                    <div class="summary-item-price">
                                        <div class="old-price">1.000.000đ</div>
                                        <div class="new-price">890.000đ</div>
                                    </div>
                                </div>
                            </div>

                            <div class="coupon-box">
                                <img src="{{ asset('images/iconticket.svg') }}" alt="Ticket" class="coupon-icon">
                                <input type="text" placeholder="Nhập mã giảm giá">
                                <button class="coupon-btn">Áp dụng</button>
                            </div>
                        </div>

                        <div class="ticket-bottom">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('page_js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const deliveryOptions = document.querySelectorAll('.delivery-option');
            deliveryOptions.forEach(option => {
                option.addEventListener('click', function() {
                    deliveryOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                });
            });
        });
    </script>
@endsection
@endsection
