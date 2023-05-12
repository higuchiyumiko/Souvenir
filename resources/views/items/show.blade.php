<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Souvenir</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>商品一覧</h1>
        <div class='items'>
            @foreach ($items as $item)
                    <p class='title'>{{ $item->id }}</p>
                    <div class='body'>
                        <p>商品名：{{ $item->name }}</p>
                        <div class="image">
                           <img src="{{ $item->item_image }}" alt="画像が読み込めません。"/>
                        </div>
                        <p>販売会社：{{$item->market_name}}</p>
                        <div class="edit"><a href="/items/edit/{{$item->id}}">この商品を編集する</a></div>
            @endforeach
                    </div>
                </div>
                 <script>
                            function deletePost(id) {
                                'use strict'
                        
                                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                    document.getElementById(`form_${id}`).submit();
                                }
                            }
                 </script>
        </div>
        
      
    </body>
</html>