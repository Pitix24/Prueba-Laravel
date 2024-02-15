<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Matías</title>
    <link rel="stylesheet" href="../resources/css/app.scss">
    <script type="module" src="../js/app.js"></script>
</head>
<body>
    <div class="container">
            <article>
                <h1>{{$post->title}}</h1>
                <p>{{$post->excerpt}}</p>
            </article>
        @endforeach
        
    </div>
</body>
</html>
