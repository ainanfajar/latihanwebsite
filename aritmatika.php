<?php

$suku1 = "";
$sukuN = "";
$beda = "";
$baris = "";
$barishasil = "";
$hasil = "";

if(isset($_POST['submit'])){
    $suku1 = $_POST["suku1"];
    $beda = $_POST["beda"];
    $sukuN = $_POST["sukuN"];

    $a = $suku1;
    $b = $beda;
    $n = $sukuN;

    $hasil = $a + ($n - 1) * $b;
    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $barishasil .= $baris . " ";
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
    <title>Aritmatika</title>
</head>

<body>
    <section id="section">
        <div id="navbar" class="navbar">
            <div class="pull-left">
                <img src="media/logosd.png" alt="logo sd" width="150px" margin-right="20px">
            </div>
            <div class="pull-left">
                <h1>Tugas 3</h1>
                <h3>Aritmatika</h3>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SISD</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Sejarah</a></li>
                    <li><a href="#">Budaya</a></li>
                    <li><a href="tugas3.php">Tugas 3</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h3>Aritmatika</h3>
                    <hr>
                    <form method="POST" action="#" class="form-horizontal form form-container">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Suku Pertama:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input" value="<?php echo $suku1;?>" name="suku1"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Beda:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input" value="<?php echo $beda;?>" name="beda"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Suku Ke N:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input" value="<?php echo $sukuN;?>" name="sukuN"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn-primary btn-block btn-default"
                                    name="submit">Hitung</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5> <b>Suku Ke-N (Un): </b> </h5>
                            <h4> <?php echo $hasil; ?> </h4>
                        </div>

                        <div class="form-group">
                            <h5> <b>Baris Aritmatika: </b> </h5>
                            <h4> <?php echo $barishasil; ?> </h4>
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