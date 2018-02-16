<!-- header -->
<header id="header" class="header">
  <div class="container-fluid">
    <hgroup>  
      <!-- logo -->   
      <h1><a  title="Antzuolako 8 milak"><img src="{{ asset('images/logo.png') }}" alt="Antzuolako 8 milak"/></a></h1>
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
              <li class="{{ Request::is('izen-ematea') ? "active" : "" }}""><a href="{{url('/izen-ematea')}}">Izen-ematea</a></li>
              <li class="{{ Request::is('ibilbidea') ? "active" : "" }}""><a href="{{url('/ibilbidea')}}">Ibilbidea</a></li>
              <li class="{{ Request::is('galeria/2017') ? "active" : "" }}""><a href="{{url('/galeria/2017')}}">Galeria 2017</a></li>
               <li class="{{ Request::is('sailkapena') ? "active" : "" }}""><a href="{{url('/sailkapena')}}">Sailkapena</a></li>
              <li class="{{ Request::is('kontaktua') ? "active" : "" }}""><a href="{{url('/kontaktua')}}">Kontaktua</a></li>
            </ul>
          </div>
        </div>
      </nav>     
      <!-- nav -->    
    </hgroup>
  </div>
</header>
<!-- header -->

