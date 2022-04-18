@extends('voyager::master')
@section('content')
<?php
 $conn=mysqli_connect("localhost","root","","laravel");
 $sql="DELETE FROM `etat` WHERE 1;";
 $mysqli_result = mysqli_query($conn, $sql) ;
$l=$_GET['count'];
for($i=1;$i<=$l;$i+=5){
    $l22=$_GET['select'.$i.''];
    $c=$i+1;
    $l1=$_GET['select'.$c.''];
    $c=$c+1;
    $l11=$_GET['select'.$c.''];
    $c=$c+1;
    $l2=$_GET['select'.$c.''];
    $c=$c+1;
    $l3=$_GET['select'.$c.''];
   
    if (!$conn){
        exit("erreur");
        
    }
    $sql="INSERT INTO `etat`(`id`, `proid`,`nomP`, `ETAT1`, `ETAT2`, `ETAT3`) VALUES (null,'$l1','$l22','$l11','$l2','$l3')";
    $mysqli_result = mysqli_query($conn, $sql) ;
}



echo"<button formaction='http://localhost:8000/admin/posts'>submit</button>";
?>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="a" style="width: 400px;">
<center><canvas id="myChart" width="200" height="200"></canvas>

<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'mars'<?php
          $conn = mysqli_connect("localhost", "root", "", "laravel");
         $sql = "SELECT distinct date_format(Date_de_recrutement,'%M') from `personnelles`; ";
         $fire = mysqli_query($conn,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo ",'".$result["date_format(Date_de_recrutement,'%M')"]."'";
          }
?>],
        datasets: [{
            label: '# of Votes',
            data: [0<?php
          $conn = mysqli_connect("localhost", "root", "", "laravel");
         $sql = "SELECT 3*count(id) from personnelles group BY MONTH(Date_de_recrutement); ";
         $fire = mysqli_query($conn,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo ",".$result['3*count(id)'];
          }
?>
        ],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});




</script>










@endsection