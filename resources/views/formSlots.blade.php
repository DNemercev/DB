<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Slots    </title>
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

<h2>SLOTS</h2>
<form name="slots" id="slots" method="post" action="{{url('slots')}}">
    @csrf
    <div class="form-group">
        <label>title</label>
        <input type="text" id="slots-title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label >slug</label>
        <input type="text" id="slots-slug" name="slug" class="form-control">
    </div>
    <div class="form-group">
        <label >category id</label>
        <input type="text" id="slots-category-id" name="categoryId" class="form-control">
    </div>
    <div class="form-group">
        <label >status</label>
        <input type="text" id="slots-status" name="status" class="form-control">
    </div>
    <div class="form-group">
        <label >image</label>
        <input type="text" id="slots-image" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label >softwareId</label>
        <input type="text" id="slots-software-id" name="softwareId" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<form name="slots-relation" id="slots-relation" method="post" action="{{url('slots-relation')}}">
    @csrf
    <h2>Softvare</h2>
    <div class="form-group">
        <label>title</label>
        <input type="text" id="software-title" name="softwareTitle" class="form-control">
    </div>
    <h2>Slot</h2>
    <div class="form-group">
        <label>title</label>
        <input type="text" id="slot-title" name="slotTitle" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
