@extends('layouts.app')
@section('title', 'Vietaly - Giới thiệu')

@section('page_css')
    @vite(['resources/css/about.css'])
@endsection

@section('content')
    <section class="about-section">
        <div class="custom-container about-container">
            <h2 class="about-title">Câu chuyện thương hiệu</h2>
            <p class="about-desc">
                La'Vietaly Ra Đời Từ Một Bước Rẽ Không Nằm Trong Kế Hoạch, Một Chuyến Đi, Những Cuộc Gặp Gỡ Tình Cờ Và Những
                Con Người Đặc Biệt Đã Mở Ra Một Thế Giới Mới, Thế Giới Của Hạt Cacao. Từ Sự Tò Mò Ban Đầu, Hạt Cacao Dần Trở
                Thành Mối Duyên, Khơi Mở Một Hành Trình Hoàn Toàn Khác. Sau Khi Tìm Hiểu Chuyên Sâu Về Lợi Ích Của Cacao, Và
                Tính Chất Của Hạt Cacao So Với Cacao Của Thế Giới, Từ Thực Tế, Việt Nam Sở Hữu Những Vùng Trồng Cacao Giàu
                Tiềm Năng, Gắn Liền Với Đất Đai Bản Địa Và Đời Sống Người Nông Dân. Thế Nhưng, Cacao Việt Phần Lớn Vẫn Được
                Nhìn Nhận Như Nguyên Liệu Thô, Chưa Được Tôn Vinh Đúng Giá Trị Thật Của Nó. Cũng Vì Thế, La'Vietaly Bắt Đầu
                Hình Thành Như Một Mong Muốn Nối Lại Sợi Dây Giữa Hạt Cacao, Con Người Và Trải Nghiệm Thưởng Thức Có Chiều
                Sâu. La'Vietaly Muốn Khẳng Định Rằng Nông Sản Việt Hoàn Toàn Có Thể Được Nâng Tầm Thành Những Sản Phẩm Đạt
                Chuẩn Quốc Tế Và Đủ Sức Vươn Ra Thế Giới.
            </p>
        </div>

        <div class="about-gallery-wrapper">
            <div class="about-gallery-track">
                <div class="about-img-wrap"><img src="{{ asset('images/intro1.jpg') }}" alt="Intro 1"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro2.jpg') }}" alt="Intro 2"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro3.png') }}" alt="Intro 3"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro4.jpg') }}" alt="Intro 4"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/weare.jpg') }}" alt="Intro 5"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/footer1.jpg') }}" alt="Intro 6"></div>
            </div>
            <div class="about-gallery-track">
                <div class="about-img-wrap"><img src="{{ asset('images/intro1.jpg') }}" alt="Intro 1"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro2.jpg') }}" alt="Intro 2"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro3.png') }}" alt="Intro 3"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro4.jpg') }}" alt="Intro 4"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/weare.jpg') }}" alt="Intro 5"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/footer1.jpg') }}" alt="Intro 6"></div>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="custom-container values-container">
            <div class="values-sidebar">
                <div class="values-nav" id="values-nav">
                    <div class="values-nav-item active" data-target="section-vision">
                        <h4>Vision</h4>
                        <p>Kiến Tạo Những Dòng Socola Nguyên Bản, Thuần Khiết, Mang Hương Vị Thiên Nhiên Đến Từng Giọt.</p>
                    </div>
                    <div class="values-nav-item" data-target="section-hanh-trinh">
                        <h4>Hành Trình</h4>
                        <p>Hành Trình Từ Hạt Ca Cao Thô Đến Thanh Socola Đẳng Cấp, Được Dẫn Lối Bởi Đam Mê Và Chất Lượng
                            Không Đổi.</p>
                    </div>
                    <div class="values-nav-item" data-target="section-cam-ket">
                        <h4>Cam Kết</h4>
                        <p>Duy Trì Sự Tin Cậy Qua Từng Thập Kỷ, Với Chất Lượng Và Đam Mê Vẹn Nguyên.</p>
                    </div>
                </div>
            </div>

            <div class="values-content">
                <div id="section-vision" class="value-content-item">
                    <img src="{{ asset('images/vision.png') }}" alt="Tinh Hoa Thủ Công" class="value-img">
                    <div class="value-text">
                        <h3 class="value-title">Tinh Hoa Thủ Công</h3>
                        <p class="value-desc">Chúng Tôi Cam Kết Gìn Giữ Nghệ Thuật Làm Socola Thủ Công Truyền Thống. Từng
                            Thanh Socola Được Tạo Ra Với Sự Tỉ Mỉ Của Các Nghệ Nhân, Sử Dụng Phương Pháp Ủ Lạnh Độc Đáo Để
                            Giữ Trọn Vẹn Hương Vị Tinh Túy Của Hạt Ca Cao Thượng Hạng. Đây Không Chỉ Là Socola, Mà Là Một
                            Tác Phẩm Nghệ Thuật Vị Giác.</p>
                    </div>
                </div>
                <div id="section-hanh-trinh" class="value-content-item">
                    <img src="{{ asset('images/journey.png') }}" alt="Hương Vị Bản Địa" class="value-img">
                    <div class="value-text">
                        <h3 class="value-title">Hương Vị Bản Địa</h3>
                        <p class="value-desc">Hương Vị Socola Của Chúng Tôi Bắt Nguồn Từ Chính Vùng Đất Trồng Ca Cao Đặc
                            Sản. Chúng Tôi Tôn Trọng Sự Đa Dạng Sinh Học Và Cam Kết Thu Hoạch Bền Vững, Đảm Bảo Mỗi Hạt Ca
                            Cao Đều Đạt Chuẩn Chất Lượng Cao Nhất. Socola Của Chúng Tôi Mang Đậm Dấu Ấn Và Bản Sắc Địa
                            Phương Độc Đáo.</p>
                    </div>
                </div>
                <div id="section-cam-ket" class="value-content-item">
                    <img src="{{ asset('images/commit.png') }}" alt="Từ Nông Trại Đến Tay Khách Hàng" class="value-img">
                    <div class="value-text">
                        <h3 class="value-title">Từ Nông Trại Đến Tay Khách Hàng</h3>
                        <p class="value-desc">Mối Liên Kết Bền Chặt Với Những Người Nông Dân Tâm Huyết Là Nền Tảng Của Chúng
                            Tôi. Chúng Tôi Đầu Tư Vào Cộng Đồng Địa Phương, Đảm Bảo Thu Nhập Công Bằng Và Áp Dụng Các Thực
                            Hành Canh Tác Bền Vững. Bằng Cách Này, Chúng Tôi Không Chỉ Mang Đến Sản Phẩm Tuyệt Hảo Mà Còn
                            Góp Phần Bảo Vệ Hành Tinh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="founder-section">
        <div class="custom-container">
            <div class="founder-stamp">
                <h2 class="founder-title">Nhắn nhủ từ nhà sáng lập</h2>
                <div class="founder-message">
                    <p>"Hành Trình Của La'Vietaly Bắt Đầu Không Phải Từ Một Xưởng Sản Xuất Hiện Đại, Mà Từ Tình Yêu Thuần
                        Khiết Dành Cho Những Hạt Ca Cao Nảy Mầm Trên Mảnh Đất Quê Hương.</p>
                    <p>Có Người Từng Hỏi Tôi: "Tại Sao Lại Chọn Con Đường Thủ Công Đầy Nhọc Nhằn Này?". Câu Trả Lời Nằm Ở
                        Chính Giây Phút Chúng Tôi Tận Tay Chạm Vào Những Hạt Ca Cao Còn Thơm Mùi Nắng, Hay Khi Chứng Kiến
                        Những Người Nông Dân Mỉm Cười Tự Hào Về Thành Quả Của Mình. Với Tôi, Socola Không Đơn Thuần Là Một
                        Món Quà Bánh, Mà Là Một Ngôn Ngữ Của Cảm Xúc – Nơi Vị Đắng Nguyên Bản Hòa Quyện Cùng Sự Ngọt Ngào
                        Tinh Tế Để Tạo Nên Một Bản Giao Hưởng Của Vị Giác.</p>
                    <p>Chúng Tôi Kiên Định Với Triết Lý: Tử Tế Từ Gốc Rễ. Đó Là Sự Tử Tế Với Đất Đai Thông Qua Canh Tác Bền
                        Vững, Sự Công Bằng Với Những Người Cộng Sự Nơi Nông Trường, Và Trên Hết Là Sự Trung Thực Với Sức
                        Khỏe Của Bạn. Mỗi Thanh Socola Được Ra Đời Là Một Lời Cam Kết Về Chất Lượng Không Thỏa Hiệp, Giữ
                        Trọn Vẹn Tinh Túy Thiên Nhiên Mà Không Cần Đến Những Phụ Gia Công Nghiệp.</p>
                    <p>Cảm Ơn Bạn Đã Không Chỉ Thưởng Thức Một Món Ăn, Mà Còn Lắng Nghe Câu Chuyện Của Chúng Tôi. Hy Vọng
                        Rằng, Qua Từng Lớp Hương Vị Đậm Đà Này, Bạn Sẽ Cảm Nhận Được Sự Ấm Áp, Niềm Đam Mê Và Khát Khao Nâng
                        Tầm Giá Trị Bản Địa Mà Chúng Tôi Đã Gói Trọn Trong Đó."</p>
                </div>

                <div class="founder-bottom">
                    <span class="founder-company">La'Vietaly</span>
                    <div class="founder-avatar">
                        <img src="{{ asset('images/ceo.png') }}" alt="CEO Founder">
                    </div>
                    <span class="founder-role">CEO, Founder</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Difference Section -->
    <section class="difference-section">
        <div class="custom-container difference-container">
            <h2 class="difference-title">Điều Làm Nên Sự Khác Biệt?</h2>

            <div class="difference-content">
                <div class="diff-col left-col">
                    <div class="diff-circle circle-1">
                        <span>Nguyên liệu<br>cao cấp</span>
                    </div>
                    <div class="diff-circle circle-2">
                        <span>Thủ công<br>tỉ mỉ</span>
                    </div>
                </div>

                <div class="diff-col center-col">
                    <img src="{{ asset('images/cacao.svg') }}" alt="Cacao" class="cacao-img">
                </div>

                <div class="diff-col right-col">
                    <div class="diff-circle circle-3">
                        <span>Hương vị<br>độc đáo</span>
                    </div>
                    <div class="diff-circle circle-4">
                        <span>Giao hàng<br>nhanh chóng</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('page_js')
    @vite(['resources/js/about.js'])
@endsection
@endsection
