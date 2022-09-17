@extends('layouts.navbar')
@section('title','users')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header text-center">
                        <h1> All Users </h1>
                    </div>
{{--                    <a href="{{route('post.addPostDB')}}" class=" btn btn-success m-3" > Add New Post </a>--}}
                    <div class="card-body">
                        <table  class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="col-1">
                                    #
                                </th>
                                <th class="col-3">
                                    User Name
                                </th>
                                <th class="col-5">
                                    User E-Mail
                                </th>
{{--                                <th class="col-3">--}}
{{--                                    Action--}}
{{--                                </th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <th >
                                        {{$key += 1 }}
                                    </th>
                                    <th >
                                        {{$user->name}}
                                    </th>
                                    <th >
                                        {{$user->email}}
                                    </th>
{{--                                    <th>--}}
{{--                                        <a href="{{route('post.showPostDB',[ $user->id , 'show' ])}}" class="btn btn-info m-2" > View </a> /--}}
{{--                                        <a href="{{route('post.showPostDB',[ $user->id , 'edit' ])}}" class="btn btn-primary m-2" > Edit </a> /--}}
{{--                                        <a href="{{route('post.deletePostDB', $user->id )}}" class="btn btn-danger m-2" > Delete </a>--}}
{{--                                    </th>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                            <div class="mx-auto">
                                {{$users->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
