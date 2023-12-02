@extends('layouts.dashboard')
@section('title','Category')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-sm-6">
              <h1>Category</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
              </ol>
            </div>
          </div>

          </div>
        <!-- /.container-fluid -->
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="card-title">All Categories</h3>
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <a href="{{ route('category.create') }}" class="btn btn-primary">Add Categories</a>
                        </div>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if ( $category->count() > 0)

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl. No.</th>
                      <th>name</th>
                      <th>description</th>
                      <th>slug</th>
                      <th>Posts Count</th>
                      <th>created at</th>
                      <th>update at</th>
                      <th>Edit</th>
                      <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>
                <tr>
                @foreach ($category as $key=>$iteam)

                <td>{{ $key+1 }}  </td>
                <td>{{$iteam->name}}</td>
                <td> {{Str::limit($iteam->description, 50, $end='.......')}}</td>
                <td>{{$iteam->slug}}</td>
                <td>{{$iteam->posts->count()}}</td>
                <td>{{ date('F j, Y', strtotime($iteam->created_at)) }}</td>
                <td>{{ date('F j, Y', strtotime($iteam->updated_at)) }}</td>

                <td>
                <a class="btn btn-info btn-sm" href="{{ route('category.edit',[$iteam->id])}}" >
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>

                </td>
                <td>
                    <form action="{{ route('category.destroy',[$iteam->id]) }}" method="POST">

                        @csrf
                        @method('DELETE')

                         <button onclick="return confirm('Are you sure you want to Delete?');" class="btn btn-danger btn-sm" href="{{ route('category.destroy',[$iteam->id])}}" type="submit">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </button>

                    </form>

                </td>
                 </tr>
            @endforeach
           </tbody>
                    <tfoot>
                    <tr>
                        <th>Sl. No.</th>
                        <th>name</th>
                        <th>description</th>
                        <th>slug</th>
                        <th>Posts Count</th>
                        <th>created at</th>
                        <th>update at</th>
                      <th>Edit</th>
                      <th>delete</th>
                    </tr>
                    </tfoot>
                  </table>
                  @else

                  <h1 class="d-flex justify-content-center text-danger">No data found</h1>

                  @endif
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>



@endsection
