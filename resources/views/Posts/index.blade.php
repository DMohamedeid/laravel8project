<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Posts </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <x-post-component /> <!--this to defines the component  hint the spaces here not allowed -->

                    <a href="{{route('post.addPostDB')}}" class=" btn btn-success m-3" > Add New Post </a>
                    <div class="card-body">
                        <table  class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="col-1">
                                        #
                                    </th>
                                    <th class="col-3">
                                        Post Title
                                    </th>
                                    <th class="col-5">
                                        Post Body
                                    </th>
                                    <th class="col-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key => $post)
                                <tr>
                                    <th >
                                        {{$key++}}
                                    </th>
                                    <th >
                                        {{$post->title}}
                                    </th>
                                    <th >
                                        {{$post->body}}
                                    </th>
                                    <th>
                                        <a href="{{route('post.showPostDB',[ $post->id , 'show' ])}}" class="btn btn-info m-2" > View </a> /
                                        <a href="{{route('post.showPostDB',[ $post->id , 'edit' ])}}" class="btn btn-primary m-2" > Edit </a> /
                                        <a href="{{route('post.deletePostDB', $post->id )}}" class="btn btn-danger m-2" > Delete </a>
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
