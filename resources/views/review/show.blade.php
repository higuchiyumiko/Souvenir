<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>レビュー詳細画面</h1>
        <div class='main'>
                        @foreach ($reviews as $review)
                    <p class='title'></p>
                    <div class='body'>
                        @foreach ($items as $item) 
                        @if ($item->id=== $review->item_id)
                            <p>商品名：{{$item->name}}</p>
                        @endif
                            <p></p>
                        @endforeach
                        <p>タイトル：{{ $review->title }}</p>
                        <img src="{{ $item->item_image }}" alt="画像が読み込めません。"/>
                        <p>コメント：{{$review->body}}</p>
                        <p>★：{{$review->review_score}}</p>
                        @endforeach
        </div>
      
    </body>
</html>