<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM kategorie";
	$result = $conn->query($sql);

    if($_GET["hladaj"]) $sql = "SELECT * FROM kategorie WHERE Meno LIKE '%".$_GET["hladaj"]."%'";	//ak obsahuje hľadaný reťazec
	else $sql = "SELECT * FROM kategorie";
	$result = $conn->query($sql);
?>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4"></div>
<div class="col-md-4">
          <form action="index.php" method="get">
			  <div class="form-row">
				  <div class="col-md-8">
					<input type="text" class="form-control" name="hladaj" placeholder="Zadaj hľadané slovo">
				  </div>
                    <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Hľadať</button>
				  </div>
			  </div>
</div>
</div><br><br>
            <div clas="row">            
                    <ul class="nav nav-pills nav-fill col-md-12">
			            <li class="nav-item"><a class="nav-link active" href="../index.php?link=home.php">Domov</a></li>
			            <li class="nav-item"><a class="nav-link" href="../index.php?link=addnew.php">Pridať inzerát</a></li>
			            <li class="nav-item"><a class="nav-link " href="../index.php?link=recent.php">Inzeráty</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Prihlásenie</a></li>
		            </ul>
            </div><br><br>
<div class="row">
<?php while($row = $result->fetch_assoc())
{
	?>
    <div class="col-md-6">
        <div class="card mb-3" style="max-width: 400px;">
            <a href="../index.php?link=zvierata.php"><div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["Meno"]; ?></h5>
                        <p class="card-text"><?php echo $row["Popisok"]; ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    </br><img src="Images/Icons/<?php echo $row["Obrazok"]; ?>"  width="40%" alt="Foto">
                </div>
            </div></a>
        </div>
    </div>
        <?php } ?>
 </div>
 <div>
 <a href="../index.php?link=recent.php"> Najnovšie pridané inzeráty ... </a>
 </div>

