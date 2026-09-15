@extends('layouts.app')
@section('title', 'Vietaly - Giới thiệu')

@section('content')
    <section class="about-section">
        <div class="custom-container about-container">
            <h2 class="about-title">Câu chuyện thương hiệu</h2>
            <p class="about-desc">
                La'Vietaly Ra Đời Từ Một Bước Rẽ Không Nằm Trong Kế Hoạch, Một Chuyến Đi, Những Cuộc Gặp Gỡ Tình Cờ Và Những Con Người Đặc Biệt Đã Mở Ra Một Thế Giới Mới, Thế Giới Của Hạt Cacao. Từ Sự Tò Mò Ban Đầu, Hạt Cacao Dần Trở Thành Mối Duyên, Khơi Mở Một Hành Trình Hoàn Toàn Khác. Sau Khi Tìm Hiểu Chuyên Sâu Về Lợi Ích Của Cacao, Và Tính Chất Của Hạt Cacao So Với Cacao Của Thế Giới, Từ Thực Tế, Việt Nam Sở Hữu Những Vùng Trồng Cacao Giàu Tiềm Năng, Gắn Liền Với Đất Đai Bản Địa Và Đời Sống Người Nông Dân. Thế Nhưng, Cacao Việt Phần Lớn Vẫn Được Nhìn Nhận Như Nguyên Liệu Thô, Chưa Được Tôn Vinh Đúng Giá Trị Thật Của Nó. Cũng Vì Thế, La'Vietaly Bắt Đầu Hình Thành Như Một Mong Muốn Nối Lại Sợi Dây Giữa Hạt Cacao, Con Người Và Trải Nghiệm Thưởng Thức Có Chiều Sâu. La'Vietaly Muốn Khẳng Định Rằng Nông Sản Việt Hoàn Toàn Có Thể Được Nâng Tầm Thành Những Sản Phẩm Đạt Chuẩn Quốc Tế Và Đủ Sức Vươn Ra Thế Giới.
            </p>

            <div class="about-gallery">
                <div class="about-img-wrap"><img src="{{ asset('images/intro1.jpg') }}" alt="Intro 1"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro2.jpg') }}" alt="Intro 2"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro3.png') }}" alt="Intro 3"></div>
                <div class="about-img-wrap"><img src="{{ asset('images/intro4.jpg') }}" alt="Intro 4"></div>
            </div>
        </div>
    </section>
@endsection
