@extends('layouts.admin')
@section('title', '登録済み施設一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>施設一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.facility.add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ route('admin.facility.index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-secondary table-striped">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="8%">名前</th>
                                <th width="8%">住所</th>
                                <th width="25%">施設内容</th>
                                <th width="10%">設備</th>
                                <th width="25%">料金</th>
                                <th width="25%">アクセス</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $facilities)
                                <tr>
                                    <th>{{ $facilities->id }}</th>
                                    <td>{{ Str::limit($facilities->name, 100) }}</td>
                                    <td>{{ Str::limit($facilities->address, 100) }}</td>
                                    <td>{{ Str::limit($facilities->content, 250) }}</td>
                                    <td>{{ Str::limit($facilities->equipment, 200) }}</td>
                                    <td>{{ Str::limit($facilities->fee, 200) }}</td>
                                    <td>{{ Str::limit($facilities->accsess, 200) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.facility.edit', ['id' => $facilities->id]) }}">編集</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.facility.delete', ['id' => $facilities->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection