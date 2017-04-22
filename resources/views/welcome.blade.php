<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ Html::style('css/bootstrap.min.css') }}
        {{ HTML::script('js/jquery.min.js') }}

        <title>angkotBDG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">AngkotBDG</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="/login">Masuk</a></li>
                    <li><a href="#">Pendaftaran Supir</a></li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron text-center">
            <h1>AngkotBDG</h1>
            <p>Website prototype for public transportation management</p>
        </div>
        <center><h1>Cek Tarif Angkot</h1></center>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="dari">Dari:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="dari" placeholder="Masukkan tempat naik angkot">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tujuan">Tujuan:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="tujuan" placeholder="Masukkan tempat turun">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </body>
</html>
