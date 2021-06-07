<nav class="navbar navbar-expand-lg fixed-top navbar-light d-flex justify-content-center">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="#" rel="tooltip" data-original-title=""
      title=""><img src="{{asset('image/logo.png')}}" alt="" width="180" height="40"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav navbar-left font-weight-bold">

          <li class="nav-item"><a class="nav-link" href="#" >Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Help
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">FAQ</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Kontak Kami</a>
              
            </div>
          </li>

          <div class="navbar-right">
            <li><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i><span class="number-cart text-center">0</span></a></li>
            <li class="nav-item dropdown"> 
              <a class="nav-link dropdown-toggle" href="#" id="navbarUser" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user"></i> John
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarUser">
                <a class="dropdown-item" href="#">Profil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log Out</a>
                
              </div>
            </li>
          </div>
        </ul>
      </div>
    </div>
</nav>