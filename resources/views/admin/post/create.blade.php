@extends('layouts.dashboard')
@section('title','Add Post')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-sm-6">
              <h1>Add Post</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item "><a href="{{ route('post.index') }}">Post</a></li>
                <li class="breadcrumb-item active">add post</li>
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
          <h3 class="card-title">add post</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="post-title">Title</label>
              <input type="name" class="form-control" id="post-title" placeholder="Enter category name" name="title" value="{{ old('title') }}">
              @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Description</label>

                    <textarea id="summernote" class="form-control" placeholder="Enter ..." name="description"> {{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif

              </div>

              <div class="form-group">
                <label for="image">Image</label>
                <div class="input-group">

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" value=" old('image')" }}>
                        <label class="custom-file-label" for="image" >Choose file</label>
                      </div>

                </div>
                @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Category</label>
                <select name="category" class="form-control">
                    <option value="" selected style="display:none;">Select one category</option>
                    @foreach ($category as $item)

                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
                @if ($errors->has('category'))
                <span class="text-danger">{{ $errors->first('category') }}</span>
            @endif
              </div>
              <div class="form-group">
                <label>Tag</label>
                @foreach ($tag as $item)
                <div class="custom-control custom-checkbox">
                    <input name="tags[]"  class="custom-control-input" type="checkbox" id="{{ $item->id }}"   value="{{ $item->id }}">
                    <label for="{{ $item->id }}" class="custom-control-label">{{ $item->name }}</label>
                  </div>

                 @endforeach


              </div>

             <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    </div>
</div>
    </section>
@endsection
