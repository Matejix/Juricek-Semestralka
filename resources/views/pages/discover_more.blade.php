@extends('layouts.master')
@section('title')
    DiscoverMore
@endsection
@section('content')
    <section class="discover">
        <div class="heading-box">
            <h1 class="heading-primary u-margin-bottom-big">
                <span class="heading-primary--main">Latinsky nazov</span>
                <span class="heading-primary--sub">Slovensky nazov</span>
            </h1>
        </div>
        <div class="discover__wrap">
            <div class="discover__text">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. A ipsa soluta aliquam ipsum, voluptatibus quae animi harum dicta, laboriosam, modi saepe similique asperiores. Perferendis nesciunt libero reiciendis numquam voluptas impedit!
                    Ut et facere sed, dolores quisquam nostrum, ratione quod quos voluptates voluptas dolorum, ipsam maiores nihil fugit laborum eligendi culpa non totam fugiat? Molestiae vero laudantium, odit quos beatae ipsa.
                    Laudantium corporis numquam dignissimos sint provident aut qui pariatur reprehenderit distinctio minima odit
                    </p>
                    <p>
                    Dolorem nesciunt placeat quae! Corrupti, mollitia, sunt excepturi repudiandae officia blanditiis eligendi ab quibusdam velit laborum illo eius nulla aspernatur est nam nemo animi ratione atque aperiam dolorem nihil sint.
                    Inventore est iusto assumenda nihil. Ducimus nobis exercitationem esse facilis a aspernatur quod obcaecati deserunt iusto ut et eum, minima expedita velit quae molestias rerum nesciunt. Delectus assumenda illo deleniti?
                    Ullam officiis, necessitatibus cum at aliquid ab officia quia optio minima dolor qui cupiditate deleniti
                    </p>
            </div>
            <div class="discover__picture-box">
                <figure class="discover__shape">
                    <img src="{{ asset("/images/animal4-big.jpg") }}" alt="Animal photo" class="discover__img">
                    <figcaption class="discover__caption">
                        <ul>
                            <li>Dožitie</li>
                            <li>počet na zemi</li>
                            <li>druh</li>
                            <li>vyskyts</li>
                            <li>Ohrozenie: velke</li>
                        </ul>

                        <div class="discover__caption-text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. A ipsa soluta aliquam ipsum, voluptatibus quae animi harum dicta, laboriosam, modi saepe similique asperiores. Perferendis nesciunt libero reiciendis numquam voluptas impedit!
                                Ut et faas dolorum, ipsam maiores nihil fugit laborum eligendi culpa non totam fugiat? Molestiae vero laudantium, odit quos beatae ipsa.
                                Laudantium corporis numquam dignissimos sint provident aut qui pariatur reprehenderit distinctio minima odit
                                </p>
                                <p>
                                Dolorem nesciunt placeat quae! Corrupti, mollitia, sunt excepturi repudiandae officia blanditiis eligendi ab quibusdam velit laborum illo eius nulla aspernatur est nam nemo animi ratione atque aperiam dolorem nihil sint.
                                Inventore est iusto assumen
                                </p>
                                <p>
                                    Dolorem nesciunt placeat quae! Corrupti, mollitia, sunt excepturi repudiandae officia blanditiis eligendi ab quibusdam velit laborum illo eius nulla aspernatur est nam nemo animi ratione atque aperiam dolorem nihil sint.
                                    Inventore est iusto assumen
                                </p>
                                <p>
                                    Dolorem nesciunt placeat quae! Corrupti, mollitia, sunt excepturi repudiandae officia blanditiis eligendi ab quibusdam velit laborum illo eius nulla aspernatur est nam nemo animi ratione atque aperiam dolorem nihil sint.
                                    Inventore est iusto assumen
                                </p>
                                <p>
                                    Dolorem nesciunt placeat quae! Corrupti, mollitia, sunt excepturi repudiandae officia blanditiis eligendi ab quibusdam velit laborum illo eius nulla aspernatur est nam nemo animi ratione atque aperiam dolorem nihil sint.
                                    Inventore est iusto assumen
                                </p>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section class="discover__comments" id="comments">
        <div class="discover__comment-counter">
            <h3 class="heading-tertiary">
                <span class="discover__comment-counter--number">2</span>
                <span>comments</span>
            </h3>
        </div>
        
        <h3 class="heading-tertiary u-margin-bottom-medium text-center">Comment section</h3>
        <div class="discover__comments-boxes">
            
           <div class="comment__box">
                @auth
                    @if (auth()->user()->admin == 1)
                        <div class="comment__icon">
                            <a href="#popup" class="comment__icon--edit"><i class="far fa-edit"></i></a>
                            <a href="#popup-delete" class="comment__icon--delete"><i class="far fa-trash-alt"></i></a> 
                        </div>
                    @endif
                @endauth
                <figure class="comment__shape">
                    <img src="{{ asset("/images/profile1.jpg") }}" alt="Profile picture1" class="comment__img">
                    <figcaption class="comment__caption">Jon Smith</figcaption>
                </figure>
                <div class="comment__text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi libero sunt labore sit expedita nostrum saepe eos fugit dolorem quod, itaque eaque sapiente totam iure cumque dolorum autem asperiores.
                        sunt labore sit expedita nostrum saepe eos fugit dolorem quod, itaque eaque sapiente totam iure cumque dolorum autem asperiores.
                    </p>
                </div>
            </div>

            <div class="comment__box">
                @auth
                    @if (auth()->user()->admin == 1)
                        <div class="comment__icon">
                            <a href="#popup" class="comment__icon--edit"><i class="far fa-edit"></i></a>
                            <a href="#popup-delete" class="comment__icon--delete"><i class="far fa-trash-alt"></i></a> 
                        </div>
                    @endif
                @endauth
                
                <figure class="comment__shape">
                    <img src="{{ asset("/images/profile2.jpg") }}" alt="Profile picture2" class="comment__img">
                    <figcaption class="comment__caption">Elizabeth Marx</figcaption>
                </figure>
                <div class="comment__text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi libero sunt labore sit expedita nostrum saepe eos fugit dolorem quod, itaque eaque sapiente totam iure cumque dolorum autem asperiores.
                    </p>
                </div>
            </div>
            
        </div>
        @auth
            <div class="text-center u-margin-top-big">
                <a href="#popup" class="btn-text">Add comment &rarr;</a>
            </div>
        @endauth
        
    </section>
@endsection