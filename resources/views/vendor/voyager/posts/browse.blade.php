@extends('voyager::master')
@section('content')
<?php
                                 $conn=mysqli_connect("localhost","root","","laravel");
                                  if (!$conn){
                                        exit("erreur");
                                        
                                  }
                                 $sql="SELECT `id` ,`users`,`Prenom`, `Dossier_scientifique`, `Dossier_Pedagogique`, `Dossier_administratif`FROM `personnelles` ";
                                 $mysqli_result = mysqli_query($conn, $sql) ;
                                  if(mysqli_num_rows($mysqli_result) > 0){
                                    $id = auth()->user()->id;
                                    $cont=1;
                                    
                                    
                                         echo '<form><center><table>';
                                         while($rows= mysqli_fetch_assoc($mysqli_result)){
                                            echo "<input type='hidden' name='select".$cont."'value='".$rows['Prenom']."'>";
                                            $cont++;
                                            echo "<input type='hidden' name='select".$cont."'value='".$rows['users']."'>";
                                            $cont++;
                                             echo "<tr><td class='lalign'><a class='a' href='http://localhost:8000/admin/personnelles/".$rows['id']."'>Nom prof :  ".$rows['Prenom']."</a></tr></td>";
                                           echo "<tr><td>";
                                        $c= str_replace('[{"download_link":"','',$rows["Dossier_scientifique"]);
                                            $a=explode('"',$c);
                                           // echo $a[0];
                                            
                                          echo"<a class='a' href='http://localhost:8000/storage/".$a[0]."'>Dossier_scientifique</a>" ;
                                          echo "</td><td><div class='custom-select' style='width:200px;'><select  name='select".$cont."'id='select1'> <option value='En_attente'>En attente</option><option value='en_cours'>en cours</option><option value='valide'>validé</option><option value='refuse'>refusé</option></div></td>";
                                          echo "<tr><td>";
                                          $cont++;
                                  $c= str_replace('[{"download_link":"','',$rows["Dossier_Pedagogique"]);
                                    $a=explode('"',$c);
                                   // echo $a[0];
                                    
                                  echo"<a class='a' href='http://localhost:8000/storage/".$a[0]."'>Dossier_Pedagogique<a/>" ;
                                  echo "</td><td><div class='custom-select' style='width:200px;'><select name='select".$cont."'id='select1'> <option value='En_attente'>En attente</option><option value='en_cours'>en cours</option><option value='valide'>validé</option><option value='refuse'>refusé</option></div></td>";                                 
                                   $cont++;
                                  echo "<tr><td>";
                          $c= str_replace('[{"download_link":"','',$rows["Dossier_administratif"]);
                            
                            $a=explode('"',$c);
                           // echo $a[0];
                            
                          echo"<a class='a' href='http://localhost:8000/storage/".$a[0]."'>Dossier_administratif</a>" ;
                          echo "</td><td><div class='custom-select' style='width:200px;'><select name='select".$cont."'id='select1'> <option value='En_attente'>En attente</option><option value='en_cours'>en cours</option><option value='valide'>validé</option><option value='refuse'>refusé</option></div></td>";                         
                           $cont++;
                  
                          }}
                              echo " <tr><td><button class='button button2' formaction='http://localhost:8000/admin/pages'>submit</button></td></tr>";  
                                $send=$cont-1;
                                echo "<input type='hidden' name='count' value='".$send."'>";
                                
                                       
                           ?>
                           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                           <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                          
                           
                           <script>
                             var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
                           </script>










<style>
table {
  border: 1px solid;
}
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: #6610f2;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: #6610f2;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}









table {
  border-collapse: collapse;
  width: 50%;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #6610f2;
  width:130px;
}

.button2:hover {
  background-color: #6610f2;
  color: white;
}


a.a:link, a:visited {
    width:230px;
  background-color: white;
  color: black;
  border: 2px #6610f2;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a.a:hover, a:active {
  background-color: #6610f2;
  color: white;
}
</style>

@endsection



