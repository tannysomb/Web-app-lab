<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <Body>
        @foreach( $products as $products)
        {{$products->id}} -> {{Product->name}}<br>
        @endforeach
        </Body>
        {{-- $products = Product::all(): --}}
</body>
</html>
