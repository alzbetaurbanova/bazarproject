<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	//$sql = "SELECT * FROM inzeraty";
	//$result = $conn->query($sql);

    if($_GET["hladaj"]) $sql = "SELECT * FROM inzeraty WHERE Nazov LIKE '%".$_GET["hladaj"]."%'";	//ak obsahuje hľadaný reťazec
	else $sql = "SELECT * FROM inzeraty";
	$result = $conn->query($sql);
?>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4"></div>
<div class="col-md-4">
    <form action="index.php" method="get">
	     <div class="form-row">
		        <div class="col-md-8">
                    <input type="hidden" name="link" value="recent.php">
					<input type="text" class="form-control" name="hladaj" placeholder="Zadaj hľadané slovo">
				</div>
                <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Hľadať</button>
		        </div>
	    </div>
    </form>
</div>
</div><br><br>
<div clas="row">            
                    <ul class="nav nav-pills nav-fill col-md-12">
			            <li class="nav-item"><a class="nav-link " href="../index.php?link=home.php">Domov</a></li>
			            <li class="nav-item"><a class="nav-link" href="../index.php?link=addnew.php">Pridať inzerát</a></li>
			            <li class="nav-item"><a class="nav-link active" href="../index.php?link=recent.php">Inzeráty</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Prihlásenie</a></li>
		            </ul>

</div><br><br>

<div class="container">
    <div class="row">
        <?php while($row = $result->fetch_assoc())
        {
	?>
    <table class="table table-hover">
    <tbody>
    <tr>
      <td><div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title"><b><?php echo $row["Nazov"]; ?></b></h5>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $row["Popisok"]; ?></li>
                            <li class="list-group-item"><?php echo $row["Mesto"]; ?></li>
                            <li class="list-group-item"><a><?php echo $row["Cena"]; ?>€</a></li>
                        </ul>
   
                    </div>
      </td>
      <td><br><img src="Images/produkty/<?php echo $row["Obrazok"]; ?>"  style="max-width: 200px; max-height: 300px" alt="Foto"></td>
  </tbody>
 </table>
        
        <?php } ?>
    </div>
</div>

