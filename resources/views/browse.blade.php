@extends('voyager::master')
@section('content')
<?php
                                 $conn=mysqli_connect("localhost","root","","laravel");
                                  if (!$conn){
                                        exit("erreur");
                                        
                                  }
                                 $sql="SELECT  `Dossier_scientifique`, `Dossier_Pedagogique`, `Dossier_administratif`FROM `personnelles` ";
                                 $mysqli_result = mysqli_query($conn, $sql) ;
                                  if(mysqli_num_rows($mysqli_result) > 0){
                                         echo"<select name='filiere'>";
                                         while($rows= mysqli_fetch_assoc($mysqli_result)){
                                          echo"<option value=".$rows["Dossier_scientifique"]."> ".$rows["Dossier_scientifique"]."</option>";
                                            }
                                        echo"</select>";
                                     }
                           ?>


@endsection