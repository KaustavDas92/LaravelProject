@extends('layout1')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            @forelse($articles as $art)
            <div id="content">
                <div class="title">
                    <h2><a href="{{$art->path()}}">{{$art->Title}}</a></h2>
                </div>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p>{{$art->excerpt}}</p>
                @empty
                    <p> No Articles Found</p>
                    @endforelse

            </div>
        </div>
    </div>

@endsection
