<!doctype html>
<html lang = 'eng'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width , user-scalable=no , initial-scale=1.0">
          <meta http-equiv="X-UA-compatible" content="ie-edge">
    <title>QUERY builder more</title>
</head>
<body>
    @foreach($product as $product)
       <div>
         <a href={{"/product/".$product->id}}>{{$product->name}}</a>
       </div>
    @endforeach
</body>
</html>