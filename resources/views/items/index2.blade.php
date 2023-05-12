<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>お土産品口コミサイト</h1>
        <div class='main'>
            @foreach($items as $item)
            <div class='item'>
                <h2 class='title'>商品名:{{$item->name}}</h2>
                @if($item->item_image!=null)
                <img src="{{$item->item_image}}" alt="画像が読み込みません"/>
                @else
                <p>画像はアップロードされていません</p>
                @endif
            @endforeach
            <div class='body'>
                <h2><a href="/items/">口コミを投稿したいお土産品を探す</a></h2>
                @foreach($reviews as $review)
                    <h3>タイトル:{{$review->title}}</h3>
                    <a href="/review/show/{{$review->id}}">この口コミを見る</a>
                @endforeach
            </div>
            <aside>
                @foreach($categories as $category)
                    <p>{{$category->name}}</p>
                @endforeach
            </aside>
            </div>
        </div>
    </body>
</html>