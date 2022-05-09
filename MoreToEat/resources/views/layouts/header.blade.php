<head>
<link rel="stylesheet" href="css/styleHF.css">
<link rel="stylesheet" href="css/PublicConscent.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a18c2b5991.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
</head>
<header>
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light header_container">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Intra</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/trombi"><i class="far fa-address-book ng-scope"></i> TROMBICULAIRE</a>
          </li>

          </ul>
          <!-- <ul class="navbar-nav navbar-right" id="ul_navbar_right">
            <li><a class="nav-link" href="#"><i class="fas fa-search ng-scope"></i></a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-newspaper ng-scope"></i></a></li>
            <li><a class="nav-link" href="#"><i class="fa fa-comments ng-scope"></i></a></li>
          </ul> -->
        </div>
      </div>
      <div class="login_css">
        @if (Route::has('login'))
          @auth
              <div class="username">
                <img src="https://static.thenounproject.com/png/4038155-200.png" alt="account_logo">
                <p>{{ Auth::user()->name }}</p>
              </div>
              <ul class="ul_dropdown">
              <a href="{{ url('/dashboard') }}"><li>Dashboard</li></a>
              <a href="{{ url('/admin') }}" ><li>Admin</li></a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><li>Logout</li></a>
              
              </ul>
            </div>
            @else
              <div class="username">
              <img src="https://static.thenounproject.com/png/4038155-200.png" alt="account_logo">
                <p style="font-size: 25px;" id="csale">Profil</p>
              </div>
              <ul class="ul_dropdown">
                <a href="{{ route('login') }}"><li>Log in</li></a>
                @if (Route::has('register'))
                  <a href="{{ route('register') }}"><li>Register</li></a>
                @endif
                <a href="{{ url('/loginCookie') }}" ><li>Log In Cookie</li></a>
              </ul>
          @endauth
        @endif
      </div>
   </nav>
</header>
