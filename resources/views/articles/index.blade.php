@extends('layout1')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            @foreach($articles as $art)
            <div id="content">
                <div class="title">
                    <h2><a href="/articles/{{$art->id}}">{{$art->Title}}</a></h2>
                </div>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p>{{$art->excerpt}}</p>
                    @endforeach

            </div>
        </div>
    </div>

@endsection
