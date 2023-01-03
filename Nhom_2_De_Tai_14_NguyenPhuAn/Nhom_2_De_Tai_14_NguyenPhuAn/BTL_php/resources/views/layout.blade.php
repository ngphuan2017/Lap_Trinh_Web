<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trang chủ</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <base href="{{asset('')}}">
        <link rel="stylesheet" type="text/css" href="style/prod_style.css"/>
        <style>
            .center {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="banner">Quản lý bán hàng</h1>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Trang chủ</a>
                    </li>
                    
                </ul>
            </nav>
            @yield('content')
            <p class="footer">Copyright <?php echo date('d/m/Y'); ?></p>
        </div>
    </body>
</html>