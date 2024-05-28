@extends('layouts.default')

@section('content')
    @include('Includes.pages.hero')


    @include('Includes.pages.banner')

    {{-- <section>slider with hover text</section> --}}

    @include('Includes.pages.sliderWithHover')

    {{-- <section>faq</section> --}}
    @include('Includes.pages.faq')

    {{-- <section>projects</section> --}}
    @include('Includes.pages.projects')


    {{-- <section>testmonials </section> --}}
    @include('Includes.pages.testimonials')

    {{-- <section>gallery</section> --}}
    @include('Includes.pages.gallery')

    {{-- <section>get quotation</section> --}}
    @include('Includes.pages.getQuotation')

    {{-- <section>contactform</section> --}}
    @include('Includes.pages.contactForm')
@endsection
