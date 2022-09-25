@extends('layouts.navbar')
@section('title','product upload')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{$details['title']}}</h1>
                            <p>{{$details['body']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
