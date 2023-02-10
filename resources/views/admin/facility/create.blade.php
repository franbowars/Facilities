@extends('layouts.admin')
@section('title', '施設の新規作成')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>施設情報入力</h2>
                <form action="{{ route('admin.facility.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">施設名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">施設住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">施設内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="content" rows="15">{{ old('content') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">施設設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment" rows="10">{{ old('equipment') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">施設利用料金</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="fee" value="{{ old('fee') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">施設アクセス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="accsess" value="{{ old('accsess') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">施設画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection