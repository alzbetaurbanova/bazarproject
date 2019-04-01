
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
			            <li class="nav-item"><a class="nav-link" href="../index.php?link=home.php">Domov</a></li>
			            <li class="nav-item"><a class="nav-link active" href="../index.php?link=addnew.php">Pridať inzerát</a></li>
                        <li class="nav-item"><a class="nav-link " href="../index.php?link=recent.php">Inzeráty</a></li>
			            <li class="nav-item"><a class="nav-link" href="#">Prihlásenie</a></li>
		            </ul>
            </div><br><br>
<div>
    <div class="col-sm-offset-1 col-sm-11">
        <form>

            <div class="col-sm-2">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Vyber kategóriu</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Autá</option>
                    <option>Elektronika</option>
                    <option>Hudba</option>
                    <option>Nábytok</option>
                    <option>Oblečenie</option>
                    <option>Šport</option>
                    <option>Zvieratá</option>
                    <option>Iné</option>
                </select>
                </div>
            </div>
            <div class="col-sm-4">             
                <input type="text" class="form-control" placeholder="Nadpis">
                <br>
            </div>

            <div class="col-sm-5">
                <input type="text"  class="form-control"  placeholder="Popis predmetu">
                <br>
            </div>

            <div class="col-sm-2">
                <input type="text"  class="form-control"  placeholder="Cena">
                <br>
            </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Kúpim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Predám</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Darujem</label>
                </div><br>
        </form><br>
        <form>
            <div class="col-sm-4">             
                <input type="text" class="form-control" placeholder="Meno">
                <br>
            </div>
            <div class="col-sm-3">             
                <input type="text" class="form-control" placeholder="Telefón">
                <br>
            </div>
            <div class="col-sm-3">             
                <input type="text" class="form-control" placeholder="Email">
                <br>
            </div>
            <div class="col-sm-4">             
                <input type="text" class="form-control" placeholder="Mesto">
                <br>
            </div>
 
    </div>
</div>