@extends('layouts.master')
@section('title')
    Gallery
@endsection
@section('content')
    <section class="gallery">
        <div class="heading-primary articles__heading-primary u-margin-bottom-big">
            <h2>
                <span class="heading-primary--main">Gallery</span>
                <span class="heading-primary--sub">Look at the beauty</span>
            </h2>
        </div>
        <div class="gallery__wrapper">
            @if ($galleries->isEmpty())
                Empty
            @endif
            @foreach ($galleries as $photo)
            <figure class="gallery__figure">
                <img src="{{ '/storage'.'/'.$photo->image }}" alt="Animal photo" class="gallery__photo">
                <figcaption class="gallery__caption">
                    {{ $photo->animal->slovak_name }}
                </figcaption>
            </figure>
            @endforeach
           
        </div>
    </section>
@endsection