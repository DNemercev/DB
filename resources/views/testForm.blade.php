<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
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
</body>
</html>
//https://laratutorials.com/laravel-8-form-example-tutorial/
