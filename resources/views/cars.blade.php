<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>

<body>
    <h1>All Cars</h1>
    <p>All cars are listed below</p>

    @foreach ($vehicles as $item)
        <li>Name: {{ $item->name }}</li>
        <li>Model: {{ $item->model }}</li>
        <li>Make: {{ $item->make }}</li>
        <li>Price: ${{ $item->price }}</li>
    @endforeach
</body>

</html>
