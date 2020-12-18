<div id="contenu">
	<h2>Positivité</h2>
	<p>Bienvenue sur la page de la positivité !</p>
    <div id="contenu">

        <p>Bonjour, vueillez entrer votre message de bonheur ici.</p>

        <div class="formulaire">
            <form action="index.php?action=positivity" method="post">

                <p><textarea rows="3" name="message">Entrez vos mots</textarea></p>
                <p><input type="submit" name="form_positivity" value="Envoyer"></p>
            </form>
            <div id="notification"><?php echo $notification ?> <?php echo $hapiness ?></div>
        </div>
    </div><!-- #contenu -->
</div><!-- #contenu -->