<!--  <!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>It Works Again</h1>
    <p>Sounds like you want to hear more about {{$topic}}</p>
</body>
</html>  -->

@component('mail::message')
    #Header


    They are working on a product.

    But yeah I don't think they have a client as such rn.

    But they did mention that they would be recruiting so no clue.

    -A list
    -Goes
    -Here

    @component('mail::button',['url'=>'https://www.google.com'])
        Welcome to laravel
    @endcomponent
@endcomponent
