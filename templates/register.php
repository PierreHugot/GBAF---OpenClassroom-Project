<?php include("_header.php"); ?>

<section>
      <h2>Veuillez remplir tous les champs pour créer votre compte de connexion</h2>
      <form class="mt-30" action="login.php" method="post">
        <p>
          NOM<br/>
          <input type="text" name="nom_famille"><br/><br/>
          Prenom<br/>
          <input type="text" name="prenom"><br/><br/>
          Identifiant<br/>
          <input type="text" name="identifiant"><br/><br/>
          Mot de Pass(Password)<br/>
          <input type="password" name="pass_word"><br/><br/>
          Question secrète<br/>
          <input type="text" name="question_secrete"><br/><br/>
          Réponse à la question secrète<br/>
          <input type="text" name="reponse"><br/><br/>
          <input class="button"type="submit" value="Valider">
        </p>
      </form>
    </section>
<?php include("_footer.php"); ?>