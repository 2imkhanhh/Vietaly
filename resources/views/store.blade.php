@extends('layouts.app')
@section('title', 'Vietaly - Cửa hàng')

@section('page_css')
    @vite(['resources/css/store.css'])
@endsection

@section('content')
    <div class="store-page">
        <div class="store-map-container">
            <iframe id="map-iframe"
                src="https://maps.google.com/maps?q=21.031599,105.798836&t=&z=16&ie=UTF8&iwloc=&output=embed"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="store-panel">
            <h1 class="store-title">Cửa hàng</h1>

            <div class="store-locations">
                <div class="store-location-card active" onclick="changeMap('hanoi', this)">
                    <h3>Hà Nội</h3>
                    <p>LA'VIETALY</p>
                    <p>Địa chỉ: 123 Đường Cầu Giấy, Quận Cầu Giấy, Hà Nội, Việt Nam</p>
                    <p>Email: hanoi@lavietaly.com<br>Số điện thoại: 0971773868</p>
                </div>

                <div class="store-location-card" onclick="changeMap('saigon', this)">
                    <h3>Sài Gòn</h3>
                    <p>LA'VIETALY</p>
                    <p>Địa chỉ: P.903, Tầng 9, Tòa nhà Diamond Plaza, 34 Lê Duẩn, Phường Sài Gòn, Thành phố Hồ Chí Minh,
                        Việt Nam</p>
                    <p>Email: anh.le@lavietaly.com<br>Số điện thoại: 0971773868</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        const maps = {
            hanoi: "https://maps.google.com/maps?q=21.031599,105.798836&t=&z=16&ie=UTF8&iwloc=&output=embed",
            saigon: "https://maps.google.com/maps?q=10.782877,106.698751&t=&z=16&ie=UTF8&iwloc=&output=embed"
        };

        function changeMap(city, element) {
            document.getElementById('map-iframe').src = maps[city];

            const cards = document.querySelectorAll('.store-location-card');
            cards.forEach(card => card.classList.remove('active'));
            element.classList.add('active');
        }
    </script>
@endsection
