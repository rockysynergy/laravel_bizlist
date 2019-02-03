@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">
                Dashboard
                <a href="/listings/create" class="btn btn-primary  float-right">Add Listing</a>
              </div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif


                  <h3>Your listings</h3>
                  @if(count($listings) > 0)
                    <table class="table table-striped">
                      <tr>
                        <th>Company</th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach($listings as $listing)
                        <tr>
                          <td>{{$listing->name}}</td>
                          <td>
                            <a class="btn btn-primary float-right" href="/listings/{{$listing->id}}/edit">Edit</a>
                          </td>
                          <td>
                            {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                              {{ Form::hidden('_method', 'DELETE') }}
                              {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                            {!! Form::close() !!}
                          </td>
                        </tr>
                      @endforeach
                  @endif
              </div>
          </div>
      </div>
  </div>

@endsection
