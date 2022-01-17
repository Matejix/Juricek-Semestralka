@if ($errors->any())
                <div class="error-wrapper" 
                style="background-color: orangered; 
                        display:inline-block;
                        position:fixed;
                        top:74%;
                        right:2%;
                        font-size:meidum;
                        z-index:10000;
                        color:white;
                        border-radius:9px;
                        padding:15px;">
                    <h2 class="error-wrapper-heading u-margin-bottom-small"><b>Form is filled wrong</b></h2>
                    <ol class="error-wrapper-list">
                        @foreach ($errors->all() as $error)
                        <li>
                            <p class="error-item">{{ $error }}</p>
                        </li>
                        @endforeach
                    </ol>
                </div>
                @endif
<div class="login">
@auth
        <span class="login__logged">
            {{ auth()->user()->username }}
        </span>
    @else
        <input type="checkbox" class="login__checkbox" id="navi-toggle" name="remember">
            <label for="navi-toggle" class="login__button btn btn--green-blue">
                <span class="login__text">
                    Login
                </span>
            </label>

        <div class="login__background">&nbsp;</div>

        <form action="{{ route("login") }}" class="login__form form" method="POST">
            @csrf
            <div class="heading-tertiary u-margin-bottom-small">
                <h3>Login form</h3>
            </div>
            <div class="form__group">
                <input class="form__input" type="text" name="username" id="username" placeholder="Username" required>
                <label class="form__label" for="username">Username</label>
            </div>
    
            <div class="form__group">
                <input class="form__input" type="password" name="password" id="password" placeholder="Password" required>
                <label for="password" class="form__label">Password</label>
            </div>
    
            <div class="form__radio-group u-margin-bottom-medium">
                <input class="form__radio-input" type="checkbox" name="loginRadio" id="loginRadio">
                <label for="loginRadio" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    Stay logged
                </label>
            </div>
    
            <div class="form__group">
              <button type="submit" class="btn btn--coral" >Login</button>
                <a href="#popup-register" class="btn-text u-margin-left-big" id="reg">Register now</a>
            </div>
        </form>
@endauth  
        
    @auth
        <form action="{{ route("logout") }}" method="POST" class="form__logout">
            @csrf
            <button type="submit" class="btn btn--coral"><span class="login__text">Logout</span></button>
        </form>
    @endauth
   
</div>
<header class="header" id="header">
    <div class="header__logo-box">
        <img src="{{ asset("/images/logo1.png") }}" alt="Logo" class="header__logo">
    </div>
    <div class="header__menu">
        <ul>
            <li><a href="{{ route("home-page") }}">Home</a></li>
            <li><a href="{{ route("aboutUs-page") }}">About Us</a></li>
            <li><a href="{{ route("articles-page") }}">Articles</a></li>
            <li><a href="{{ route("gallery-page") }}">Gallery</a></li>
            @auth
                @if (auth()->user()->admin == 1)
                    <li><a href="{{ route("admin-page") }}">Admin</a></li>
                @endif
            @endauth
           
        </ul>
    </div>
    @auth
        @if (auth()->user()->admin == 0)
        <div class="header__donate-box">
           <a href="#donate-popup" class="login__text btn btn--blue"><span>{{ auth()->user()->donates->sum('amount') }}€ </span>donate</a>
        </div>
        @endif
    @endauth
   
</header>