<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
</head>
<body class="container">

<h1>{{ $title }}</h1>

{{$slot}}
</body>
</html>
