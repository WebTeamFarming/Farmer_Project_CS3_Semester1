
<nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-success fixed-top">
    <div class="container">

        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbar">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('home')}}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link text-white" href="{{route('farmer_store')}}">Farmer Store</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('tool_store')}}">Tool Store</a>
                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="/uploads/avatars/{{Auth::user()->image}}" class="rounded-circle" alt="Cinque Terre" style="width:30px;">
                            <span class="text-white">{{ Auth::user()->name }}</span> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{url('/profile')}}" class="dropdown-item text-dark" style="list-style:none;"><i class="fas fa-user"></i><span class="ml-1">Profile</span></a>
                            {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                            </a>
--}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button style="margin-left:20px;"><i class="fas fa-sign-out-alt"></i><span class="ml-1">Logout</span></button>
                            </form>
                            {{-- <a href="{{route('login')}}" class="dropdown-item text-dark" style="list-style:none;"><i class="fas fa-sign-out-alt"></i><span class="ml-1">Logout</span></a> --}}
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


