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
            <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{ asset('asset/img/header-line.png') }}" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="{{ asset('asset/img/header-line.png') }}" alt="Line" class="tm-header-line"></h2>
            <h2 class="gold-text tm-welcome-header-2">AADA Cafe</h2>
            <p class="white-text tm-welcome-description">AADA Cafe adalah Cafe berkonsep Italia yang<span class="gold-text"> Mewah</span> serta <span class="gold-text">Elegan</span>. Menyediakan berbagai menu dari berbagai macam negara dengan bahan yang berkualitas serta higienis.
            AADA Cafe akan menyuguhkan pengalaman baru dalam menikmati hidangan dengan konsep restoran yang aethetic dan juga berkelas, sehingga dapat meninggalkan kesan tersendiri.
            Dengan harga yang ekonomis, Anda dapat merasakan hdangan mewah dengan konsep yang mewah pula.</p>
            <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>
        <img src="{{ asset('asset/img/table-set.png') }}" alt="Table Set" class="tm-table-set img-responsive">             
        </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
        <div class="container" id="main">
        <section class="tm-section row">
            <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
            <h2> AADA Cafe</h2>
            <p class="tm-welcome-description">AADA Cafe memiliki menu utama yaitu Coffee yang di proses dengan berbagai teknik khusus sehingga menghasilkan kopi yang nikmat serta berkualitas. 
              Biji Kopi yang digunakan juga merupakan biji kopi pilihan dari berbagai negara.</p>
            <a href="#" class="tm-more-button margin-top-30">Read More</a> 
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
                <img src="{{ asset('asset/img/make-coffee1.jpg') }}" alt="Image" class="img-circle img-thumbnail">  
            </div>              
            </div>            
        </section>          
        <section class="tm-section tm-section-margin-bottom-0 row">
            <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
            </div>
            <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
                <img src="{{asset('asset/img/'.$menu_americano->gambar)}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
                <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_americano->nama}}</h3><hr class="tm-popular-item-hr">
                <p>{{$menu_americano->deskripsi}}</p>
                <div class="order-now-container">
                    <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="{{asset('asset/img/'.$menu_cappuccino->gambar)}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_cappuccino->nama}}</h3><hr class="tm-popular-item-hr">
                <p>{{$menu_cappuccino->deskripsi}}</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="{{asset('asset/img/'.$menu_mocha->gambar)}}" alt="Popular" class="tm-popular-item-img" style="width: 286px; height: 166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{$menu_mocha->nama}}</h3><hr class="tm-popular-item-hr">
                <p>{{$menu_mocha->deskripsi}}</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
          </div>          
        </section>
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="tm-site-logo"> Today's Special</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>          
          <div class="col-lg-12 tm-special-container margin-top-60">
            <div class="tm-special-container-left"> <!-- left -->
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="{{asset('asset/img/'.$menu_salted->gambar)}}" alt="Special" class="tm-special-img img-responsive" style="width: 520px; height: 400px;">  
                  <a href="#">
                    <div class="tm-special-description">
                      <h3 class="tm-special-title">{{$menu_salted->nama}}</h3>
                      <p>{{$menu_salted->deskripsi}}</p>  
                    </div>            
                  </a>
                </div>
              </div>
            </div>
            <div class="tm-special-container-right"> <!-- right -->
              <div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="{{asset('asset/img/'.$menu_pavlova->gambar)}}" alt="Special" class="img-responsive" style="width: 360px; height: 207px;">  
                    <a href="#">
                      <div class="tm-special-description">
                        <h3 class="tm-special-title">{{ $menu_pavlova->nama}}</h3>
                        <p>{{$menu_pavlova->deskripsi}}</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>
              <div class="tm-special-container-lower">
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="{{asset('asset/img/'.$menu_croissant->gambar)}}" alt="Special" class="img-responsive" style="width: 155px; height: 155px;">  
                    <a href="#">
                      <div class="tm-special-description">
                        <p>{{$menu_croissant->nama}}</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="{{asset('asset/img/'.$menu_aglio->gambar)}}" alt="Special" class="img-responsive" style="width: 155px; height: 155px;">  
                    <a href="#">
                      <div class="tm-special-description">
                        <p>{{$menu_aglio->nama}}</p>
                      </div>
                    </a>
                  </div>
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
                <p>AADA Cafe juga memiliki menu harian yang dapat di pesan setiap jam operasional cafe. 
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