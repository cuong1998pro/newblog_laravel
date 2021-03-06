@extends('layouts.blog')
@section('content')

@foreach ($posts as $post)
<div class="col-lg-12">
    <div class="li-blog-single-item mb-30">
        <div class="row">
            <div class="col-lg-6">
                <div class="li-blog-banner">
                    <a href="{{route('blog.show', $post->slug)}}"><img class="img-full" src="{{URL::to($post->image)}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="li-blog-content">
                    <div class="li-blog-details">
                    <h3 class="li-blog-heading pt-xs-25 pt-sm-25"><a href="{{route('blog.show', $post->slug)}}">{{$post->title}}</a></h3>
                        <div class="li-blog-meta">
                        <a class="author" href="#"><i class="fa fa-user"></i>{{$post->author->name}}</a>
                            <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> {{$post->date}}</a>
                        </div>
                        <p>{!!$post->excerpt_html!!}</p>
                        <a class="read-more" href="{{route('blog.show', $post->slug)}}">Đọc thêm...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- <div class="col-lg-12">
    <div class="li-paginatoin-area text-center pt-25">
        <div class="row">
            <div class="col-lg-12">
                <ul class="li-pagination-box">
                    <li><a class="Previous" href="#">Previous</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="Next" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}
{{$posts->links()}}

@endsection
