<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1>Регистрация</h1>

<form action="{{ route('user.registration') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email" class="col-form-label-lg">Ваш email</label>
        <input class="form-control" id="email" name="email" value="" type="text" placeholder="email">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <lable for="password" class="col-form-label-lg">Пароль</lable>
        <input class="form-control" id="passwodr" name="password" value="" type="password" placeholder="password">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-privary" type="submit" name="sendMe" value="1">Зарегестрироваться</button>
    </div>
</form>
</body>
</html>
