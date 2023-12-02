@extends('layouts.dashboard')
@section('title','Edit tag')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-sm-6">
              <h1>Edit tag</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item "><a href="{{ route('category.index') }}">Tag</a></li>
                <li class="breadcrumb-item active">Edit tag</li>
              </ol>
            </div>
          </div>

          </div>
        <!-- /.container-fluid -->
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Tag - {{$tag->name }}</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('tag.update',[$tag->id]) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputname">Tag name</label>
              <input type="name" class="form-control" id="exampleInputname" placeholder="Enter category name" name="name" value="{{$tag->name }}">
              @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="10" name="description" placeholder="Enter ...">{{$tag->description }}</textarea>
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
              </div>
              <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
    </div>
</div>
    </section>
@endsection
