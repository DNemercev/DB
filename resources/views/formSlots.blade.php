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
<h2>SLOTS</h2>
<form name="slots" id="slots" method="post" action="{{url('slots')}}">
    @csrf
    <div class="form-group">
        <label>title</label>
        <input type="text" id="slots-title" name="slots_title" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >slug</label>
        <input type="text" id="slots-slug" name="slots_slug" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >category id</label>
        <input type="text" id="slots-category-id" name="slots_category_id" class="form-control" required="" pattern="^[ 0-9]+$">
    </div>
    <div class="form-group">
        <label >status</label>
        <input type="text" id="slots-status" name="slots_status" class="form-control" required="" pattern="^[0-1]{1}">
    </div>
    <div class="form-group">
        <label >image</label>
        <input type="text" id="slots-image" name="slots_image" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >software_id</label>
        <input type="text" id="slots-software-id" name="slots_software_id" class="form-control" required="" pattern="^[ 0-9]+$">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<form name="slots-relation" id="slots-relation" method="post" action="{{url('slots-relation')}}">
    @csrf
    <h2>Softvare</h2>
    <div class="form-group">
        <label>title</label>
        <input type="text" id="software-title" name="software_title" class="form-control" required="">
    </div>
    <h2>Slot</h2>
    <div class="form-group">
        <label>title</label>
        <input type="text" id="slot-title" name="slot_title" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
