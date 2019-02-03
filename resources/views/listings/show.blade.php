@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
              {{$listing->name}}
              <a href="/listings" class="btn btn-primary float-right">Go back</a>
            </div>

            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">Address: {{$listing->address}}</li>
                <li class="list-group-item">Website: <a href="http://{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                <li class="list-group-item">Email: {{$listing->email}}</li>
                <li class="list-group-item">Phone: {{$listing->phone}}</li>

              </ul>
              <hr>
              <div class="card">
                <div class="card-body">
                  {{$listing->bio}}
                </div>
              </div>
            </div> {{-- End card-body --}}
        </div>{{-- End card --}}
    </div>
</div>
@endsection
