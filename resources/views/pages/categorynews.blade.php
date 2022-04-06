@extends('layouts.base')

<style>
    h3:hover{
        text-decoration: underline;
    }

    .category{
        font-size: 12px;
        color: #fff;
        background: #00BFE8;
        padding: 4px 12px 3px;
        font-weight: 400;
        text-transform: uppercase;
        /* -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        -ms-border-radius: 2px; */
        border-radius: 2px;
        margin-right: 20px;
    }
</style>



@section('content')
<section class="news-area2 mt-5 mb-4">
    <div class="container">
        <div class="row">
            
            <div class=" col-md-12">
                <div class="pop-news">
                    <div class="sec-title mt-5">
                        <h5>{{$category->name}}</h5>
                    </div>
                    <div class="popular-item">
                        <div class="row">
                            @foreach ($posts as $post)
                            <div class="col-md-3 mt-3 paginate">
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

</style>
@endsection

