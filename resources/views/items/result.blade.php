<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>検索結果</h1>
        <p>「{{$name}}」 というキーワードが含まれている商品</p>
        
        @forelse ($items as $item)
        <p>商品番号{{$item->id}}の「{{$item->name}}」がヒットしました！</p>
        <a href='/items/create/{{$item->id}}/'>「{{$item->name}}」のレビュー投稿する</a><br>
        <p>新しく商品を登録してレビュー投稿する方はこちら</p>
        <a href='/items/register'>商品登録をする</a>
      @empty
        <p>該当する商品がありません!<br>新しく商品登録される方はこちら↓</p>
        <a href='/items/register'>商品登録をする</a>
      @endforelse
    </body>
</html>