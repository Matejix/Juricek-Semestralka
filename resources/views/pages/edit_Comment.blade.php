<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
<div class="popup__content">
    <div class="popup__box">
        <a href= "/discover/{{ $data->article->animal->id }}#comments" class="popup__close">&times;</a>
        <h2 class="heading-secondary u-margin-bottom-medium">Comment form</h2>
        <form action="/comment/{{ $data->id }}" class="popup__form" method="POST">
            @csrf
            @method('PUT')
            <textarea name="content" id="comment-area" rows="10" cols="30" class="popup__textarea u-margin-bottom-small" required>{{ $data->content }}</textarea>
            
            <button type="submit" class="btn btn--green-blue">Add</button>
        </form>
    </div>
</div>
</body>
</html>