<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftar Syarat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <h1>{{ $pendaftar->asesi->user->name }}</h1>
        <ul class="list-group">
            @foreach ($pendaftar->syarat as $item)
                <li class="list-group-item">{{ $item->komentar_asesor }}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>
