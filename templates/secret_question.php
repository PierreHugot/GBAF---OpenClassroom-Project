<?php include("_header.php"); ?>
    <section>
      <h2>Veuillez fournir la réponse à votre question secrète:</h2>
      <form class="mt-30" action="reset_password.php" method="post">
        <p>
          NOM<br/>
          HUGOT<br/><br/>
          Prenom<br/>
          Pierre<br/><br/>
          Identifiant<br/>
          PierreHUGOT<br/><br/>
          Question secrète?<br/><br/>
          Quelle est le prénom de ma fille?<br/><br/>
          <input type="text" name="QS_reponse"><br/><br />
          <input type="submit" value="Valider">
        </p>
      </form>
    </section>
<?php include("_footer.php"); ?>