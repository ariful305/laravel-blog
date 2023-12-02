@extends('layouts.website')
@section('title','Category')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Category</h4>
                <h2>{{ $categories_posts->name }}</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                    <div class="all-blog-posts">
                      <div class="row">
                        @foreach ($posts as $item)

                        <div class="col-lg-4">
                          <div class="blog-post">
                            <div class="blog-thumb">
                              <img src="{{ asset($item->image) }}" alt="{{ $item->image }}" height="200px">
                            </div>
                            <div class="down-content">
                              <span>{{ $item->category->name }}</span>
                              <a href="{{ route('post-details',[$item->slug]) }}"><h4>{{$item->title}}</h4></a>
                              <ul class="post-info">
                                <li><a href="#">{{$item->user->name}}</a></li>
                                <li><a href="#">{{ date('F j, Y', strtotime($item->created_at)) }}</a></li>
                                {{-- <li><a href="#">12 Comments</a></li> --}}
                              </ul>
                              <p>{{Str::limit($item->description,200, $end='.......')}}</p>
                              <div class="post-options">
                                <div class="row">
                                  <div class="col-12">
                                    <ul class="post-tags">
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
                            {{ $posts->links() }}

                        </div>
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
