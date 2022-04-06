@extends('layouts.base')

@section('content')
{{-- Stock Market Review --}}
<div class="ticker-container">
    <div class="ticker-canvas">
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js">
  {
  "symbols": [
    {
      "title": "US Dollar",
      "proName": "INDEX:DXY"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    },
    {
      "title": "ETH/USD",
      "proName": "BITFINEX:ETHUSD"
    },
    {
      "description": "Apple",
      "proName": "NASDAQ:AAPL"
    },
    {
      "description": "Berkshire",
      "proName": "NYSE:BRK.A"
    },
    {
      "description": "Microsoft",
      "proName": "NASDAQ:MSFT"
    },
    {
      "description": "Google",
      "proName": "NASDAQ:GOOG"
    },
    {
      "description": "Tesla",
      "proName": "NASDAQ:TSLA"
    },
    {
      "description": "Amazon",
      "proName": "NASDAQ:AMZN"
    },
    {
      "description": "AUD/USD",
      "proName": "OANDA:AUDUSD"
    },
    {
      "description": "BHP",
      "proName": "BHP"
    },
    {
      "description": "Telstra",
      "proName": "TLS"
    }
  ],
  "locale": "en"
}
  </script>
    </div>
    </div>
    </div>

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
                            <li><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}"><i class="fa fa-dot-circle-o"></i>{{$post->title}}</a></li>
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
             <div class="col-md-6">
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
            @foreach ($lastPosts as $post)
            <div class="col-md-6">
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

