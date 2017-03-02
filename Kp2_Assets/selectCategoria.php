<?php  
 $connect = mysqli_connect("localhost", "root", "", "db_tiendakupidos");  
 //$connect = mysqli_connect("dbtiendakupidos.db.9941338.hostedresource.com", "dbtiendakupidos", "kupiDos@devH12", "dbtiendakupidos");  
 $output = '';  
 $sql = "SELECT * FROM tbcategoria ORDER BY id ASC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '
           <li class="list-group-item">
              <div class="fb-send" data-href="http://www.kupi2.com/catalogkupi2.php?categoria='.$row["nvchname"].'" alt="compartir con un amigo"></div>  <a href="catalogkupi2.php?categoria='.$row["nvchname"].'">'.$row["nvchname"].' </a>
           </li>
           ';
      }  
      $output .= '  
           
      ';  
 }  
 else  
 {  
      $output .= '
            	<div class="alert alert-danger" role="alert">
          		  <strong>UPPS!!</strong> Aun no tenemos productos.
          		</div>
      ';
 }  
 $output .= '';  
 echo $output;  
 ?>