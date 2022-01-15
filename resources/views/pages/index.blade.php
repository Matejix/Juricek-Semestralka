@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <section class="new-posts">
        <div class="row">
            <div class="col-1-of-2">
                <div class="card card--left">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">Nazov zvierata</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Dožitie</li>
                                <li>počet na zemi</li>
                                <li>druh</li>
                                <li>vyskyts</li>
                                <li>Ohrozenie: velke</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__side-button">
                            <a href="{{ route("discoverMore-page") }}" class="btn btn--green">Discover more!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-2">
                <div class="card card--right">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--2">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--2">Nazov zvierata</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>Dožitie</li>
                                <li>počet na zemi</li>
                                <li>druh</li>
                                <li>vyskyt</li>
                                <li>Ohrozenie: velke</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-2">
                        <div class="card__side-button">
                            <a href="{{ route("discoverMore-page") }}" class="btn btn--coral">Discover more!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection