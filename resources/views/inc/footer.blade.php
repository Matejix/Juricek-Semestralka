:@if (Request::routeIs("aboutUs-page") || Request::routeIs("discoverMore-page"))
        <footer class="footer footer--white">
        <div class="footer__logo-box">
            <img src="{{ asset("/images/logo2.png") }}" alt="Logo" class="footer__logo">
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__text-box">
                    <div class="footer__social-link">
                        <i class="fab fa-facebook black-font"></i>
                        <i class="fab fa-twitter black-font"></i>
                        <i class="fab fa-instagram black-font"></i>
                        <i class="fab fa-google-plus-g black-font"></i>
                    </div>
                    <div class="footer__contact ">
                        <a href="#" class="footer__link black-font">email@email.com </a>
                        <a href="#" class="footer__link black-font">+421 888 812 834</a>
                    </div>
                    <div class="footer__copyright">
                        <span class="footer__copyright-text">Author of this web page is &copy; Matejix. This project was made for High school exam. Inspiration for design is from &copy; Jonas Schmedtmann, who give permission to use this design, but you have to mention him.</span>
                    </div>
                </div>
                
            </div>
            <div class="col-1-of-2">
                <div class="subscribe">
                    <div class="subscribe__form">
                        <form action="{{ route('subscribe.store') }}" class="form" method="POST">
                            @csrf
                            <div class="heading-tertiary u-margin-bottom-small black-font">
                                <h3>Want news?</h3>
                            </div>
                            <div class="form__group">
                                <input class="form__input" type="text" name="name" id="name-subscribe" placeholder="Name" required>
                                <label class="form__label" for="name-subscribe">Name</label>
                            </div>

                            <div class="form__group">
                                <input class="form__input" type="email" name="email" id="email-subscribe" placeholder="E-mail" required>
                                <label for="email-subscribe" class="form__label">E-mail</label>
                            </div>
                            @auth
                                @if(auth()->user()->admin == 0)
                            <div class="form__group" type="submit" style="cursor:pointer">
                                <button class="btn btn--green-blue">Subscribe</button>
                            </div>
                                @endif
                            @endauth
                        </form>
                        
                    </div>
                </div>
            
            </div>
        </div>
    </footer>
@else

    <footer class="footer">
        <div class="footer__logo-box">
            <img src="{{ asset("/images/logo1.png") }}" alt="Logo" class="footer__logo">
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__text-box">
                    <div class="footer__social-link">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                    <div class="footer__contact">
                        <a href="#" class="footer__link">email@email.com </a>
                        <a href="#" class="footer__link">+421 888 812 834</a>
                    </div>
                    <div class="footer__copyright">
                        <span class="footer__copyright-text">Author of this web page is &copy; Matejix. This project was made for High school exam. Inspiration for design is from &copy; Jonas Schmedtmann, who give permission to use this design, but you have to mention him.</span>
                    </div>
                </div>
                
            </div>
            <div class="col-1-of-2">
                <div class="subscribe">
                    <div class="subscribe__form">
                        <form action="{{ route('subscribe.store') }}" class="form" method="POST">
                            @csrf
                            <div class="heading-tertiary u-margin-bottom-small">
                                <h3>Want news?</h3>
                            </div>
                            <div class="form__group">
                                <input class="form__input" type="text" name="name" id="name-subscribe" placeholder="Name"required>
                                <label class="form__label" for="name-subscribe">Name</label>
                            </div>

                            <div class="form__group">
                                <input class="form__input" type="email" name="email" id="email-subscribe" placeholder="E-mail" required>
                                <label for="email-subscribe" class="form__label">E-mail</label>
                            </div>
                            @auth
                                @if(auth()->user()->admin == 0)
                                <div class="form__group">
                                    <button class="btn btn--green-blue" type="submit" style="cursor:pointer">Subscribe</button>
                                </div>
                                @endif
                            @endauth
                        </form>
                        
                    </div>
                </div>
            
            </div>
        </div>
    </footer>

@endif

<a href="#" class="to-top"><i class="fas fa-arrow-alt-circle-up"></i></a>

<div class="popup" id="donate-popup">
    <div class="popup__content">
        <div class="popup__box">
            <a href="#header" class="popup__close">&times;</a>
            <form action="{{ route("donate.store") }}" class="popup__form" method="POST">
                @csrf;
                <h2 class="heading-secondary u-margin-bottom-medium">Min 2€</h2>
                <input class="form__input u-margin-bottom-medium" type="number" name="amount" id="donate" min="2" placeholder="€">                
                <button type="submit" class="btn btn--green-blue">Donate</button>
            </form>
        </div>
    </div>
</div>

<div class="popup" id="popup-register">
    <div class="popup__content">
        <div class="popup__box">
            <a href="#header" class="popup__close">&times;</a>
            <h2 class="heading-secondary u-margin-bottom-medium">Register form</h2>
            <form action="{{ route("register") }}" class="popup__form" method="POST">
                @csrf
                <div class="form__group">
                    <input class="form__input" type="text" name="firstname" id="firstname" placeholder="Firstname" required>
                    <label class="form__label" for="firstname">Firstname</label>
                </div>

                <div class="form__group">
                    <input class="form__input" type="text" name="lastname" id="lastname" placeholder="Lastname" required>
                    <label class="form__label" for="lastname">Lastname</label>
                </div>

                <div class="form__group">
                    <input class="form__input" type="text" name="username" id="newusername" placeholder="New username" required>
                    <label class="form__label" for="newusername">New username</label>
                </div>

                <div class="form__group">
                    <input class="form__input" type="email" name="email" id="email-register" placeholder="E-mail" required>
                    <label for="email-register" class="form__label">E-mail</label>
                </div>

                <div class="form__group">
                    <input class="form__input" type="password" name="password" id="register-password" placeholder="Password" required>
                    <label for="register-password" class="form__label">Password</label>
                </div>

                <div class="form__group">
                    <input class="form__input" type="password" name="password_confirmation" id="confirm-password" placeholder="Confirm password" required>
                    <label for="confirm-password" class="form__label">Confirm password</label>
                </div>
                <div class="form__group">
                    <button type="submit" class="btn btn--coral">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>