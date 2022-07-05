<?php
//koneksi dan menentukan database
$databaseHost = 'localhost';
$databaseName = 'catatan_pemweb';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// mysql_select_db("catattan_pemweb", mysql_connect("localhost", "root", ""));

//index awal data yang ingin ditampilkan
$default_index = 0;

//batasan menampilkan data
$default_batas = 25;

//jika terdapat nilai batas di URL, gunakan untuk mengganti nilai default $default_batas
if(isset($_GET['batas']))
{
    $default_batas = $_GET['batas'];
}

//jika terdapat nilai halaman di URL, gunakan untuk mengganti nilai dafault dari $default_index
if(isset($_GET['halaman']))
{
    $default_index = ($_GET['halaman']-1) * $default_batas;
}

/*
 * ambil beberapa data kolom di tabel dengan data yang ditayangkan
 * mulai dari index ke ($default_index) dengan jumlah hingga
 * sebanyak ($default_batas)
*/
$ambil_data = mysqli_query($mysqli, "SELECT * FROM btc order by id desc LIMIT ".$default_index.",".$default_batas);

#menghitung total baris di tabel country
$total_baris = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM btc"));

# MEMBUAT TOMBOL PAGING
$nomor_paging = 1;
$html_paging = "<ul class='pagination scrolling-wrapper flex-nowrap'>";
while($total_baris - $default_batas > 0)
{
    $html_paging .= "<li class=\"btn btn-default btn-outline-primary\"><a href='?halaman=".$nomor_paging."&batas=".$default_batas."'>".$nomor_paging."</a></li>";
    $nomor_paging++;
    $total_baris -= $default_batas;
}
if($total_baris > 0)
{
    $html_paging .= "<li class=\"btn btn-default btn-outline-primary\"><a href='?halaman=".$nomor_paging."&batas=".$default_batas."'>".$nomor_paging."</a></li>";
}
$html_paging .= "</ul>";

# MEMBUAT TABEL YANG MENAYANGKAN DATA
$output_html = "<table class='table table-bordered'>".
                    "<tr>".
                        "<th>ID</th>".
                        "<th>Sinyal</th>".
                        "<th>Level</th>".
                        "<th>Tanggal dan Waktu</th>".
                        "<th>Harga Rp.</th>".
                        "<th>Harga USDT</th>".
                        "<th>Vol BTC</th>".
                        "<th>Vol Rp.</th>".
                        "<th>Last Buy</th>".
                        "<th>Last Sell</th>".
                        "<th>Jenis</th>".
                    "<tr/>";

//perulangan membuat list data
$nomor_baris = $default_index + 1;
while($data = mysqli_fetch_assoc($ambil_data))
{
    $output_html .= "<tr>".
                        // "<td>".$nomor_baris."</td>".
                        "<td>".$data["id"]."</td>".
                        "<td>".$data["sinyal"]."</td>".
                        "<td>".$data["level"]."</td>".
                        "<td>".$data["tanggal"]."</td>".
                        "<td>".$data["hargaidr"]."</td>".
                        "<td>".$data["hargausdt"]."</td>".
                        "<td>".$data["volidr"]."</td>".
                        "<td>".$data["volusdt"]."</td>".
                        "<td>".$data["lastbuy"]."</td>".
                        "<td>".$data["lastsell"]."</td>".
                        "<td>".$data["jenis"]."</td>".
                    "</tr>";
    $nomor_baris++;
}
$output_html .= "</table>";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>20081010165 - Create Chart Using PHP and MySQL</title>

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- JS -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <style>
        .scrolling-wrapper{
            overflow-x: auto;
        }
        </style>

    </head>
<body>
    <!-- CONTENT -->
    <!-- MENU -->
    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">DataDiagram</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="tabel.php" class="nav-item nav-link active">Table</a>
                    <a href="diagram.php" class="nav-item nav-link">Charts</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="koneksi.php" class="nav-item nav-link">Cek Koneksi</a>
                </div>
            </div>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <!-- CONTENT -->
        <!-- SELECT SEARCH -->
        <!-- TABEL -->
        
        <div class="row">
        <div class="col-md">
            <div class="panel panel-default">
            <div class="panel-heading"><b>Tampilkan Hingga: </b></div>
            <div class="panel-body">
                <form method="get">
                    <div class="form-group row">
                    <div class="col-md-9">
                        <input class='form-control' name="batas" value='<?php echo $default_batas?>'/>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-default btn-outline-primary" type="submit">Kirim</button>
                    </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <br>
        <!--tayangkan tabel country-->
        <div class='scrolling-wrapper flex-nowrap'>
            <?php echo $output_html?><br>
        </div>
        <?php echo $html_paging?>
        <br><br>
    </div>

</body>
</html>