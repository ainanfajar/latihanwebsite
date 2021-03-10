<?php

$angka1 = "";
$angka2 = "";
$hasil = "";
$jmlhderet = "";
$hasilderet = "";

if(isset($_POST['submit'])){
    $angka1=$_POST["angka1"];
    $angka2=$_POST["angka2"];
    $jmlhderet=$_POST["jmlhderet"];

    $x=$angka1;
    $y=$angka2;
    $n=$jmlhderet;

    $hasilderet = $x.",".$y;
    for($i=0; $i<$n-2; $i++){
        $hasil=$x+$y;
        $x=$y;
        $y=$hasil;

        $hasilderet = $hasilderet.",".$hasil;
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Fibonacci</title>
</head>

<body>
    <section id="section">
        <div id="navbar" class="navbar">
            <div class="pull-left">
                <img src="media/logosd.png" alt="logo sd" width="150px" margin-right="20px">
            </div>
            <div class="pull-left">
                <h1>Tugas 3</h1>
                <h3>Fibonacci</h3>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SISD</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tugas3.php">Tugas 3</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h3>Fibonacci</h3>
                    <hr>
                    <form method="POST" action="#" class="form-horizontal form form-container">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Angka Pertama:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input" value="<?php echo $angka1;?>"
                                    name="angka1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Angka Kedua:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input" value="<?php echo $angka2;?>"
                                    name="angka2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Jumlah Deret:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input" value="<?php echo $jmlhderet;?>"
                                    name="jmlhderet" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn-primary btn-block btn-default"
                                    name="submit">Hitung</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5> <b>Hasil: </b> </h5>
                            <h4> <?php echo $hasilderet; ?> </h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright © 2021 | by Ainan Fajar</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>