<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/welcome.css">
</head>
<body>
    
    <section>
        <h1>{{ $post->title }}</h1>
        By <a href="#">{{ $post->author->username }}</a> in <a href="#"> {{ $post->category->name }}</a>
        <p>{!! $post->body !!}</p>
        <a href="/">Go back</a>
    </section>

</body>
</html>