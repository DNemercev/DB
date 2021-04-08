<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Test sql Add</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<h2>POST SOFTWARES</h2>
<form name="post-softwares" id="post-softwares" method="post" action="{{url('post-softwares')}}">
    @csrf
    <div class="form-group">
        <label>PostId</label>
        <input type="text" id="post-id" name="post_id" class="form-control" required="" pattern="^[ 0-9]+$">
    </div>
    <div class="form-group">
        <label >SoftwareId</label>
        <input type="text" id="software-id" name="software_id" class="form-control" required="" pattern="^[ 0-9]+$">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h2>POST</h2>
<form name="post" id="post" method="post" action="{{url('post')}}">
    @csrf
    <div class="form-group">
        <label>title</label>
        <input type="text" id="post-title" name="post_title" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >description</label>
        <input type="text" id="post-description" name="post_description" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >slug</label>
        <input type="text" id="post-slug" name="post_slug" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >content</label>
        <input type="text" id="post-content" name="post_content" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >image</label>
        <input type="text" id="post-image" name="post_image" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >website</label>
        <input type="text" id="post-website" name="post_website" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h2>SLOTS</h2>
<form name="slots" id="slots" method="post" action="{{url('slots')}}">
    @csrf
    <div class="form-group">
        <label>title</label>
        <input type="text" id="post-title" name="post_title" class="form-control" required="">
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

<h2>SOFTWARES</h2>
<form name="softwares" id="softwares" method="post" action="{{url('softwares')}}">
    @csrf
    <div class="form-group">
        <label>title</label>
        <input type="text" id="software-title" name="software_title" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >description</label>
        <input type="text" id="software-description" name="software_description" class="form-control" required="">
    </div>
    <div class="form-group">
        <label >slug</label>
        <input type="text" id="software-slug" name="software_slug" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
//https://laratutorials.com/laravel-8-form-example-tutorial/
