<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Pham</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <h1>Danh sach san pham</h1>

    <ul>
        @foreach ($products as $product)
        <li>{{ $product->name }} - {{ $product->price }}</li>
        @endforeach
    </ul>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
