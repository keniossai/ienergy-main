@extends('layouts.base')

<style>
    h4:hover{
        text-decoration: underline;
    }
</style>

@section('content')
 <!-- Web Ticker -->
 <section class="top-news">
    <div class="container">
        <div class="news-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="ticker d-flex">
                        <div class="news-head">
                            <span>Trending<i class="fa fa-caret-right" aria-hidden="true"></i></span>
                        </div>
                        <ul id="webTicker">
                            @foreach ($trendingPosts as $post)
                            <li><a href=""><i class="fa fa-dot-circle-o"></i>{{$post->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Web Ticker -->


 <!-- Slider Area 3 -->
 <section class="slider-area3">
    <div class="container">
        <div class="row">
            @foreach ($firstPosts as $post)
            <div class="col-lg-6 col-md-12 slider-fix">
                <div class="owl-slider owl-carousel">
                    <div class="slider-content">
                        <img style="height: 300px;" src="{{$post->image}}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <!-- <h4><a href="newsdetails">This handout will help you understand how paragraphs are formed. It is usually composed of several sentences.</a></h4> -->
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">{{$post->category->name}}</li>
                                <li class="list-inline-item">{{$post->created_at->format('M d, Y')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
            </div>
            @endforeach
            @foreach ($lastPosts as $post)
            <div class="col-md-3">
                <div class="slider-sidebar">
                    <img src="{{$post->image}}" alt="" class="img-fluid">
                    <div class="sidebar-layer">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">{{$post->category->name}}</li>
                            <li class="list-inline-item">{{$post->created_at->format('M d, Y')}}</li>
                        </ul>
                    </div>
                </div>
                <h4><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!-- End Slider Area 3 -->

<!-- More News Area-->
<section class="more-news-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="more-news">
                    <div class="sec-title">
                        {{-- There was a h5 title here --}}
                    </div>
                    <div class="more-slider owl-carousel">
                        <div class="more-item">
                            @foreach ($moreView as $post)
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}"><img style="width: 200px;" src="{{$post->image}}" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h4><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">{{$post->category->name}}</li>
                                        <li class="list-inline-item">{{$post->created_at->format('M d, Y')}}</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Exde tenetur, quasi, provident animi magni voluptas fugit Itaque labore quae ad........</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mv-widget">
                            <div class="mv-slider owl-carousel">
                                <div class="mv-item">
                                    <div class="sec-title">
                                        <h5>Most Viewed</h5>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-3.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-8.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-9.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-12.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mv-item">
                                    <div class="sec-title">
                                        <h5>Editor's Choice</h5>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-6.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-11.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-7.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                        </div>
                                    </div>
                                    <div class="mv-box d-flex">
                                        <div class="mv-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-4.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <h5><a href="newsdetails">These sentences are selected from various online news.</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="add-widget">
                            <a href=""><img src="https://tpc.googlesyndication.com/simgad/17499190641646852409" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tag-widget">
                            <div class="sec-title">
                                <h5>Tag List</h5>
                            </div>
                            <div class="tag-box">
                                @foreach ($tags as $tag)
                                <a href="{{route('pages.tagnew', ['slug' => $tag->slug])}}">{{$tag->name}}</a>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End More News Area-->


<!-- News Area 2 -->
<section class="news-area2">
    <div class="container">
        <div class="row">
            
            <div class=" col-md-12">
                <div class="pop-news">
                    <div class="sec-title">
                        <h5>Popular News</h5>
                    </div>
                    <div class="owl-carousel popular-slider">
                        <div class="popular-item">
                            <div class="row">
                                @foreach ($popularPosts as $post)
                                <div class="col-md-4">
                                    <div class="pop-box">
                                        <div class="pop-img">
                                            <a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}"><img src="{{$post->image}}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <h4><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
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
                        <div class="popular-item">
                            <div class="row">
                                @foreach ($secondPosts as $post)
                                    <div class="col-md-4">
                                        <div class="pop-box">
                                            <div class="pop-img">
                                                <a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}"><img src="{{$post->image}}" alt="" class="img-fluid"></a>
                                            </div>
                                            <div class="img-content">
                                                <h4><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
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
</section>
<!-- End News Area 2 -->
<section class="gallery-area">
    <div class="container">
        <div class="row p-5">
            
            <div class="col-md-4">
                <div class="video-gallery">
                    <div class="sec-title">
                        <h5>US warns against rising oil imports, New Delhi continues to buy Russian oil<i class="fa fa-caret-right"></i></h5>
                    </div>
                    <div class="video-lg">
                        <div class="video-table">
                            <div class="video-tablecell text-center">
                                <a href="https://www.youtube.com/watch?v=WrVSHNJ8Clc" id="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-gallery">
                    <div class="sec-title">
                        <h5>Oil prices drop 6%, inflation impact on discount retail market<i class="fa fa-caret-right"></i></h5>
                    </div>
                    <div class="video-lg mt-2">
                        <div class="video-table">
                            <div class="video-tablecell text-center">
                                <a href="https://www.youtube.com/watch?v=S7p_9pQgVHQ" id="video-btn2"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-gallery">
                    <div class="sec-title">
                        <h5>Donald Trump asks Vladimir Putin for a political favor<i class="fa fa-caret-right"></i></h5>
                    </div>
                    <div class="video-lg">
                        <div class="video-table">
                            <div class="video-tablecell text-center">
                                <a href="https://www.youtube.com/watch?v=aD2XkbVrzbs" id="video-btn3"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Area -->
<section class="news-area">
    <div class="container">
        <!-- <h1 class="mt-4">POLITICS</h1> -->
        <div class="row">
            <div class="col-md-12">
                <div class="latest-news">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <div class="row">
                                {{-- @foreach ($downPosts as $post)
                                    
                                <div class="col-md-3 mt-5">
                                    <div class="lt-item-bg">
                                        <img src="{{$post->image}}" alt="" class="img-fluid">
                                        <h4><a href="newsdetails">These sentences are selected from various online news.</a></h4>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">{{$post->category->name}}</li>
                                            <li class="list-inline-item">{{$post->created_at->format('M d, Y')}}</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
        </div>
        
    </div>
</section>


@endsection