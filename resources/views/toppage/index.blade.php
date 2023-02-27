@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#000000">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="title">
                                     <a href="{{ route('toppage.facility', ['id' => $post->id]) }}">{{ Str::limit($post->name, 150) }}</a>
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->content, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ secure_asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#000000">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection