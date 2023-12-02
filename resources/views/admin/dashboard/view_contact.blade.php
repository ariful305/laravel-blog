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

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Message</h3>

                          <div class="card-tools">
                           
                          </div>
                        </div>
                        <div class="card-body">
                         <b>Name :</b>  {{ $contact->name}}
                         <br>
                         <hr>
                         <b>Email :</b>  {{ $contact->email}}
                         <br>
                         <hr>
                         <b>Subject :</b>  {{ $contact->subject}}
                         <br>
                         <hr>
                         <b>Message :</b>  {{ $contact->message}}
                        </div>
                        <!-- /.card-body -->

                      </div>
                    <!-- /.card -->
                  </div>


        </div>
        <!-- /.container-fluid -->
      </section>


@endsection
