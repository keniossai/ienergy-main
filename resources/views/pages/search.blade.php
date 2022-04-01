@extends('layouts.base')

<style>
    h4:hover{
        text-decoration: underline;
    }
</style>
@section('content')
<section class="news-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="pop-news">
                            <div class="sec-title">
                                {{-- <h5>{{$category->name}}</h5> --}}
                            </div>
                            <div class="owl-carousel popular-slider">
                                <div class="popular-item">
                                    <div class="row">
                                        @foreach ($recentPosts as $post)
                                            <div class="col-md-3">
                                                <div class="pop-box">
                                                    <div class="pop-img">
                                                        <a href=""><img src="{{$post->image}}" alt="" class="img-fluid"></a>
                                                    </div>
                                                    <div class="img-content">
                                                        <h4><a href="">{{$post->title}}</a></h4>
                                                        <ul class="list-unstyled list-inline">
                                                            <li class="list-inline-item">{{$post->category->name}}</li>
                                                            <li class="list-inline-item">{{$post->created_at->format('M d, Y')}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
@endsection

