<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Software</title>
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


<h2>SOFTWARES</h2>
<form name="softwares" id="softwares" method="post" action="{{url('softwares')}}">
    @csrf
    <div class="form-group">
        <label>title</label>
        <input type="text" id="software-title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label >description</label>
        <input type="text" id="software-description" name="description" class="form-control">
    </div>
    <div class="form-group">
        <label >slug</label>
        <input type="text" id="software-slug" name="slug" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<form name="slots-relation" id="slots-relation" method="post" action="{{url('software-relation')}}">
    @csrf
    <h1>Добавить зависимость с Post через title</h1>
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

<br />
<form action="private">
    <button type="submit" class="btn btn-primary">Main</button>
</form>

</body>
</html>
