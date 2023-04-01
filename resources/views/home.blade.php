<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- {{ $name }} --}}
    {{-- @{{ $name }} pure --}}
    {{-- {{ $users }} --}}

    @foreach ($users as $u)
        <li>{{ $u }}</li>
    @endforeach


    {{-- <?php
    ?>
    @php
        foreach ($variable as $key => $value) {
            # code...
        }
    @endphp --}}

    <h1>Home Page</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi ipsam quibusdam distinctio fugit illo facere
        esse maiores beatae accusamus id architecto explicabo, sed ex vero incidunt, ipsum nihil voluptatem impedit.</p>
</body>

</html>
