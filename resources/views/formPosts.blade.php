<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h2>POST</h2>
<form name="post-form" id="post" method="post" action="{{url('posts')}}">
    @csrf
    <div class="form-group">
        <label>title</label>
        <input type="text" id="post-title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label >description</label>
        <input type="text" id="post-description" name="description" class="form-control">
    </div>
    <div class="form-group">
        <label >slug</label>
        <input type="text" id="post-slug" name="slug" class="form-control">
    </div>
    <div class="form-group">
        <label >content</label>
        <input type="text" id="post-content" name="post_content" class="form-control">
    </div>
    <div class="form-group">
        <label >image</label>
        <input type="text" id="post-image" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label >website</label>
        <input type="text" id="post-website" name="website" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<form name="slots-relation" id="slots-relation" method="post" action="{{url('software-relation')}}">
    @csrf
    <h1>Добавить зависимость с SoftWare через title</h1>
    <h2>Softvare</h2>
    <div class="form-group">
        <label>title</label>
        <input type="text" id="software-title" name="softwareTitle" class="form-control">
    </div>
    <h2>Post</h2>
    <div class="form-group">
        <label>title</label>
        <input type="text" id="post-title" name="postTitle" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
