@extends('layouts.drest')

@section('blog_content')


    <h1>Posts</h1>
    @if(count($posts) > 1)

        @foreach($posts as $post)
          <div class="well">
            <<h3>{{$post->title}}</h3>
          </div>
        @endforeach
    @else

    <p>No Post yet</p>
    @endif

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="">
<title> Ire</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="post-wrapper">
                    <div class="alert-info beading">
                      View <a href="" class="btn btn-primary pull-right">Create</a>
                    </div>
                    <div class="post">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="thumbnail">
                                <img src="" alt="img-1">
                              </div>
                            </div>

                            <div class="col-md-12">
                              <h1> Post One</h1>
                              <p> lorem ipsum</p>
                              <a href="" class="btn btn-primary btn-sm">Edit</a>
                              <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>


                    <div class="post">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="thumbnail">
                                    <img src="img/noimage.jpg" alt="img-1">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                <h1>Second Post</h1>
                                <p> Lorem Ipsum</p>
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                              </div>
                          </div>
                    </div>


              </div>
            </div>

        </div>
    </div>
</body>
</html>
      

@endsection