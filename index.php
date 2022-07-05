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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="tabel.php" class="nav-item nav-link">Table</a>
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
        <!-- CARD -->
        <div class="row">
            <div class="col-6">
                <div class="card border-primary mb-4">
                    <div class="card-body text-primary">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">MYSQL</h5>
                        <p class="card-text">MySQL adalah sebuah DBMS (Database Management System) menggunakan perintah SQL (Structured Query Language).</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-success mb-4">
                    <div class="card-body text-success">
                        <h5 class="card-title">HTML</h5>
                        <p class="card-text">Hypertext Markup Language atau HTML adalah bahasa markup yang digunakan untuk membuat sebuah halaman web.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-danger mb-4">
                    <div class="card-body text-danger">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">Cascading Style Sheets (CSS) adalah perintah yang digunakan untuk tampilan sebuah halaman situs web dalam mark-up language.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-warning mb-4">
                    <div class="card-body text-warning">
                        <h5 class="card-title">JAVASCRIPT</h5>
                        <p class="card-text"> JavaScript adalah bahasa pemrograman yang digunakan untuk pengembangan website agar lebih dinamis.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-info mb-4">
                    <div class="card-body text-info">
                        <h5 class="card-title">JQUERY</h5>
                        <p class="card-text">jQuery adalah library JavaScript lintas-platform yang didesain untuk menyederhanakan client-side scripting pada HTML.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
