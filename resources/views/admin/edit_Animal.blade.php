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
                    <h2 class="heading-secondary u-margin-bottom-medium">Update article</h2>
                    <form action="/animal/{{ $data->id }}" class="popup__form" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form__row">
                            <div class="form__group">
                                <input class="form__input" type="text" name="latin_name" id="latin-heading" value="{{ $data->latin_name }}" required>
                                <label class="form__label" for="latin-heading">Latinsky nazov</label>
                            </div>
            
                            <div class="form__group">
                                <input class="form__input" type="text" name="slovak_name" id="slovak-heading" value="{{ $data->slovak_name }}" required>
                                <label class="form__label" for="slovak-heading">Slovensky nazov</label>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <input class="form__input" type="text" name="lifespan" id="life" value="{{ $data->lifespan }}" required>
                                <label class="form__label" for="life">Dožitie</label>
                            </div>

                            <div class="form__group">
                                <input class="form__input" type="text" name="number" id="number" value="{{ $data->number }}" required>
                                <label class="form__label" for="number">Počet</label>
                            </div>

                            <div class="form__group">
                                <input class="form__input" type="text" name="species" id="species" value="{{ $data->species }}" required>
                                <label class="form__label" for="species">Druh</label>
                            </div>
                            <div class="form__group">
                                <input class="form__input" type="text" name="occurrence" id="occurrence" value="{{ $data->occurrence }}" required>
                                <label class="form__label" for="occurrence">Vyskyt</label>
                            </div>

                            <div class="form__group">
                                <input class="form__input" type="text" name="endangered" id="endangered" value="{{ $data->endangered }}" required>
                                <label class="form__label" for="endangered">Ohrozenie</label>
                            </div>
                        </div>

                        <div class="form__group">
                            <button type="submit" class="btn btn--green-blue">Update</button>
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>
