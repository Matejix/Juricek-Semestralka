@extends('layouts.master')
@section('title')
    Gallery
@endsection
@section('content')
    <section class="gallery">
        <div class="heading-primary articles__heading-primary u-margin-bottom-big">
            <span class="heading-primary--main">Gallery</span>
            <span class="heading-primary--sub">Look at the beauty</span>
        </div>
        <div class="heading-secondary u-margin-bottom-medium">
            <h2>
                Druh zvera
            </h2>
        </div>
        <div class="gallery__wrapper">
            <figure class="gallery__figure">
                <img src="{{ asset("/images/animal1-small.jpg") }}" alt="Animal photo" class="gallery__photo">
                <figcaption class="gallery__caption">
                    Nazov zvierata
                </figcaption>
            </figure>

            <figure class="gallery__figure">
                <img src="{{ asset("/images/animal2-small.jpg") }}" alt="Animal photo" class="gallery__photo">
                <figcaption class="gallery__caption">
                    Nazov zvierata
                </figcaption>
            </figure>

            <figure class="gallery__figure">
                <img src="{{ asset("/images/animal3-small.jpg") }}" alt="Animal photo" class="gallery__photo">
                <figcaption class="gallery__caption">
                    Nazov zvierata
                </figcaption>
            </figure>

            <figure class="gallery__figure">
                <img src="{{ asset("/images/animal4-small.jpg") }}" alt="Animal photo" class="gallery__photo">
                <figcaption class="gallery__caption">
                    Nazov zvierata
                </figcaption>
            </figure>

            <figure class="gallery__figure">
                <img src="{{ asset("/images/animal5-small.jpg") }}" alt="Animal photo" class="gallery__photo">
                <figcaption class="gallery__caption">
                    Nazov zvierata
                </figcaption>
            </figure>
        </div>
    </section>
@endsection