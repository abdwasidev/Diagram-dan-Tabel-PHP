<!DOCTYPE html>
<html>
   <head>
      <title>20081010165 - Create Chart Using PHP and MySQL</title>

      <!-- CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- JS -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <a href="diagram.php" class="nav-item nav-link active">Charts</a>
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
        <?php 
        $conn = mysqli_connect("localhost","root","","catatan_pemweb");
        ?>
        <!-- CARD TAB -->
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a href="#level" class="nav-link active" data-bs-toggle="tab">Level</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="level">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Kombinasi level</h5>
                        <p class="card-text">Level: Banyak data yang ada tiap value (nilai data) pada atribut level. Tanggal: Banyak transakasi yang terjadi dalam 1 hari.</p>
                        <!-- DIAGRAM START -->
                        <?php

                        $query = mysqli_query($conn,"SELECT * FROM btc");
                        if ($query) {
                            $view = array();
                            if (mysqli_num_rows($query)>0) {
                                while ($row = mysqli_fetch_assoc($query)) {
                                $view[] = $row['level'];
                                }
                            }
                        }else{
                            echo "no";
                        }
                        ?>
                        <div class="container">
                            <canvas id="versiLevel" width="100" height="100"></canvas>
                        </div>
                        <script>
                            var ctx = document.getElementById("versiLevel");
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: [
                                        "Crash1", 
                                        "Crash2", 
                                        "DiamondCrash", 
                                        "GoldenCrash1", 
                                        "GoldenCrash2",
                                        "MegaCrash1", 
                                        "MegaCrash2", 
                                        "MegaMoon1", 
                                        "MegaMoon2", 
                                        "Moon1", 
                                        "Moon2", 
                                        "Recover1", 
                                        "Recover2", 
                                        "sama", 
                                        "SuperCrash1", 
                                        "SuperCrash2", 
                                        "SuperMoon1", 
                                        "SuperMoon2",
                                        "UltraCrash1", 
                                        "UltraCrash2",
                                        "UltraMoon1", 
                                        "UltraMoon2", 
                                        "Wajar1", 
                                        "Wajar2"
                                    ],
                                    datasets: [{
                                            label: '# View \"Level\"',
                                            data: [
                                                <?php 
                                                $jumlah_Crash1 = mysqli_query($conn,"SELECT * from btc where level='Crash1'");
                                                echo mysqli_num_rows($jumlah_Crash1);
                                                ?>, 
                                                <?php 
                                                $jumlah_Crash2 = mysqli_query($conn,"SELECT * from btc where level='Crash2'");
                                                echo mysqli_num_rows($jumlah_Crash2);
                                                ?>, 
                                                <?php 
                                                $jumlah_DiamondCrash = mysqli_query($conn,"SELECT * from btc where level='DiamondCrash'");
                                                echo mysqli_num_rows($jumlah_DiamondCrash);
                                                ?>,
                                                <?php 
                                                $jumlah_GoldenCrash1 = mysqli_query($conn,"SELECT * from btc where level='GoldenCrash1'");
                                                echo mysqli_num_rows($jumlah_Crash1);
                                                ?>,
                                                <?php 
                                                $jumlah_GoldenCrash2 = mysqli_query($conn,"SELECT * from btc where level='GoldenCrash2'");
                                                echo mysqli_num_rows($jumlah_GoldenCrash2);
                                                ?>,
                                                <?php 
                                                $jumlah_MegaCrash1 = mysqli_query($conn,"SELECT * from btc where level='MegaCrash1'");
                                                echo mysqli_num_rows($jumlah_MegaCrash1);
                                                ?>,
                                                <?php 
                                                $jumlah_MegaCrash2 = mysqli_query($conn,"SELECT * from btc where level='MegaCrash2'");
                                                echo mysqli_num_rows($jumlah_MegaCrash2);
                                                ?>,
                                                <?php 
                                                $jumlah_MegaMoon1 = mysqli_query($conn,"SELECT * from btc where level='MegaMoon1'");
                                                echo mysqli_num_rows($jumlah_MegaMoon1);
                                                ?>,
                                                <?php 
                                                $jumlah_MegaMoon2 = mysqli_query($conn,"SELECT * from btc where level='MegaMoon2'");
                                                echo mysqli_num_rows($jumlah_MegaMoon2);
                                                ?>,
                                                <?php 
                                                $jumlah_Moon1 = mysqli_query($conn,"SELECT * from btc where level='GoldenCrash1'");
                                                echo mysqli_num_rows($jumlah_Crash1);
                                                ?>,
                                                <?php 
                                                $jumlah_Moon2 = mysqli_query($conn,"SELECT * from btc where level='Moon'");
                                                echo mysqli_num_rows($jumlah_Moon2);
                                                ?>,
                                                <?php 
                                                $jumlah_Recover1 = mysqli_query($conn,"SELECT * from btc where level='Recover1'");
                                                echo mysqli_num_rows($jumlah_Recover1);
                                                ?>,
                                                <?php 
                                                $jumlah_Recover2 = mysqli_query($conn,"SELECT * from btc where level='Recover2'");
                                                echo mysqli_num_rows($jumlah_Recover2);
                                                ?>,
                                                <?php 
                                                $jumlah_sama = mysqli_query($conn,"SELECT * from btc where level='sama'");
                                                echo mysqli_num_rows($jumlah_sama);
                                                ?>,
                                                <?php 
                                                $jumlah_SuperCrash1 = mysqli_query($conn,"SELECT * from btc where level='SuperCrash1'");
                                                echo mysqli_num_rows($jumlah_SuperCrash1);
                                                ?>,
                                                <?php 
                                                $jumlah_SuperCrash2 = mysqli_query($conn,"SELECT * from btc where level='SuperCrash2'");
                                                echo mysqli_num_rows($jumlah_SuperCrash2);
                                                ?>,
                                                <?php 
                                                $jumlah_SuperMoon1 = mysqli_query($conn,"SELECT * from btc where level='SuperMoon1'");
                                                echo mysqli_num_rows($jumlah_SuperMoon1);
                                                ?>,
                                                <?php 
                                                $jumlah_SuperMoon2 = mysqli_query($conn,"SELECT * from btc where level='SuperMoon2'");
                                                echo mysqli_num_rows($jumlah_SuperMoon2);
                                                ?>,
                                                <?php 
                                                $jumlah_UltraCrash1 = mysqli_query($conn,"SELECT * from btc where level='UltraCrash1'");
                                                echo mysqli_num_rows($jumlah_UltraCrash1);
                                                ?>,
                                                <?php 
                                                $jumlah_UltraCrash2 = mysqli_query($conn,"SELECT * from btc where level='UltraCrash2'");
                                                echo mysqli_num_rows($jumlah_UltraCrash2);
                                                ?>,
                                                <?php 
                                                $jumlah_UltraMoon1 = mysqli_query($conn,"SELECT * from btc where level='UltraMoon'");
                                                echo mysqli_num_rows($jumlah_UltraMoon1);
                                                ?>,
                                                <?php 
                                                $jumlah_UltraMoon2 = mysqli_query($conn,"SELECT * from btc where level='UltraMoon2'");
                                                echo mysqli_num_rows($jumlah_UltraMoon2);
                                                ?>,
                                                <?php 
                                                $jumlah_Wajar1 = mysqli_query($conn,"SELECT * from btc where level='Wajar1'");
                                                echo mysqli_num_rows($jumlah_Wajar1);
                                                ?>,
                                                <?php 
                                                $jumlah_Wajar2 = mysqli_query($conn,"SELECT * from btc where level='Wajar2'");
                                                echo mysqli_num_rows($jumlah_Wajar2);
                                                ?>,
                                            ],
                                            backgroundColor: '#9BA3EB',
                                            borderColor: '#000',
                                            borderWidth: 1
                                        }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                    }
                                }
                            });
                        </script>
                        <!-- DIAGRAM END -->
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <!-- CONTENT -->
    </div>
</body>
</html>
