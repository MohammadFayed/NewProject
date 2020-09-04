@extends('layouts.main')


@php
$test = [2000, 50000, 90050, 125060];
@endphp
@section('content')
    <section>
        <div class="section-header">
            <i class="fas fa-bullhorn"></i>
            احدث الإعلانات
        </div>
        <div class="section-body">
            <div class="owl-carousel owl-theme">
                @each('card_item', $test, 'price',)
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <i class="fas fa-car-side"></i>
            السيارات
        </div>
        <div class="section-body">
            <div class="owl-carousel owl-theme">
                @each('card_item', $test, 'price',)
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <i class="fas fa-home"></i>
            عقارات للبيع
        </div>
        <div class="section-body">
            <div class="owl-carousel owl-theme">
                @each('card_item', $test, 'price',)
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <i class="fas fa-home"></i>
            عقارات للايجار
        </div>
        <div class="section-body">
            <div class="owl-carousel owl-theme">
                @each('card_item', $test, 'price',)
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <i class="fas fa-briefcase"></i>
            وظائف
        </div>
        <div class="section-body">
            <div class="owl-carousel owl-theme">
                @each('card_item', $test, 'price',)
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <i class="fas fa-tshirt"></i>
            ملابس
        </div>
        <div class="section-body">
            <div class="owl-carousel owl-theme">
                @each('card_item', $test, 'price',)
            </div>
        </div>
    </section>
    <section>
        <div class="section-header">
            <i class="fas fa-charging-station"></i>
            أجهزة الكترونية
        </div>
        <div class="section-body">
            <div class="owl-carousel owl-theme">
                @each('card_item', $test, 'price',)
            </div>
        </div>
    </section>

@endsection
