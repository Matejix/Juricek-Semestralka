@if ($errors->any())
                <div class="error-wrapper">
                    <h2 class="error-wrapper-heading">Form is filled wrong</h2>
                    <ol class="error-wrapper-list">
                        @foreach ($errors->all() as $error)
                        <li>
                            <p class="error-item">{{ $error }}</p>
                        </li>
                        @endforeach
                    </ol>
                </div>
                
                @endif
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
        <div class="admin">
            <div class="admin__menu-bar">
                <div class="admin__logo-box">
                    <img src="{{ asset("/images/logo1.png") }}" alt="Logo" class="admin__logo">
                </div>
                <div class="admin__list-box">
                    <ul class="admin__list">
                        <li class="admin__list-item">
                            <a href="#animal" class="list-item--link">
                                Animals
                            </a>
                        </li>
                        <li class="admin__list-item">
                            <a href="#articles" class="list-item--link">
                                Articles
                            </a>
                        </li>
                        <li class="admin__list-item">
                            <a href="#gallery" class="list-item--link">
                                Gallery
                            </a>
                        </li>
                        <li class="admin__list-item">
                            <a href="#comments" class="list-item--link">
                                Comments
                            </a>
                        </li>
                        <li class="admin__list-item">
                            <a href="#subscribers" class="list-item--link">
                                Subscribers
                            </a>
                        </li>
                        <li class="admin__list-item">
                            <a href="#donators" class="list-item--link">
                                Donators
                            </a>
                        </li>
                        <li class="admin__list-item">
                            <a href="{{ route("home-page") }}" class="list-item--link">
                                Back
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin__content-box">
                <div class="admin__animal" id="animal">
                    <a class="btn btn--blue admin__add-btn" href="/animal/create">Add</a>
                    <table class="table">
                        <thead class="table__head">
                            <tr class="table__row">
                                <th class="table__heading">
                                    id
                                </th>
                                <th class="table__heading">
                                    Nadpis
                                </th>
                                <th class="table__heading">
                                    Akcie
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table__body">

                                @foreach($animals as $animal)
                                <tr class="table__row">
                                    <td class="table__content">{{ $animal['id'] }}</td>
                                    <td class="table__content">{{ $animal['slovak_name'] }}</td>
                                    <td class="table__content">
                                        <a class="table__content table__content--green2" href="animal/{{ $animal['id'] }}/edit"><i class="far fa-edit"></i></a>
                                       
                                        <form action="/animal/{{ $animal['id'] }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('delete')
                
                                            <button type="submit">
                                                <a class="table__content table__content--red" href="#popup-delete-animal"><i class="fas fa-paw"></i></a>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="admin__article" id="articles">
                    <a class="btn btn--blue admin__add-btn" href="/article/create">Add</a>
                    <table class="table">
                        <thead class="table__head">
                            <tr class="table__row">
                                <th class="table__heading">
                                    Zviera
                                </th>
                                <th class="table__heading">
                                    Obsah
                                </th>
                                <th class="table__heading">
                                    Akcie
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table__body">

                            @if ($animals->isNotEmpty())
                            @foreach ($articles as $article)
                                <tr class="table__row">
                                    <td class="table__content">{{ $article->animal->slovak_name }}</td>
                                    <td class="table__content">{{  Str::limit($article->text, 40) }}</td>
                                    <td class="table__content">
                                        <a class="table__content table__content--green" href="/article/{{ $article->id }}/edit"><i class="fal fa-comment-edit"></i></a>
                                        <form action="/article/{{ $article['id'] }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('delete')
                
                                            <button type="submit">
                                                <a class="table__content table__content--red" href="#popup-delete-article"><i class="fas fa-text"></i></a>
                                            </button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>

                <div class="admin__gallery" id="gallery">
                    <a class="btn btn--blue admin__add-btn" href="/gallery/create">Add</a>
                    <table class="table">
                        <thead class="table__head">
                            <tr class="table__row">
                                <th class="table__heading">
                                    id
                                </th>
                                <th class="table__heading">
                                    obrazok
                                </th>
                                <th class="table__heading">
                                    Akcie
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table__body">
                            @foreach ($galleries as $gallery)
                                <tr class="table__row">
                                    <td class="table__content">
                                        {{ $gallery->id }}
                                    </td>
                                    <td class="table__content">
                                        <img src="/storage/{{ $gallery->image }}" alt="{{ $gallery->animal->slovak_name }}" style="width:10rem">
                                    </td>
                                    <td class="table__content">
                                        <form action="/gallery/{{ $gallery['id'] }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('delete')
                
                                            <button type="submit">
                                                <a class="table__content table__content--red" href="#popup-delete"><i class="far fa-trash-alt"></i></a>
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>

                <div class="admin__comment" id="comments">
                    <table class="table">
                        <thead class="table__head">
                            <tr class="table__row">
                                <th class="table__heading">
                                    id
                                </th>
                                <th class="table__heading">
                                    Uzivatel
                                </th>
                                <th class="table__heading">
                                    Comment
                                </th>
                                <th class="table__heading">
                                    Akcie
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table__body">

                            @foreach ($comments as $comment)

                            <tr class="table__row">
                                <td class="table__content">
                                    {{ $comment->id }}
                                </td>
                                <td class="table__content">
                                    {{ $comment->user->username }}
                                </td>
                                <td class="table__content">
                                    {{ $comment->content }}
                                </td>
                                <td class="table__content">
                                    <form action="/comment/{{ $comment['id'] }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('delete')
            
                                        <button type="submit">
                                            <a class="table__content table__content--red" href="#popup-delete"><i class="far fa-trash-alt"></i></a>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                           
                        </tbody>
                    </table>
                </div>

                <div class="admin__subscriber" id="subscribers">
                    <table class="table">
                        <thead class="table__head">
                            <tr class="table__row">
                                <th class="table__heading">
                                    id
                                </th>
                                <th class="table__heading">
                                    Meno
                                </th>
                                <th class="table__heading">
                                    E-mail
                                </th>
                                <th class="table__heading">
                                    Akcia
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table__body">
                            @foreach ($subscribers as $subscriber)
                            <tr class="table__row">
                                <td class="table__content">
                                    {{ $subscriber->id }}
                                </td>
                                <td class="table__content">
                                    {{ $subscriber->name }}
                                </td>
                                <td class="table__content">
                                    {{ $subscriber->email }}
                                </td>
                                <td class="table__content">
                                    <form action="/subscribe/{{ $subscriber['id'] }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('delete')
            
                                        <button type="submit">
                                            <a class="table__content table__content--red" href="#"><i class="far fa-trash-alt"></i></a>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="admin__donator" id="donators">
                    <table class="table">
                        <thead class="table__head">
                            <tr class="table__row">
                                <th class="table__heading">
                                    id
                                </th>
                                <th class="table__heading">
                                    Meno
                                </th>
                                <th class="table__heading">
                                    Priezvisko
                                </th>
                                <th class="table__heading">
                                    Username
                                </th>
                                <th class="table__heading">
                                    E-mail
                                </th>
                                <th class="table__heading">
                                suma €
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table__body">

                            @foreach ($donates as $donate)
                            <tr class="table__row">
                                <td class="table__content">
                                    {{ $donate->id }}
                                </td>
                                <td class="table__content">
                                    {{ $donate->user->firstname }}
                                </td>
                                <td class="table__content">
                                    {{ $donate->user->lastname }}
                                </td>
                                <td class="table__content">
                                    {{ $donate->user->username }}
                                </td>
                                <td class="table__content">
                                    {{ $donate->user->email }}
                                </td>
                                <td class="table__content">
                                    {{ $donate->amount }}.00€
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>