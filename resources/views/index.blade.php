@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="app">
            <!-- デフォルトだとこの中ではvue.jsが有効 -->
            <!-- example-component はLaravelに入っているサンプルのコンポーネント -->
            <example-component></example-component>
        </div>
        <!-- body タグの最後に足す-->
        <script src=" {{ mix('js/app.js') }} "></script>
    </div>
@endsection
