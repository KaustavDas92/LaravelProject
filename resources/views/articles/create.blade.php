@extends ('layout1')
@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    @endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

            <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>
                        <div class="control">
                            <input class="input is-primary @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{old('title')}}" required>
                        </div>
                </div>
                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                        <div class="control">
                            <textarea class="textarea is-primary @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt" >{{old('excerpt')}}</textarea>
                            @if($errors->has('excerpt'))
                            <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                            @endif
                        </div>
                </div>
                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class="control">

                        <textarea class="textarea is-primary @error('body') is-danger @enderror" name="body" id="body" >{{old('body')}}</textarea>
                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="tag">Tags</label>
                    <div class="select is-multiple control">

                        <select name="tags[]"
                                multiple>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>

                        @error('tag')
                        <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
