@extends('layouts.navbar')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{__('message.hello')}} {{__('message.name')}} Home Page</h1>
            </div>
        </div>
    </div>
@endsection
