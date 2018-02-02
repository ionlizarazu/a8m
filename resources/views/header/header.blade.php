<!-- header -->
<header id="header" class="header">
  <div class="container-fluid">
    <hgroup>  
      <!-- logo -->   
      <h1> <a href="index1.html" title="Picxa"><img src="{{ asset('images/logo.png') }}" alt="Picxa" title="Picxa"/></a> </h1> 
      <!-- logo -->    
      <!-- nav -->   
      <nav>
        <div class="menu-expanded">
          <div class="nav-icon">
            <div id="menu" class="menu"></div>
            <p>Menua</p>
          </div>
          <div class="cross"> <span class="linee linea1"></span> <span class="linee linea2"></span> <span class="linee linea3"></span> </div>
          <div class="main-menu">
            <ul>
              <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{url('/')}}">Hasiera</a></li>
              <li class="{{ Request::is('route') ? "active" : "" }}""><a href="{{url('/route')}}">Ibilbidea</a></li>
              <li class="{{ Request::is('/about') ? "active" : "" }}""><a href="{{url('/about')}}">Guri buruz</a></li>
              
              <li class="{{ Request::is('/contact') ? "active" : "" }}""><a href="contact.html">Kontaktua</a></li>
            </ul>
          </div>
        </div>
      </nav>     
      <!-- nav -->    
    </hgroup>
  </div>
</header>
<!-- header -->

