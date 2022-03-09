@extends('masterview.content')

@section('content')
<section class="tm-welcome-section">
        <div class="container tm-position-relative">
        <div class="tm-lights-container">
            <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-1">
            <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-2">
            <img src="{{ asset('asset/img/light.png') }}" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
            <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{ asset('asset/img/header-line.png') }}" alt="Line" class="tm-header-line">&nbsp;Today's Special&nbsp;&nbsp;<img src="{{ asset('asset/img/header-line.png') }}" alt="Line" class="tm-header-line"></h2>
            <h2 class="gold-text tm-welcome-header-2">AADA Cafe</h2>
            <p class="white-text tm-welcome-description">Today Special adalah menu <span class="gold-text">Eksklusif</span> yang di buat khusus oleh chef profesional yang ada di AADA Cafe. Special menu yang disajikan akan selalu berbeda di setiap minggunya. Sehingga menu yang disajikan adalah
            menu - menu yang ekslusif serta berkualitas.</p>
            <a href="#main" class="tm-more-button tm-more-button-welcome">Read More</a>      
        </div>
        <img src="{{ asset('asset/img/table-set.png') }}" alt="Table Set" class="tm-table-set img-responsive">
        </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
        <div class="container" id="main">
        <section class="tm-section tm-section-margin-bottom-0 row">
            <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
            </div>
            <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
                <img src="{{$menu_salted->gambar}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_salted->nama}}</h3><hr class="tm-popular-item-hr">
                    <p>{{$menu_salted->deskripsi}}</p>
                    <br>
                    <p>Stok: {{$menu_salted->stok}}</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{$menu_pavlova->gambar}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_pavlova->nama}}</h3><hr class="tm-popular-item-hr">
                <p>{{$menu_pavlova->deskripsi}}</p>
                <br>
                <p>Stok: {{$menu_pavlova->stok}}</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{$menu_croissant->gambar}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_croissant->nama}}</h3><hr class="tm-popular-item-hr">
                <p>{{$menu_croissant->deskripsi}}</p>
                <br>
                <p>Stok: {{$menu_croissant->stok}}</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{$menu_aglio->gambar}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_aglio->nama}}</h3><hr class="tm-popular-item-hr">
                <p>{{$menu_aglio->deskripsi}}</p>
                <br>
                <p>Stok: {{$menu_aglio->stok}}</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{$menu_chamomile->gambar}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_chamomile->nama}}</h3><hr class="tm-popular-item-hr">
                    <p>{{$menu_chamomile->deskripsi}}</p>
                    <br>
                    <p>Stok: {{$menu_chamomile->stok}}</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="{{$menu_pea->gambar}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_pea->nama}}</h3><hr class="tm-popular-item-hr">
                    <p>{{$menu_pea->deskripsi}}</p>
                    <br>
                    <p>Stok: {{$menu_pea->stok}}</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
                </div>              
            </div>
            </div>       
        </section>
        <section class="tm-section">
            <div class="row">
            <div class="col-lg-12 tm-section-header-container">
                <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Daily Menu</h2> 
                <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
            </div>          
            <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
                <div class="col-lg-4 col-md-4">
                    <img src="{{ asset('asset/img/menu-board.png') }}" alt="Menu board" class="tm-daily-menu-img">      
                </div>            
                <div class="col-lg-8 col-md-8">
                AADA Cafe juga memiliki menu harian yang dapat di pesan setiap jam operasional cafe. 
                Hidangan yang nikmat dan juga berkualitas di setiap saatnya. Berikut daftar menu harian AADA Cafe:</p>
                    <ol class="margin-top-30">
                    <li>Americano</li> 
                    <li>Cappuccino</li>
                    <li>Mocha</li> 
                    <li>Blended Cream</li> 
                    <li>Blended Coffee</li> 
                    </ol>
                <a href="#" class="tm-more-button margin-top-30">Read More</a>    
                </div>
            </div>
            </div>          
        </section>
        </div>
    </div> 
@endsection
