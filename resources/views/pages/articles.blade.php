@extends('layouts.master')
@section('title')
    Articles
@endsection
@section('content')
    <section class="articles">
       <div class="heading-primary articles__heading-primary u-margin-bottom-big">
        <span class="heading-primary--main">Articles list</span>
        <span class="heading-primary--sub">choose what you interested in</span>
       </div>
       <div class="articles__box">
        @if ($articles->count() > 3)
            <div class="articles__left-arrow lava">
                <i class="fas fa-angle-double-left"></i>
            </div>          
        @endif
           <div class="articles__list slider-box">
                <ul class="slider-slide">
                    @if ($articles->isEmpty())
                        <span class="heading-primary--sub">No articles!</span>
                        @else
                        @foreach ($articles as $article)
                        <li class="slider-item">
                            <div class="card small card--left u-margin-top-small">
                                <div class="card__side small card__side--front" style="box-shadow:none">
                                    <div class="card__picture card__picture--{{ ($loop->index %3)+1 }}" style="background-image: url({{ '/storage'.'/'.$article->animal->image }})">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--{{ ($loop->index %3)+1 }}">{{ $article->animal->slovak_name }}</span>
                                    </h4>
                                </div>
                                <div class="card__side small card__side--back card__side--back-{{ ($loop->index %3)+1 }}" style="box-shadow:none">
                                    <div class="card__side-button">
                                        @if (($loop->index%3)+1 == 3)
                                            <a href="/discover/{{ $article->animal->id }}" class="btn btn--blue">Read!</a>
                                            @else
                                                @if (($loop->index%3)+1 == 2)
                                                    <a href="/discover/{{ $article->animal->id }}" class="btn btn--coral">Read!</a>
                                                    @else 
                                                        <a href="/discover/{{ $article->animal->id }}" class="btn btn--green">Read!</a>
                                                @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    @endif
                   
                </ul>
           </div>
           @if ($articles->count() > 3)
            <div class="articles__right-arrow prava">
                    <i class="fas fa-angle-double-right"></i>
            </div>
           @endif
       </div>
    </section>
@endsection