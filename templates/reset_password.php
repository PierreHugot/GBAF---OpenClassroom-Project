<?php include("_header.php"); ?>

<section>
      <h2>Veuillez renseigner votre nouveau mot de passe:</h2>
      <form class="mt-30" action="login.php" method="post">
        <p>
          NOM<br/>
          HUGOT<br /><br/>
          Prenom<br/>
          Pierre<br /><br/>
          Identifiant<br/>
          PierreHUGOT<br /><br/>
          Mot de passe<br /><br/>
          <input type="password" name="new_password"/><br /><br/>
          <input type="submit" value="Valider" />
        </p>
      </form>
    </section>
<?php include("_footer.php"); ?>