@extends('Post.layout')
@section('content')
	<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4> Post Details</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Post.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $Post->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $Post->detail }}
            </div>
        </div>
    </div>
@endsection
