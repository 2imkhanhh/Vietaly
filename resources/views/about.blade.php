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

        <div class="about-gallery">
            <div class="about-img-wrap"><img src="{{ asset('images/intro1.jpg') }}" alt="Intro 1"></div>
            <div class="about-img-wrap"><img src="{{ asset('images/intro2.jpg') }}" alt="Intro 2"></div>
            <div class="about-img-wrap"><img src="{{ asset('images/intro3.png') }}" alt="Intro 3"></div>
            <div class="about-img-wrap"><img src="{{ asset('images/intro4.jpg') }}" alt="Intro 4"></div>
        </div>
    </section>

    <section class="values-section">
        <div class="custom-container values-container">
            <!-- Left Sidebar -->
            <div class="values-sidebar">
                <div class="values-nav" id="values-nav">
                    <div class="values-nav-item active" data-target="section-vision">
                        <h4>Vision</h4>
                        <p>Kiến Tạo Những Dòng Socola Nguyên Bản, Thuần Khiết, Mang Hương Vị Thiên Nhiên Đến Từng Giọt.</p>
                    </div>
                    <div class="values-nav-item" data-target="section-hanh-trinh">
                        <h4>Hành Trình</h4>
                        <p>Hành Trình Từ Hạt Ca Cao Thô Đến Thanh Socola Đẳng Cấp, Được Dẫn Lối Bởi Đam Mê Và Chất Lượng Không Đổi.</p>
                    </div>
                    <div class="values-nav-item" data-target="section-cam-ket">
                        <h4>Cam Kết</h4>
                        <p>Duy Trì Sự Tin Cậy Qua Từng Thập Kỷ, Với Chất Lượng Và Đam Mê Vẹn Nguyên.</p>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="values-content">
                <div id="section-vision" class="value-content-item">
                    <img src="{{ asset('images/vision.png') }}" alt="Tinh Hoa Thủ Công" class="value-img">
                    <div class="value-text">
                        <h3 class="value-title">Tinh Hoa Thủ Công</h3>
                        <p class="value-desc">Chúng Tôi Cam Kết Gìn Giữ Nghệ Thuật Làm Socola Thủ Công Truyền Thống. Từng Thanh Socola Được Tạo Ra Với Sự Tỉ Mỉ Của Các Nghệ Nhân, Sử Dụng Phương Pháp Ủ Lạnh Độc Đáo Để Giữ Trọn Vẹn Hương Vị Tinh Túy Của Hạt Ca Cao Thượng Hạng. Đây Không Chỉ Là Socola, Mà Là Một Tác Phẩm Nghệ Thuật Vị Giác.</p>
                    </div>
                </div>
                <div id="section-hanh-trinh" class="value-content-item">
                    <img src="{{ asset('images/journey.png') }}" alt="Hương Vị Bản Địa" class="value-img">
                    <div class="value-text">
                        <h3 class="value-title">Hương Vị Bản Địa</h3>
                        <p class="value-desc">Hương Vị Socola Của Chúng Tôi Bắt Nguồn Từ Chính Vùng Đất Trồng Ca Cao Đặc Sản. Chúng Tôi Tôn Trọng Sự Đa Dạng Sinh Học Và Cam Kết Thu Hoạch Bền Vững, Đảm Bảo Mỗi Hạt Ca Cao Đều Đạt Chuẩn Chất Lượng Cao Nhất. Socola Của Chúng Tôi Mang Đậm Dấu Ấn Và Bản Sắc Địa Phương Độc Đáo.</p>
                    </div>
                </div>
                <div id="section-cam-ket" class="value-content-item">
                    <img src="{{ asset('images/commit.png') }}" alt="Từ Nông Trại Đến Tay Khách Hàng" class="value-img">
                    <div class="value-text">
                        <h3 class="value-title">Từ Nông Trại Đến Tay Khách Hàng</h3>
                        <p class="value-desc">Mối Liên Kết Bền Chặt Với Những Người Nông Dân Tâm Huyết Là Nền Tảng Của Chúng Tôi. Chúng Tôi Đầu Tư Vào Cộng Đồng Địa Phương, Đảm Bảo Thu Nhập Công Bằng Và Áp Dụng Các Thực Hành Canh Tác Bền Vững. Bằng Cách Này, Chúng Tôi Không Chỉ Mang Đến Sản Phẩm Tuyệt Hảo Mà Còn Góp Phần Bảo Vệ Hành Tinh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.value-content-item');
            const navItems = document.querySelectorAll('.values-nav-item');

            const observerOptions = {
                root: null,
                rootMargin: '-30% 0px -70% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute('id');
                        
                        navItems.forEach(item => {
                            item.classList.remove('active');
                        });
                        
                        const activeNav = document.querySelector(`.values-nav-item[data-target="${id}"]`);
                        if (activeNav) {
                            activeNav.classList.add('active');
                        }

                        sections.forEach(section => {
                            section.classList.remove('active');
                        });
                        entry.target.classList.add('active');
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });

            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    const id = this.getAttribute('data-target');
                    const targetSection = document.getElementById(id);
                    if (targetSection) {
                        const headerHeight = document.querySelector('.main-header').offsetHeight || 85;
                        const elementPosition = targetSection.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerHeight - 40;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });
                    }
                });
            });
        });
    </script>
@endsection
