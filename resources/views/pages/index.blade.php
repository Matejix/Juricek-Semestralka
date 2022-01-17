@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')

    <section class="new-posts">

        @if (!$animals->isEmpty())
       
            <div class="row">
                @if ($animals->count() == 1)
                <div class="col-1-of-1">
                    @else
                    <div class="col-1-of-2">
                @endif
               
                    <div class="card card--left">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1" style="background-image: url({{ '/storage'.'/'.$animals->first()->image }})">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">{{ $animals->first()->slovak_name }}</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li><b>Doživanie:   </b>
                                        {{ $animals->first()->lifespan }}</li>
                                    <li><b>Počet v divočine:   </b>
                                        {{ $animals->first()->number }}</li>
                                    <li><b>Druh:   </b>
                                        {{ $animals->first()->species }}</li>
                                    <li><b>Výskyt:   </b>
                                        {{ $animals->first()->occurrence }}</li>
                                    <li><b>Ohrozenie:   </b>
                                        {{ $animals->first()->endangered }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__side-button">
                                @if (!$articles->where('animal_id',$animals->first()->id)->isEmpty())
                                <a href="/discover/{{ $animals->first()->id }}" class="btn btn--green">Discover more!</a>
                                    
                                @else
                                <div class="heading-tertiary black-font u-margin-bottom-small">
                                    <h3>Article comming soon!</h3>
                                </div>
                                @endif
                                    
                            </div>
                        </div>
                    </div>
                </div>
                @if ($animals->count() > 1)
                        <div class="col-1-of-2">
                            <div class="card card--right">
                                <div class="card__side card__side--front">
                                    <div class="card__picture" style="background-image: url({{ '/storage'.'/'.$animals->get(1)->image }})">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--2">{{ $animals->get(1)->slovak_name }}</span>
                                    </h4>
                                    <div class="card__details">
                                        <ul>
                                            <li><b>Doživanie:   </b>
                                                {{ $animals->get(1)->lifespan }}</li>
                                            <li><b>Počet v divočine:   </b>
                                                {{ $animals->get(1)->number }}</li>
                                            <li><b>Druh:   </b>
                                                {{ $animals->get(1)->species }}</li>
                                            <li><b>Výskyt:   </b>
                                                {{ $animals->get(1)->occurrence }}</li>
                                            <li><b>Ohrozenie:   </b>
                                                {{ $animals->get(1)->endangered }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card__side card__side--back card__side--back-2">
                                    <div class="card__side-button">
                                        @if (!$articles->where('animal_id',$animals->get(1)->id)->isEmpty())

                                        <a href="/discover/{{ $animals->get(1)->id }}" class="btn btn--coral">Discover more!</a>
                                            
                                        @else
                                        <div class="heading-tertiary black-font u-margin-bottom-small">
                                            <h3>Article comming soon!</h3>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
        @endif
        @if ($animals->isEmpty())
        <div class="heading-box">
            <h1 class="heading-primary u-margin-bottom-big">
                <span class="heading-primary--main">We run out of articles!</span>
                <span class="heading-primary--sub">We are sorry!</span>
            </h1>
        </div>
        @endif
        
    </section>

@endsection