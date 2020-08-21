<?php include("_header.php"); ?>
<section>
      <article class="free_format_container">
        <h4>Veuillez taper votre Identifiant et Mot de Pass(Password) pour acceder</h4>
        <form class="mt-30" action="home.php" method="post">
          <p>
            Identifiant<br/>
            <input type="password" name="identifiant"><br/><br/>
            Mot de Pass(Password)<br/>
            <input type="password" name="pass_word"><br/><br/>
            <input class="button" type="submit" value="Valider">
          </p>
        </form>  
    </section>
<?php include("_footer.php"); ?>