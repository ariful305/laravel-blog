@extends('layouts.dashboard')

@section('title','Dashboard')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

 <section class="content-header">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{ $post->count() }}</h3>

                      <p>Total Posts</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('post.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>{{ $category->count() }}</h3>

                      <p>Total Categories</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('category.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>{{ $tag->count() }}</h3>

                      <p>Total Tags</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('tag.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>

                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>


              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title">Recent posts</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>Sl. No.</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>description</th>
                            <th>slug</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Author</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($post as $key=>$iteam)

                        <tr>

                            <td>{{ $key+1 }}  </td>
                            <td><img src="{{$iteam->image}}" width="100px" ></td>
                            <td>{{$iteam->title}}</td>
                            <td> {{Str::limit($iteam->description, 50, $end='.......')}}</td>
                            <td>{{$iteam->slug}}</td>
                            <td>{{$iteam->category->name}}</td>
                            <td>
                                @foreach ($iteam->tags as $key=>$item)

                                    <span class="badge {{($key+1)%2 == 0 ? 'bg-success':'bg-primary' }}">{{ $item->name }}</span>

                                @endforeach

                            </td>
                            <td>{{$iteam->user->name}}</td>

                            <td>
                            </tr>
                        @endforeach

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>

        </div>
        <!-- /.container-fluid -->
      </section>


@endsection
