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
           <div class="articles__left-arrow">
                <i class="fas fa-angle-double-left"></i>
           </div>

           <div class="articles__menu">

           </div>

           <div class="articles__list">
                <ul>
                    <li>
                        <div class="card small card--left">
                            <div class="card__side small card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Nazov zvierata</span>
                                </h4>
                            </div>
                            <div class="card__side small card__side--back card__side--back-1">
                                <div class="card__side-button">
                                    <a href="{{ route("discoverMore-page") }}" class="btn btn--green">Read!</a>
                                </div>
                            </div>
                        </div>
                    </li>
                   
                    <li>
                        <div class="card small card--left">
                            <div class="card__side small card__side--front">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--2">Nazov zvierata</span>
                                </h4>
                            </div>
                            <div class="card__side small card__side--back card__side--back-2">
                                <div class="card__side-button">
                                    <a href="{{ route("discoverMore-page") }}" class="btn btn--coral">Read!</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card small card--left">
                            <div class="card__side small card__side--front">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--3">Nazov zvierata</span>
                                </h4>
                            </div>
                            <div class="card__side small card__side--back card__side--back-3">
                                <div class="card__side-button">
                                    <a href="{{ route("discoverMore-page") }}" class="btn btn--blue">Read!</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
           </div>

           <div class="articles__right-arrow">
                <i class="fas fa-angle-double-right"></i>
           </div>
       </div>
    </section>
@endsection