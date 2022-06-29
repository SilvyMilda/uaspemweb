<?php
include ('header.php');
$produk= mysqli_query($conn, "select * from produksi");
while($row = mysqli_fetch_array ($produk)){$tanggal[] = $row['tanggal'];

$query= mysqli_query($conn, "select *from produksi where id_order='".$row['id_order']."'"); 
$row = $query->fetch_array(); 
$jumlah_produk[] = $row['qty'];
}
?>

<?php 
if(isset($_POST['submit'])){
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Grafik Laporan Penjualan</title>
    <script type="text/javascript" src="Chart.js"></script>
    <link rel="stylesheet" href="./js/bootstrap.min">
    <script src="./js/jquery.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.js"></script>
    <style type="text/css">
    @media print {
        .print {
            display: none;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <h2 style=" width: 100%; border-bottom: 4px solid gray; padding-bottom: 5px;"><b>Grafik Laporan Penjualan</b>
        </h2>
        <p>
            Berikut ini grafik laporan penjualan :
        </p>
        <div class="col-md-3">
            <a href="" onclick="window.print()" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i>
                Cetak</a>
        </div>
        <br><br>
        <div style="width: 800px; height: 800px;">
            <canvas id="myChart"></canvas>
        </div>

        <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($tanggal); ?>,
                datasets: [{
                    label: 'Tanggal',
                    data: <?php echo json_encode($jumlah_produk);
                    ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
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

    </div>
</body>

</html>
<?php 
include 'footer.php';
?>