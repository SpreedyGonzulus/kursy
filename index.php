<?php
$db = mysqli_connect("localhost", "root", "", "faktury1");



//insert into dane(ID,data,Imie_Nazwisko,Kwota,Status) values ('1','2022-12-08','Mariusz Pudzianowski','2000','Paid');



// $pytanie = "SELECT * FROM dane";

// $odpowiedz = mysqli_query($db,$pytanie);

// while($row = mysqli_fetch_array($odpowiedz))

// {echo $row['ID'] . " " . $row['Data'] . " " .$row['Imie_Nazwisko'] . " " .$row['Kwota'] . " " .$row['Status']; echo "<br>" ; 

// }


//print_r($odpowiedz);


//mysqli_close ($db);

?>


<?php 
  require './partials/header.php';

?>

<?php 
  require './partials/footer.php';
  
?>





<div class="calosc"> <h1>Invoices</h1>
    <br>
    <text class="invoices">There are.... total invoices</text>  <text class="filter">Filter by status</text> 


<div class="content">
  <?php require './database/database.php'; ?>  
</div>




</div>




