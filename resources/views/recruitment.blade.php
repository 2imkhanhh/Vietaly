@extends('layouts.app')
@section('title', 'Vietaly - Tuyển dụng')

@section('page_css')
    @vite(['resources/css/recruitment.css'])
@endsection

@section('content')
    <div class="recruitment-page">
        <img src="{{ asset('images/banner5.png') }}" alt="Vietaly Tuyển dụng" class="recruitment-banner">

        <div class="recruitment-content">
            <h1 class="recruitment-title">La' Vietaly</h1>

            <div class="recruitment-grid">
                <div class="recruitment-card">
                    <img src="{{ asset('images/icontalent.png') }}" alt="Nuôi dưỡng nhân tài" class="recruitment-icon">
                    <h3>Nuôi dưỡng nhân tài</h3>
                    <p>Giúp Nhân Viên Phát Huy Tối Đa Năng Lực</p>
                </div>

                <div class="recruitment-card">
                    <img src="{{ asset('images/iconprogress.png') }}" alt="Luôn cầu tiến" class="recruitment-icon">
                    <h3>Luôn cầu tiến</h3>
                    <p>Không Ngừng Đặt Ra Mục Tiêu Thách Thức Hơn</p>
                </div>

                <div class="recruitment-card">
                    <img src="{{ asset('images/iconcustomer.png') }}" alt="Vì khách hàng" class="recruitment-icon">
                    <h3>Vì khách hàng</h3>
                    <p>Không Ngừng Đặt Ra Mục Tiêu Thách Thức Hơn</p>
                </div>

                <div class="recruitment-card">
                    <img src="{{ asset('images/icontrust.png') }}" alt="Tạo niềm tin" class="recruitment-icon">
                    <h3>Tạo niềm tin</h3>
                    <p>Làm Điều Đúng, Minh Bạch, Chính Trực</p>
                </div>
            </div>
        </div>

        <div class="nhip-song-section">
            <h2 class="nhip-song-title">Nhịp sống La'Vietaly</h2>
            <div class="nhip-song-grid">
                <img src="{{ asset('images/lavie1.png') }}" alt="Nhịp sống 1" class="nhip-song-img nhip-song-img-1">
                <img src="{{ asset('images/lavie2.png') }}" alt="Nhịp sống 2" class="nhip-song-img nhip-song-img-2">
                <img src="{{ asset('images/lavie3.png') }}" alt="Nhịp sống 3" class="nhip-song-img nhip-song-img-3">
                <img src="{{ asset('images/lavie4.png') }}" alt="Nhịp sống 4" class="nhip-song-img nhip-song-img-4">
                <img src="{{ asset('images/lavie5.png') }}" alt="Nhịp sống 5" class="nhip-song-img nhip-song-img-5">
            </div>
        </div>

        <div class="jobs-section">
            <div class="jobs-container">
                <div class="jobs-header">
                    <h2 class="jobs-title">Job phấp phới, chờ đồng đội mới!</h2>
                    <p class="jobs-subtitle">Vị trí đang tuyển dụng</p>

                    <div class="jobs-search-wrapper">
                        <div class="jobs-search-box">
                            <span class="material-symbols-outlined">search</span>
                            <input type="text" placeholder="Nhập tên vị trí bạn muốn ứng tuyển nhé">
                        </div>
                    </div>
                </div>

                <div class="jobs-grid">
                    @php
                        $jobs = [
                            'Nhân viên thiết kế đồ họa',
                            'Nhân viên HR',
                            'Trưởng phòng Hành chính - Nhân sự',
                            'Trưởng phòng Kế Toán',
                            'Giám đốc Sáng tạo',
                            'Trưởng phòng Quản lý và tổ chức sự kiện',
                        ];
                    @endphp

                    @foreach ($jobs as $job)
                        <div class="job-card">
                            <h3 class="job-title">{{ $job }}</h3>
                            <p class="job-skills">Illustrator, Photoshop, After effect</p>

                            <div class="job-divider"></div>

                            <div class="job-details">
                                <div class="job-detail-col">
                                    <span class="job-detail-label">Mức lương</span>
                                    <span class="job-detail-value">8 - 15M</span>
                                </div>
                                <div class="job-detail-col">
                                    <span class="job-detail-label">Hình thức</span>
                                    <span class="job-detail-value">Toàn thời gian</span>
                                </div>
                                <div class="job-detail-col">
                                    <span class="job-detail-label">Địa điểm</span>
                                    <span class="job-detail-value">Hà Nội</span>
                                </div>
                            </div>

                            <a href="#" class="job-apply-link">Ứng tuyển ngay</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
