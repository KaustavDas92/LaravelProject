@extends('layout1')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>{{$article->Title}}</h2>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p>{{$article->body}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
