
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

<form action="{{ route('user.logout') }}">
    <div class="form-group">
        <button class="btn btn-lg btn-privary" type="submit" name="sendMe" value="1">Выйти</button>
    </div>
    <br />
    <a href="slots-form">обновить слоты!</a>
    <br />
    <a href="post-form">обновить посты!</a>
    <br />
    <a href="software-form">обновить software</a>
    <br />
</form>
</body>
</html>
