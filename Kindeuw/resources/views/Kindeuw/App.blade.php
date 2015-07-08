<!DOCTYPE html>
<html>
<head>
	<title>Kindeuw Toko Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.5-dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('\css\footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css\main.css') }}">
    <script type="text/javascript" src="{{ asset('js\jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\main.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">KINDEUW TOKO BUKU</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="{{ url('Kindeuw') }}">Halaman Utama</a></li>
                <li><a href="{{ url('Kindeuw/About/About') }}">Tentang Kami</a></li>
                <li><a href="{{ url('Kindeuw/Contact/Contact') }}">Kontak</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-search"></span>    Cari Data Buku</a></li>
            </ul>
        </div>
    </div>
</nav><br><br><br>




@yield('kontensatu')
<footer>
    <div class="footer-basic-centered">
        <p> FahmiAchmadF &copy 2015 </p>
    </div>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>