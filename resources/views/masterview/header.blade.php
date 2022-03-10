    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">AADA Cafe</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                <li><a href="{{ url('/') }}" class="{{ ($title == 'AADA Cafe - Home' )? 'active' : ''}}">Home</a></li>
                <li><a href="{{ url('/today-special') }}" class="{{ ($title == 'AADA Cafe - Today Special' )? 'active' : '' }}">Today Special</a></li>
                <li><a href="{{ url('/minuman') }}" class="{{ ($title == 'AADA Cafe - Menu' )? 'active' : '' }}">Menu</a></li>
                <li><a href="{{ url('/contact') }}" class="{{ ($title == 'AADA Cafe - Contact' )? 'active' : '' }}">Contact</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
