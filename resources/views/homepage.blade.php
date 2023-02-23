@extends('layout\app')

@section('content')


<div class="container">
    @include('includes.navbar')
</div>

<div class="hero-section-wrap">
    <div class="container ">
        <div class="hero-section">
            <h1 class="hero-title">Your Blog Title Here.</h1>
            <p class="hero-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, fuga sequi corporis qui tempore quidem nihil rem quod.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="blog-category-nav">
        <a class="active" href="#">All</a>
        <a href="#">Design</a>
        <a href="#">Branding</a>
        <a href="#">Ilustrations</a>
        <a href="#">Icons</a>
        <a href="#">Themes</a>
    </div>
    <div class="blog-posts-wrapper">
        
            @include('includes.blog-box')
        
        
    </div>
</div>

@endsection