<div id="formFAQ">
    <h2>Ajouter une nouvelle question et réponse !</h2>
    <form action="../Controleur/FAQ_ajout_controleur.php" method="post">
        <div>
            <label for="question">
                <input type="text" name="question" placeholder="Entrez votre question !" />
            </label>
            <label for="reponse">
                <input type="text" name="reponse" placeholder="Entrez la réponse à votre question !" />
            </label>
        </div>
        <input type="submit" value="Ajouter une question et une réponse !">
    </form>
</div>