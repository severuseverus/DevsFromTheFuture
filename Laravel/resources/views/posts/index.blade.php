@extends('master')

@section('og:image')
    <meta property="og:image" content="{{ asset($post->imagePath) }}">
@endsection
@section('og:title')
    <meta property="og:title" content="{{ sprintf("%s", $post->title) }}">
@endsection
@section('og:description')
    <meta property="og:description" content="{{ $post->preview }}">
@endsection

@section('head')
    @parent

    <link rel="stylesheet" href="{{ asset('css/posts.css') }}" >
@endsection

@section('content')
    <div id="post" class="col-sm-12 col-sm-offset-0 col-md-7 col-md-offset-1 text-justify">
        <h1 class="line-after-fill-left title-post" style="font-size:30px;">{{ $post->title }}</h1>
    
        <img src="{{ asset($post->imagePath) }}" alt="" width="100%" style="">
        
        <div class="p-t-20">
            {!! $post->description !!}
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-md-offset-1 sidebar-right text-justify">
        <div class="container"></div>
        
        <div class="container call-to-action-posts">
            <div class="full-height fill-width">
                <a href="{{ sprintf("%s%s", route('register.form'), '?utm_source=website&utm_campaign=Bot%C3%A3o%20Commit') }}" class="fill-height">
                    <div class="col-sm-12 half-height v-align-content-center">
                        <div class="row">
                            <div class="col-sm-7">
                                <span class="call-to-action-title white-label">O DEV DO FUTURO É <strong>VOCÊ?</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 half-height v-align-content-center">
                        <span class="dark-blue-label commit-here-button">
                            <div class="row">
                                <div class="col-sm-7">
                                    [&nbsp;&nbsp;COMMIT&nbsp;&nbsp;]
                                </div>
                            </div>
                            {{--<a href="{{ route('register.form') }}">[&nbsp;&nbsp;&nbsp;COMMIT HERE&nbsp;&nbsp;&nbsp;]</a>--}}
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection