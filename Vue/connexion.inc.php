<?php

?>


<!-- Custom styles for this template -->
<link href="src/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <form class="form-1" method="POST"  action="Controller/connexionController.php">
        <img class="mb-4" src="src/images/logo.png" alt="" width="200" height="152">
        <h1 class="h3 mb-3 fw-normal">Page de Connexion :</h1>

        <div class="form-floating">
            <label for="email">Adresse Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@gmail.com">
        </div>
        <br/>
        <div class="form-floating">
            <label for="floatingPassword">Mot de Passe</label>
            <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de Passe">
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Se Souvenir de Moi
            </label>
        </div>
        <form action="connexion.inc.php" method="post">
            <input name="page" type="submit" value="Vous n'avez pas de comptes ?"></input>
        </form>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
        <br/>
        </br>
    </form>
</main>

</body>


