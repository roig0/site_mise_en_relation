

<h1 style="color: blue;">Ajouter un nouvelle utilisateurs</h1>

<div>
    <form method="POST" action="index.php?page=isExistController" enctype="multipart/form-data">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        <br/>
        <br/>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br/>
        <br/>
        <br/>
        <label for="email">E-mail :</label>
        <input type="text" id="email" name="email" required>
        <br/>
        <br/>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required>
        <br/>
        <br/>
        <label for="mdp_1">Confirmer le mot de passe :</label>
        <input type="password" id="mdp_1" name="mdp_1" required>
        <br/>
        <br/>
        <label for="image_pro">Photo de Profils(Pas obligatoire)</label>
        <br>
        <br>
        <input type="file" id="image_pro" name="image_pro" accept="image/png, image/jpeg">
        <br/>
        <br/>
        <input name="btnConect" type="submit" value="Connexion">
    </form>

</div>
