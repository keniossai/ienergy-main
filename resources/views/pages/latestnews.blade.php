@extends('layouts.base')

<style>
    h3:hover{
        text-decoration: underline;
    }
</style>

@section('content')
<section class="more-news-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="more-news">
                    <div class="sec-title">
                        <h5>{{$category->name}}</h5>
                    </div>
                    <div class="more-slider owl-carousel">
                        <div class="more-item">
                            @foreach ($leftSidePost as $post)
                                <div class="more-content d-flex">
                                    <div class="more-img">
                                        <a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}"><img style="width: 200px;" src="{{$post->image}}" alt=""></a>
                                    </div>
                                    <div class="img-content">
                                        <h3><a href="{{route('pages.newsdetails', ['slug' => $post->slug])}}">{{$post->title}}</a></h3>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item mt-2">{{$post->category->name}}</li>
                                            <li class="list-inline-item">{{$post->created_at->format('M d, Y')}}</li>
                                        </ul>
                                        <p>{{ Str::limit($post->description, 140)}}</p>
                                    </div>
                                </div>
                            @endforeach
                           
                        </div>
                        <div class="more-item">
                            @foreach ($rightSidePost as $post)
                            <div class="more-content d-flex">
                                <div class="more-img">
                                    <a href="#"><img style="width: 200px;" src="{{$post->image}}" alt=""></a>
                                </div>
                                <div class="img-content">
                                    <h3><a href="">{{$post->title}}</a></h3>
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
            
        </div>
    </div>
</section>
@endsection