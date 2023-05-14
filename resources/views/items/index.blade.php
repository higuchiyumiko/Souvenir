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
                <a href='/items/show'>登録されている商品を見る</a>
            <div class='body'>
                <h2><a href="/items/">口コミを投稿したいお土産品を探す</a></h2>
               
                @foreach($items as $item)
                  @if($item->item_image!=null)
                    <img src="{{$item->item_image}}" alt="画像が読み込めません"><br>
                　@endif
                @endforeach
                @foreach($reviews as $review)
                    <h3>タイトル:{{$review->title}}</h3>
                    <a href="/review/show/{{$review->id}}">この口コミを見る</a>
                @endforeach
            </div>
                
                    <div class='paginate'>
                        {{$reviews->links()}}
                    </div>
                
            
            </div>
        </div>
    </body>
</html>