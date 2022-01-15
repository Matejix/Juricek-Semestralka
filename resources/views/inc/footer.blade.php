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
                    <form action="#" class="form">
                        <div class="heading-tertiary u-margin-bottom-small black-font">
                            <h3>Want news?</h3>
                        </div>
                        <div class="form__group">
                            <input class="form__input" type="text" name="name-subscribe" id="name-subscribe" placeholder="Name" value="@auth {{ auth()->user()->firstname }}@endauth" required>
                            <label class="form__label" for="name-subscribe">Name</label>
                        </div>

                        <div class="form__group">
                            <input class="form__input" type="email" name="email-subscribe" id="email-subscribe" placeholder="E-mail" value="@auth {{ auth()->user()->email }}@endauth" required>
                            <label for="email-subscribe" class="form__label">E-mail</label>
                        </div>
                        <div class="form__group">
                            <button class="btn btn--green-blue">Subscribe</button>
                        </div>
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
                    <form action="#" class="form">
                        <div class="heading-tertiary u-margin-bottom-small">
                            <h3>Want news?</h3>
                        </div>
                        <div class="form__group">
                            <input class="form__input" type="text" name="name-subscribe" id="name-subscribe" placeholder="Name" value="@auth {{ auth()->user()->firstname }}@endauth" required>
                            <label class="form__label" for="name-subscribe">Name</label>
                        </div>

                        <div class="form__group">
                            <input class="form__input" type="email" name="email-subscribe" id="email-subscribe" placeholder="E-mail" value="@auth {{ auth()->user()->email }}@endauth" required>
                            <label for="email-subscribe" class="form__label">E-mail</label>
                        </div>
                        <div class="form__group">
                            <button class="btn btn--green-blue">Subscribe</button>
                        </div>
                    </form>
                    
                </div>
            </div>
           
        </div>
    </div>
</footer>

@endif

<div class="popup" id="popup">
    <div class="popup__content">
        <div class="popup__box">
            <a href="#comments" class="popup__close">&times;</a>
            <h2 class="heading-secondary u-margin-bottom-medium">Comment form</h2>
            <form action="#" class="popup__form">
                <textarea name="comment-area" id="comment-area" rows="10" cols="30" class="popup__textarea u-margin-bottom-small" required></textarea>
                
                <button type="submit" class="btn btn--green-blue">Add</button>
            </form>
        </div>
    </div>
</div>

<div class="popup popup-delete" id="popup-delete">
    <div class="popup__content">
        <div class="popup__box">
            <a href="#comments" class="popup__close">&times;</a>
            
            <a href="#comments" class="btn btn--coral">Delete</a>
        </div>
    </div>
</div>

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