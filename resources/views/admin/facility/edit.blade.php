@extends('layouts.admin')
@section('title', '施設の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>施設編集</h2>
                <form action="{{ route('admin.facility.update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">施設名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $facilities_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">施設住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ $facilities_form->address }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">施設内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="content" rows="15">{{ $facilities_form->content }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">施設設備</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="equipment" rows="15">{{ $facilities_form->equipment }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">施設利用料金</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="fee" rows="15">{{ $facilities_form->fee }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">施設アクセス</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="accsess" rows="15">{{ $facilities_form->accsess }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $facilities_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $facilities_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection