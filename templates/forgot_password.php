<?php include("_header.php"); ?>

<section>
      <h2>Veuillez compléter pour réinitialiser votre mot de passe:</h2>
      <form class="mt-30" action="secret_question.php" method="post">
        <p>
          NOM<br/>
          <input type="text" name="nom_famille"><br/><br/>
          Prenom<br/>
          <input type="text" name="prenom"><br/><br/>
          et / ou <br/><br/>
          Identifiant<br/>
          <input type="text" name="identifiant"><br /><br />
          <input class="button" type="submit" value="Valider">
        </p>
      </form>
    </section>
<?php include("_footer.php"); ?>