{{-- All Posts  --}}
<section class="news-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pop-news">
                            <div class="popular-item">
                                <div class="row">
                                    @foreach ($pagePost as $post)
                                        <div class="col-md-4 mt-4 morenews">
                                            <div class="pop-box">
                                                <div class="pop-img">
                                                    <a href=""><img src="{{$post->image}}" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="img-content">
                                                    <h4><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="list-inline-item category">{{$post->category->name}}</li>
                                                        <li class="list-inline-item">{{$post->created_at->format('M d, Y')}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 text-center">
                                        <div class="schedule-listing-btn text-center">
                                            <button class="btn load">Load More</button>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 show-none">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-widget">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#recent">Recent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#popular">Editor's Choice</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#analysis">Analysis</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="recent" role="tabpanel">
                                    <div class="rec-item d-flex">
                                        <div class="rec-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-6.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>20 Seconds ago</span>
                                        </div>
                                    </div>
                                    <div class="rec-item d-flex">
                                        <div class="rec-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-11.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>4 minutes ago</span>
                                        </div>
                                    </div>
                                    <div class="rec-item d-flex">
                                        <div class="rec-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-7.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>47 minutes ago</span>
                                        </div>
                                    </div>
                                    <div class="rec-item d-flex">
                                        <div class="rec-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-4.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>1 Hours ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="popular" role="tabpanel">
                                    <div class="pop-item d-flex">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-3.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                        </div>
                                    </div>
                                    <div class="pop-item d-flex">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-8.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                        </div>
                                    </div>
                                    <div class="pop-item d-flex">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-9.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                        </div>
                                    </div>
                                    <div class="pop-item d-flex">
                                        <div class="pop-img">
                                            <a href=""><img src="{{asset('assets')}}/img/lt-sm-12.jpg" alt=""></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="analysis" role="tabpanel">
                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container" style="overflow: hidden;">
                                        <div class="tradingview-widget-container__widget"></div>
                                        {{-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"></a></div> --}}
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                                        {
                                        "colorTheme": "light",
                                        "dateRange": "12M",
                                        "exchange": "US",
                                        "showChart": true,
                                        "locale": "en",
                                        "largeChartUrl": "",
                                        "isTransparent": false,
                                        "showSymbolLogo": false,
                                        "showFloatingTooltip": false,
                                        "width": "400",
                                        "height": "600",
                                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                        "gridLineColor": "rgba(42, 46, 57, 0)",
                                        "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                                    }
                                        </script>
                                    </div>
                                    <!-- TradingView Widget END -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="add-widget">
                            <a href=""><img src="https://tpc.googlesyndication.com/simgad/8496823428282049647" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Upper Post End --}}

<section class="news-area">
    <div class="container">
        <!-- <h1 class="mt-4">POLITICS</h1> -->
        <div class="row">
            <div class="col-md-12">
                <div class="latest-news">
                    <!-- Tab panes -->
                    
                    <div class="tab-content">
                        <div class="sec-title">
                            <h5></h5>
                        </div>
                        <div class="tab-pane fade show active">
                            <div class="row">
                                @foreach ($moreView as $post)
                                    <div class="col-md-3 mt-5">
                                        <div class="lt-item-bg">
                                            <img src="{{$post->image}}" alt="" class="img-fluid">
                                            <h3><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h3>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">{{$post->category->name}}</li>
                                                <li class="list-inline-item">{{$post->created_at->format('M d, Y')}}</li>
                                            </ul>
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
<!-- More News Area-->

<!-- End More News Area-->

{{-- Google Ads here --}}
<style>

</style>
<!-- News Area 2 -->
<section class="news-area2">
    <div class="container">
        <div class="row">
            
            <div class=" col-md-12">
                <div class="pop-news">
                    <div class="sec-title">
                        <h5>Popular News</h5>
                    </div>
                    <div class="popular-item">
                        <div class="row">
                            @foreach ($popularPosts as $post)
                            <div class="col-md-4 mt-3">
                                <div class="pop-box">
                                    <div class="pop-img">
                                        <a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}"><img src="{{$post->image}}" alt="" style='width: 100%;' class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <h4 class='mb-2'><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h4>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item category">{{$post->category->name}}</li>
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
</section>
<!-- End News Area 2 -->

<section class="gallery-area mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="image-gallery">
                    <div class="sec-title">
                        <h5>Pictures<i class="fa fa-caret-right"></i></h5>
                    </div>
                    <div class="image-gallery-box">
                        <div class="gallery-slider owl-carousel">
                            <div class="gallery-item">
                                <img src="{{asset('assets')}}/img/gallery-image-1.jpg" alt="" class="img-fluid">
                                <div class="gallery-content">
                                    <p><a href="">This handout will help you understand how paragraphs are formed. It is usually composed of several sentences that together develop one.</a></p>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <img src="{{asset('assets')}}/img/gallery-image-2.jpg" alt="" class="img-fluid">
                                <div class="gallery-content">
                                    <p><a href="">This handout will help you understand how paragraphs are formed. It is usually composed of several sentences that together develop one.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="video-gallery">
                    <div class="sec-title">
                        <h5>Videos<i class="fa fa-caret-right"></i></h5>
                    </div>
                    <div class="video-lg">
                        <div class="video-table">
                            <div class="video-tablecell text-center">
                                <a href="https://www.youtube.com/watch?v=WrVSHNJ8Clc" id="video-btn"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="video-list">
                        <div class="video-list-item d-flex">
                            <div class="vid-img">
                                <img src="{{asset('assets')}}/img/lt-sm-9.jpg" alt="">
                                <a href="https://www.youtube.com/watch?v=WrVSHNJ8Clc" id="video-btn2"><i class="fa fa-video-camera"></i></a>
                            </div>
                            <div class="img-content">
                                <p><a href="#">These sentences are select from online news.</a></p>
                                <span>2 minutes ago</span>
                            </div>
                        </div>
                        <div class="video-list-item d-flex">
                            <div class="vid-img">
                                <img src="{{asset('assets')}}/img/lt-sm-11.jpg" alt="">
                                <a href="#"><i class="fa fa-video-camera"></i></a>
                            </div>
                            <div class="{{asset('assets')}}/img-content">
                                <p><a href="#">These sentences are select from online news.</a></p>
                                <span>42 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .btn{
        display: block;
        background: #00BFE8;
        color: white;
        cursor: pointer;
        text-align: center;
        width: 150px;
        line-height: 20px;
        margin: 50px auto;
        border-radius: 50px;
    }

    .morenews{
        display: none;
    }
</style>
@endsection