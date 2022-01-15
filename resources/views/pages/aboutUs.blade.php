@extends('layouts.master')
@section('title')
    AboutUs
@endsection
@section('content')
    <section class="about">
        <div class="about__wrap">
            <div class="heading-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">About Us</span>
                    <span class="heading-primary--sub">Everything you need</span>
                </h1>
            </div>

            <div class="about__text-box">
                    <div class="about__text about__text--left">
                        <h2 class="heading-secondary u-margin-bottom-small">
                            Who we are?
                        </h2>
                        <p class="about__text-content">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ipsam ut incidunt nulla illum sit molestiae placeat, magnam aliquam amet perferendis ullam ea, dolore nostrum recusandae laborum porro maxime. Nesciunt?
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ipsam ut incidunt nulla illum sit molestiae placeat, magnam aliquam amet perferendis ullam ea, dolore nostrum recusandae laborum porro maxime. Nesciunt?
                        </p>
                    </div>
                <div class="about__text about__text--right">
                    <h2 class="heading-secondary u-margin-bottom-small">
                        What do we do?
                    </h2>
                    <p class="about__text-content">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ipsam ut incidunt nulla illum sit molestiae placeat, magnam aliquam amet perferendis ullam ea, dolore nostrum recusandae laborum porro maxime. Nesciunt?
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="about__conclusion">
        <div class="about__conclusion-boxes">
            <div class="about__box">
                <div class="about__box-icon">
                    <i class="far fa-check-square"></i>
                </div>
                <div class="about__box-headi">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Subscribers
                    </h3>
                </div>
                <div class="about__box-content">
                    <p class="about__box-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ipsam ut incidunt nulla illum sit molestiae placeat, magnam aliquam
                    </p>
                    <div class="about__box-summary">
                        <p class="box-summary__counter"><span class="box-summary__counter--number">23</span> dear subscribers</p>
                    </div>
                </div>
                
            </div>

            <div class="about__box">
                <div class="about__box-icon">
                    <i class="far fa-edit"></i>
                </div>
                <div class="about__box-headi">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Articles
                    </h3>
                </div>
                <div class="about__box-content">
                    <p class="about__box-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ipsam ut incidunt nulla illum sit molestiae placeat, magnam aliquam
                    </p>
                    <div class="about__box-summary">
                        <p class="box-summary__counter"><span class="box-summary__counter--number">7</span>Interesting articles</p>
                    </div>
                </div>
                
            </div>

            <div class="about__box">
                <div class="about__box-icon">
                    <i class="far fa-heart"></i>
                </div>
                <div class="about__box-headi">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Donates
                    </h3>
                </div>
                <div class="about__box-content">
                    <p class="about__box-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ipsam ut incidunt nulla illum sit molestiae placeat, magnam aliquam
                    </p>
                    <div class="about__box-summary">
                        <p class="box-summary__counter"><span class="box-summary__counter--number">1200€</span>in donates</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection
    