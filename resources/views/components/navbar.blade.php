<nav class="navbar navbar-expand-md shadow-sm" style="background-color: #8DCBE6;">
    <div class="container">
      <a class="navbar-brand" href="{{ route('view-index') }}">{{ __('Amazing E-Grocery') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @auth
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(isset($current) && $current == 'home') active @endif" href="{{ route('view-home') }}">{{__('Home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(isset($current) && $current == 'cart') active @endif" href="{{ route('view-cart') }}">{{__('Cart')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(isset($current) && $current == 'profile') active @endif" href="{{ route('view-profile') }}">{{__('Profile')}}</a>
                    </li>
                    @if(Auth::user()->role->role_name == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link @if(isset($current) && $current == 'maintenance') active @endif" href="{{ route('view-accounts') }}">{{ __("Account Maintenance") }}</a>
                        </li>
                    @endif
                </ul>
            @endauth
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('view-register') }}">{{ __('Register') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('view-login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__("Logout")}}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>