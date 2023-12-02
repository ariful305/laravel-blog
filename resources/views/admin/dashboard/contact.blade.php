@extends('layouts.dashboard')

@section('title','Contact')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Contact</h1>
            </div>

          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

 <section class="content-header">
        <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title">Recent message</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>Sl. No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>message</th>
                            <th>View</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($contact as $key=>$iteam)
                        <tr>
                            <td>{{ $key+1 }}  </td>
                            <td>{{$iteam->name}}</td>
                            <td>{{$iteam->email}}</td>
                            <td>{{$iteam->subject}}</td>
                            <td>{{Str::limit($iteam->message, 50, $end='.......')}}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('contacts.view',[$iteam->id])}}" >
                                    <i class="fas fa-eye">
                                    </i>
                                    Edit
                                </a>

                                </td>
                                <td>
                                    <form action="{{ route('contacts.delete',[$iteam->id]) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                         <button onclick="return confirm('Are you sure you want to Delete?');" class="btn btn-danger btn-sm" href="{{ route('contacts.delete',[$iteam->id])}}" type="submit">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </button>

                                    </form>

                                </td>
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
        <!-- /.container-fluid -->
      </section>


@endsection
