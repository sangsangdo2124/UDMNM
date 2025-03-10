<!DOCTYPE html>
<html>
    <head>
        <style>
            .navbar {
                background-color: #ff5850;
                font-weight:bold;
            }
            .nav-item a {
                color: #fff!important;
            }
            .navbar-nav {
                margin:0 auto;
            }
            .list-book{
                display:grid;
                grid-template-columns:repeat(4,24%);
            }
            .book {
                margin:10px;
                text-align:center;
            }
        </style>
        <title>@yield('title')</title>
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <header style='text-align:center'>
            <img src="{{asset('images/banner.jpg')}}" width="1000px">
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <div class='row' style='text-align:center'>
                <div class='col-4'>TRỤ SỞ</div>
                <div class='col-4'>THÔNG TIN CHUNG</div>
                <div class='col-4'>BẢN ĐỒ</div>
            </div>
        </footer>
    </body>
</html>