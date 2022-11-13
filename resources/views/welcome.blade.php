<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @for ($i = 1; $i < 5; $i++)
        @for ($j = 1; $j < 4; $j++)
            <p>CA{{ $i }}{{ $j }}</p>
        @endfor
    @endfor
</body>

</html>
