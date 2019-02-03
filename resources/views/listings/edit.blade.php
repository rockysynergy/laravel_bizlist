@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
              Create Listing
              <a href="/dashboard" class="btn btn-primary  float-right">Go back</a>
            </div>

            <div class="card-body">
              {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company Name']) }}
                {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company website']) }}
                {{ Form::bsText('email', $listing->email, ['placeholder' => 'Contact Email']) }}
                {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Contact Phone']) }}
                {{ Form::bsText('address', $listing->address, ['placeholder' => 'Business Address']) }}
                {{ Form::bsText('bio', $listing->bio, ['placeholder' => 'About This Business']) }}

                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
              {!! Form::close() !!}
            </div> {{-- End card-body --}}
        </div>{{-- End card --}}
    </div>
</div>
@endsection
