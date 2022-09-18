@extends('layouts.navbar')
@section('title','product upload')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add New Product
                        @if(Session::has('image_uploaded'))
                            <div class="alert alert-success" role="alert">{{Session::get('image_uploaded')}}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{route('product.saveWithImage')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Product Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Enter Product Name" >
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Product Description</label>
                                <textarea class="form-control" rows="3" name="description" id="description" placeholder="Enter Product Description" ></textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Product Image</label>
                                <input class="form-control" type="file" name="image" id="image" placeholder="Choose Image" >
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" value="submit" class="btn btn-info m-2" >Save Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
