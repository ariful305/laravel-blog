@extends('layouts.website')
@section('title','Blog page')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
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
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                @foreach ($posts as $item)

                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset($item->image) }}" alt="{{ $item->image }}" height="200px">
                    </div>
                    <div class="down-content">
                    <a href="{{ route('categories',[$item->category->slug]) }}"><span>{{ $item->category->name }}</span></a>
                      <a href="{{ route('post-details',[$item->slug]) }}"><h4>{{$item->title}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{$item->user->name}}</a></li>
                        <li><a href="#">{{ date('F j, Y', strtotime($item->created_at)) }}</a></li>
                        {{-- <li><a href="#">12 Comments</a></li> --}}
                      </ul>
                      <p>{{Str::limit($item->description,200, $end='.......')}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
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

          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="search_form" method="GET" action="{{ route('search') }}">
                      <input type="search" name="search" class="searchText" placeholder="type to search..." autocomplete="off">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach ($recent_posts as $item)


                        <li><a href="post-details.html">
                          <h5>{{$item->title}}</h5>
                          <span>{{ date('F j, Y', strtotime($item->created_at)) }}</span>
                        </a></li>

                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach ($category as $item)


                        <li><a href="{{ route('categories',[$item->slug]) }}">{{ $item->name}}</a></li>

                     @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach ($tag as $item)


                        <li><a href="{{ route('tags',[$item->slug]) }}">{{ $item->name}}</a></li>

                     @endforeach

                      </ul>
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
