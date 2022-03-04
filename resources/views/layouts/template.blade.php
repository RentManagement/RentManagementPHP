<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/tableStyle.css">
    <title>@yield('title')</title>

    <script @yield('scriptJS')></script>
    <!--In this case, I don't know how do this correctly-->
</head>

<body>
    @yield('content')
</body>

</html>