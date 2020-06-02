@extends('layouts.app')

@section('content')

    <div class="article-single" id="article-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single" >

                        <div class="entry-img">
                            <img src="{{asset('storage/article/' . $article->image)}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{url('/article/' .$article->slug)}}">{{$article->name}}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> TITIKOMA Official</li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> {{$article->updated_at}}</li>

                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!!substr($article->description,0,100000)!!}
                            </p>

                        </div>

                        {{--<div class="entry-footer clearfix">
                            <div class="float-left">
                                <i class="icofont-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="icofont-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div>

                            <div class="float-right share">
                                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                            </div>

                        </div>
--}}
                    </article>
                </div>
                <div class="col-lg-4">

                    <div class="sidebar" >
                        <div class="sidebar-item search-form">
                            <form action="{{url('/article/' .$article->slug)}}" method="GET">
                                <input type="text" name="cari" value="{{old('cari')}}">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>
                        </div>
                        {{--@if(count($articles))
                            <div class="sidebar-item search-form">
                                <form action="{{url('/article/' .$article->slug)}}" method="GET">
                                    <input type="text" name="cari" value="{{old('cari')}}">
                                    <button type="submit"><i class="icofont-search"></i></button>
                                </form>
                            </div><!-- End sidebar search form-->
                            <div class="sidebar-item recent-posts">
                                @foreach($articles as $row)
                                    <div class="post-item clearfix">
                                        <img src="{{asset('storage/article/' . $row->image)}}" alt="">
                                        <h4><a href="blog-single.html">{{$row->name}}</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div>Oops.. Data <b>{{$cari}}</b> Tidak ditemukan</div>
                        @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
