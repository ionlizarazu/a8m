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
            <p>menu</p>
          </div>
          <div class="cross"> <span class="linee linea1"></span> <span class="linee linea2"></span> <span class="linee linea3"></span> </div>
          <div class="main-menu">
            <ul>
              <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{url('/')}}">Home</a></li>
              <li class="{{ Request::is('/about') ? "active" : "" }}><a href="about.html">About</a></li>
              <li class="{{ Request::is('/blog') ? "active" : "" }}><a href="blog.html">blog</a></li>
              <li class="{{ Request::is('/contact') ? "active" : "" }}><a href="contact.html">contact</a></li>
            </ul>
          </div>
        </div>
      </nav>     
      <!-- nav -->    
    </hgroup>
  </div>
</header>
<!-- header -->
