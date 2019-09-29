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
  <title>Document</title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="post-wrapper">
                        <div class="alert-info" style="`padding: 15px; margin:15px; font-size; 18px;"> upload</div>

                        <form action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for=""> Title</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                  <label for=""> Details</label>
                                  <textarea name="" id="" cols="30" rows="10" class="
                                  form-control"></textarea>
                            </div>
                            <div class="for-group">
                              <label for="">upload</label>
                              <input type="file">
                            </div>
                            <input type="submit" value="Upload" class="btn btn-primary">
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
      

@endsection