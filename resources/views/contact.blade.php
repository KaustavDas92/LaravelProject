@extends('layout1')
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Contact Us</h2>
                </div>
                <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>

                <form class="bg-white p-6 rounded shadow-md"
                      style="width: 300px"
                      method="POST"
                      action="/contact">
                    @csrf
                    <div class="mb-5">
                        <label for="email"
                               class="block text-xs uppercase font-weight-bold mb-1">
                            Email Address
                        </label>
                        <input type="text" id="email" name="email" class="border px-2 py-1 text-sm w-full">
                        @error('email')
                        <div class="text-red-500 text-xs">{{$message}}</div>
                        @enderror

                    </div>
                    <div class="control">
                        <button class="button is-primary">Email me</button>
                    </div>
                    @if(session('message'))
                        <div> {{ session('message') }}</div>
                    @endif

                </form>
            </div>
        </div>
    </div>


@endsection
