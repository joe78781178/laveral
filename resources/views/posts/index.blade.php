@extends('layouts.master')
@section('title','首頁')
@section('content')

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <hr class="small">
                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            
            @foreach(range(1,5) as $number)
            <div class="post-preview">
                <a href="{{route('posts.show',$number)}}">
                    <h2 class="post-title">
                        test{{$number}}
                    </h2>
                    <h3 class="post-subtitle">
                        context{{$number}}
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on {{date('Y-m-d')}}</p>
            </div>
            <hr>
            @endforeach
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

