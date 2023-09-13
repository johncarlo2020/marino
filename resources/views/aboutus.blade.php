@extends('layouts.app')

@section('title', 'Aboout us')

@section('content')

<section class="about-us-with-image py-5 ">
    <div class="container py-lg-5 p-2">
        <div class="row ">
            @include('components.image',['image' => $aboutUsImg ])
            @include('components.titleWithParagraph', [
                'title' => $aboutUsContent1['title'],
                'content' => $aboutUsContent1['content']
            ])
        </div>
    </div>
</section>

<section class="brand-section py-5 mb-4">
    <div class="container">
        <div class="row ">
            @include('components.brands',['list' => $brands])
            @include('components.titleWithParagraph', [
                'title' => $aboutUsContent2['title'],
                'content' => $aboutUsContent2['content']
            ])
        </div>
    </div>
</section>

@include('section.testimonial',['heading' => $testimonialHeading])

@endsection
