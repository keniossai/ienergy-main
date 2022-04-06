@extends('layouts.base')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-box">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                            <li class="list-inline-item">{{$post->slug}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb Area -->

    <!-- News Details Area -->
    <section class="category-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="news-heading">
                                <h4>{{$post->title}}</h4>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="#">{{$post->user['name']}}</a></li>
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>{{$post->created_at->format('M d, Y')}}</li>
                                    {{-- <li class="list-inline-item"><i class="fa fa-commenting-o"></i><a href="#">(09 Comments)</a></li> --}}
                                </ul>
                            </div>
                            <div class="news-content">
                                <img src="{{$post->image}}" alt="" class="img-fluid">
                                <p>{!! $post->description !!}</p>
                            </div>
                            <div class="row">
                                <div class="col-md-5 padding-fix-r">
                                    <div class="news-img-sm">
                                        <img src="" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="social-tag d-flex justify-content-between">
                                <div class="social">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><a href="">Facebook</a></li>
                                        <li class="list-inline-item"><a href="">Twitter</a></li>
                                        <li class="list-inline-item"><a href="">Google Plus</a></li>
                                        <li class="list-inline-item"><a href="">Pinterest</a></li>
                                    </ul>
                                </div>
                                <div class="tag">
                                    <ul class="list-unstyled list-inline">
                                        @if ($post->tags()->count() > 0)
                                            <li class="list-inline-item">Tags :</li>
                                            @foreach ($post->tags as $tag)
                                            <li class="list-inline-item"><a href="{{route('pages.tagnew', ['slug' => $tag->slug])}}">#{{$tag->name}}</a>,</li>
                                            @endforeach                                            
                                        @endif
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="comment-sec">
                                <div class="sec-title">
                                    <h5 id="dsq-count-scr">Comments <span></span></h5>
                                    <a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}#disqus_thread">Comments</a>
                                </div>
                                <div id="disqus_thread"></div>
                               
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-widget">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#recent">Recent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#popular">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#comment">Comment</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="recent" role="tabpanel">
                                        @foreach ($posts as $post)
                                            <div class="rec-item d-flex">
                                                <div class="rec-img">
                                                    <a href=""><img style="width: 80px;" src="{{$post->image}}" alt=""></a>
                                                </div>
                                                <div class="img-content">
                                                    <h6><a href="">{{$post->title}}</a></h6>
                                                    <span><li class="list-inline-item">{{$post->created_at->format('m')}} Minutes ago</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="tab-pane fade" id="popular" role="tabpanel">
                                        @foreach ($popularNews as $post)
                                        <div class="pop-item d-flex">
                                            <div class="pop-img">
                                                <a href=""><img style="width: 100px;" src="{{$post->image}}" alt=""></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">{{$post->title}}</a></p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="add-widget">
                                <img src="{{asset('assets')}}/img/add1.jpg" alt="" class="img-fluid">
                                <div class="add-layer text-center">
                                    <p>Fill out this form to receive PDF</p>
                                    <a href="">Subscribe Now</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-md-0">
                            <div class="app-widget">
                                <img src="{{asset('assets')}}/img/news-app.jpg" alt="" class="img-fluid app-img">
                                <div class="img-content">
                                    <h4>Stay Connected</h4>
                                    <p>Download our app and get latest news and updates. Watch live news anytime.</p>
                                    <ul class="list-unstyled">
                                        <li><a href="#"><img src="{{asset('assets')}}/img/app1.png" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('assets')}}/img/app2.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="relate-news">
                        <div class="sec-title">
                            <h5>Related News</h5>
                        </div>
                        <div class="relate-slider owl-carousel">
                            @foreach ($relatedPosts as $post)
                            <div class="rel-item">
                                <img style="width: 100%; height: 220px;" src="{{$post->image}}" alt="">
                                <div class="rel-layer">
                                    <h5 class="text-white"><a href="">{{$post->title}}</a></h5>
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
    </section>
    <!-- End News Details Area -->
@endsection

@section('script')
    
    <script>
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://ienergy-africa-com.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <script id="dsq-count-scr" src="//ienergy-africa-com.disqus.com/count.js" async></script>
@endsection

