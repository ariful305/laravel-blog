@extends('layouts.dashboard')
@section('title','Tag')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-sm-6">
              <h1>Tag</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Tag</li>
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
                            <h3 class="card-title">All Tags</h3>
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <a href="{{ route('tag.create') }}" class="btn btn-primary">Add Tag</a>
                        </div>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sl. No.</th>
                        <th>name</th>
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
                @foreach ($tag as $key=>$iteam)

                <td>{{ $key+1 }}  </td>
                <td>{{$iteam->name}}</td>
                <td>{{$iteam->slug}}</td>
                <td>{{$iteam->posts->count()}}</td>
                <td>{{ date('F j, Y', strtotime($iteam->created_at)) }}</td>
                <td>{{ date('F j, Y', strtotime($iteam->updated_at)) }}</td>

                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('tag.edit',[$iteam->id])}}" >
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>

                    </td>
                    <td>
                        <form action="{{ route('tag.destroy',[$iteam->id]) }}" method="POST">

                            @csrf
                            @method('DELETE')

                             <button onclick="return confirm('Are you sure you want to Delete?');" class="btn btn-danger btn-sm" href="{{ route('tag.destroy',[$iteam->id])}}" type="submit">
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
                        <th>slug</th>
                        <th>Posts Count</th>
                        <th>created at</th>
                        <th>update at</th>
                        <th>Edit</th>
                        <th>delete</th>
                    </tr>
                    </tfoot>
                  </table>
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
