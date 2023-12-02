@extends('layouts.website')
@section('title','Stand Blog')

@section('content')
       <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            @foreach ($recent_posts as $item)

            <div class="item">
                <img src="{{ asset($item->image) }}"  height="500px">
                <div class="item-content">
                  <div class="main-content">
                    <div class="meta-category">
                        <a href="{{ route('categories',[$item->category->slug]) }}"><span>{{ $item->category->name }}</span></a>
                    </div>
                    <a href="{{ route('post-details',[$item->slug]) }}"><h4>{{$item->title}}</h4></a>
                    <ul class="post-info">
                      <li><a href="#">{{$item->user->name}}</a></li>
                      <li><a href="javascript:void(0)">{{ date('F j, Y', strtotime($item->created_at)) }}</a></li>
                      {{-- <li><a href="#">12 Comments</a></li> --}}
                    </ul>
                  </div>
                </div>
              </div>

            @endforeach
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                @foreach ($all_posts as $item)

                <div class="col-lg-4">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset($item->image) }}" alt="{{ $item->image }}" height="200px">
                    </div>
                    <div class="down-content">
                      <a href="{{ route('categories',[$item->category->slug]) }}"><span>{{ $item->category->name }}</span></a>
                      <a href="{{ route('post-details',[$item->slug]) }}"><h4>{{$item->title}}</h4></a>
                      <ul class="post-info ">
                        <li><a href="#">{{$item->user->name}}</a></li>
                        <li><a href="javascript:void(0)">{{ date('F j, Y', strtotime($item->created_at)) }}</a></li>
                        {{-- <li><a href="#">12 Comments</a></li> --}}
                      </ul>
                      <p>{{Str::limit($item->description, 40, $end='.......')}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-12">
                            <ul class="post-tags ">
                              <li><i class="fa fa-tags"></i></li>

                            @foreach ($item->tags as $key=>$item)


                            <li><a href="{{ route('tags',[$item->slug]) }}">{{ $item->name }}</a>,</li>

                              @endforeach

                            </ul>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach

                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="{{route('blog')}}">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

@endsection


