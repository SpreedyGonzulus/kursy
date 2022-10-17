
<?php

$pytanie = "SELECT * FROM dane";

$odpowiedz = mysqli_query($db,$pytanie);



 while($row = mysqli_fetch_array($odpowiedz))
{
 //{echo $row['ID'] . " " . $row['Data'] . " " .$row['Imie_Nazwisko'] . " " .$row['Kwota'] . " " .$row['Status']; echo "<br>" ; 
?>

<div class="info"> 

    <p class="id"><?php echo $row['ID']?> </p> 
    <p class="data"> <?php echo $row['Data']?> </p>
    <p class="imie_nazwisko"> <?php echo $row['Imie_Nazwisko']?> </p>
    <p class="kwota"> <?php echo $row['Kwota']?> </p>
    <p class="status"> <?php echo $row['Status']?> </p>

</div>



<?php

 }

 mysqli_close ($db);


