@extends('layouts.master')
@section('title')
    DiscoverMore
@endsection
@section('content')
    <section class="discover">
        <div class="heading-box">
            <h1 class="heading-primary u-margin-bottom-big">
                <span class="heading-primary--main">{{ $article->animal->latin_name }}</span>
                <span class="heading-primary--sub">{{ $article->animal->slovak_name }}</span>
            </h1>
        </div>
        <div class="discover__wrap">
            <div class="discover__text">
                <p>
                    {{ $article->text }}
                </p>
            </div>
            <div class="discover__picture-box">
                <figure class="discover__shape">
                    <img src="{{ '/storage'.'/'.$article->animal->image }}" alt="Animal photo" class="discover__img">
                    <figcaption class="discover__caption">
                        <ul>
                            <li><b>Doživanie:   </b>
                                {{ $article->animal->lifespan }}</li>
                            <li><b>Počet v divočine:   </b>
                                {{ $article->animal->number }}</li>
                            <li><b>Druh:   </b>
                                {{ $article->animal->species }}</li>
                            <li><b>Výskyt:   </b>
                                {{ $article->animal->occurrence }}</li>
                            <li><b>Ohrozenie:   </b>
                                {{ $article->animal->endangered }}</li>
                        </ul>

                        <div class="discover__caption-text">
                            <p>
                                {{ $article->text }}
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
                <span class="discover__comment-counter--number">
                    {{ $comments->where('article_id', $article->id)->count() }}
                </span>
                <span>comments</span>
            </h3>
        </div>
        
        <h3 class="heading-tertiary u-margin-bottom-medium text-center">Comment section</h3>
        <div class="discover__comments-boxes">
        @foreach ($comments as $comment)
            
                @if($comment->article_id == $article->id)    
                    <div class="comment__box">
                        @auth
                            @if (auth()->user()->admin == 1)
                                <div class="comment__icon">
                                    <form action="/comment/{{ $comment['id'] }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('delete')
            
                                        <button type="submit" class="comment__icon--delete">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    
                                </div>
                            @elseif (auth()->user()->id == $comment->user_id)
                            <div class="comment__icon">
                                <a href="/comment/{{ $comment['id'] }}/edit" class="comment__icon--edit"><i class="far fa-edit"></i></a>
                                <form action="/comment/{{ $comment['id'] }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('delete')
        
                                    <button type="submit" class="comment__icon--delete">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form> 
                            </div>
                            @endif
                        @endauth

                        <figure class="comment__shape">
                            <img src="{{ asset("/images/profile1.jpg") }}" alt="Profile picture1" class="comment__img">
                            <figcaption class="comment__caption">{{ $comment->user->username }}</figcaption>
                        </figure>
                        <div class="comment__text">
                            <p>
                                {{ $comment->content }}
                            </p>
                        </div>
                    </div>
                @endif 
            @endforeach

        </div>
        @auth
            <div class="text-center u-margin-top-big">
                <a href="#popup" class="btn-text">Add comment &rarr;</a>
            </div>
        @endauth
        
    </section>

    
<div class="popup" id="popup">
    <div class="popup__content">
        <div class="popup__box">
            <a href="#comments" class="popup__close">&times;</a>
            <h2 class="heading-secondary u-margin-bottom-medium">Comment form</h2>
            <form action="{{  route('comment.store') }}" class="popup__form" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="@auth {{ auth()->user()->id }}@endauth">
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <textarea name="content" id="comment-area" rows="10" cols="30" class="popup__textarea u-margin-bottom-small" required></textarea>
                
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
@endsection