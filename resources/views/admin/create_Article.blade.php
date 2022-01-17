
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-ZooZu</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
    <body class="admin-body">
            <div class="popup__content popup__content--article">
                <div class="popup__box">
                    <a href="/admin#articles" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-medium">Article</h2>
                    <form action="{{ route('article.store') }}" class="popup__form" method="POST">
                        @csrf
                        <div class="form_group">
                            <select name="animal_id" class="form__select u-margin-bottom-medium">
                                @foreach ($animals as $animal)
                                    <option value="{{ $animal->id }}">{{ $animal->slovak_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form__group">
                            <textarea class="popup__textarea" name="text" id="article-content" cols="30" rows="10" placeholder="Obsah"></textarea>
                        </div>
                        <div class="form__group">
                            <button type="submit" class="btn btn--coral">Add</button>
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>
