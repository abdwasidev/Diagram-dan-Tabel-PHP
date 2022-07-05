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
                    <a href="tabel.php" class="nav-item nav-link">Table</a>
                    <a href="diagram.php" class="nav-item nav-link">Charts</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="koneksi.php" class="nav-item nav-link active">Cek Koneksi</a>
                </div>
            </div>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <!-- CONTENT -->
        <!-- CEK KONEKSI -->
        <center>
            <?php
            /**
             * using mysqli_connect for database connection
             */

            $databaseHost = 'localhost';
            $databaseName = 'catatan_pemweb';
            $databaseUsername = 'root';
            $databasePassword = '';

            $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

            // Create connection
            $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);}

            $koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

            // Check connection
            if (mysqli_connect_errno()){
                echo "Koneksi database gagal : " . mysqli_connect_error();}
            else {
                echo "<h1>Koneksi berhasil<h1>";
            }

            ?>
        </center>
    </div>
</body>
</html>