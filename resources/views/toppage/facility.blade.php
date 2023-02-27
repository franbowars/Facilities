<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/facility.css') }}" rel="stylesheet">
    </head>   
    <body>
        <section>
            <h2>施設の詳細情報</h2>
                <div class="container">
                    <table class="table table-hover">
                        <tbody>
                            <tr class="table-warning">
                                <th>名称</th>
                                    <td>{{ $facility->name }}</td>
                            </tr>
                            <tr class="table-warning">
                                <th>住所</th>
                                    <td >{{ $facility->address }}</td>
                            </tr>
                            <tr class="table-warning">
                                <th>施設内容</th>
                                    <td>{{ $facility->content }}</td>
                            </tr>
                            <tr class="table-warning">
                                 <th>施設設備</th>
                                    <td>{{ $facility->equipment }}</td>
                            </tr>
                            <tr class="table-warning">
                                <th>施設料金</th>
                                    <td>{{ $facility->fee }}</td>
                            </tr>
                            <tr class="table-warning">
                                <th>施設アクセス</th>
                                    <td>{{ $facility->accsess }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </section>
    </body>
</html>