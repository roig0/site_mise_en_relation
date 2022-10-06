<?php
 ?>


<body class="bg-light">

<div class="container">
    <main>
        <img src="src/images/logo.png" width="200" height="200">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Information Personnel</h4>
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Un prénom valide est demandé
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Un nom valide est demandé
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="email" placeholder="john.doe@example.com" required>
                            <div class="invalid-feedback">
                                rentré une email valide
                            </div>
                        </div>
                        </br>
                        <div class="col-12">
                            <label for="address" class="form-label">Addresse</label>
                            <input type="text" class="form-control" id="address" placeholder="25 rue de la truite" required>
                            <div class="invalid-feedback">
                                Rentré une adresse valide
                            </div>
                        </div>
                        </br>
                        <div class="col-12">
                            <label for="address2" class="form-label">Addresse Segondaire <span class="text-muted">(Optionel)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="autre addresse">
                        </div>

                        </br>
                        <div class="col-md-5">
                            <label for="region" class="form-label">Région</label>
                            <select class="form-select" id="region" required>
                                <option value="">Choisir</option>
                                <option>-------------</option>
                                <option>Creuse</option>
                                <option>Loraine</option>
                                <option>Occitanie</option>
                                <option>Gard</option>

                            </select>
                            <div class="invalid-feedback">
                                Choisissai une région valide
                            </div>
                            </br>
                        </div>

                        <br/>
                        <div class="col-md-5">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" required>
                                <option value="">Choisir</option>
                                <option>-------------</option>
                                <option>Agriculteur</option>
                                <option>Entreprise</option>

                            </select>
                            <div class="invalid-feedback">
                                Choisissai une région valide
                            </div>
                        </div>
                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">J'accepte les conditions d'utilisation</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">J'accepte de recevoir par mail des informations publicitaire de la part de Agri DATA</label>
                        </div>

                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">S'enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>



<script src="src/js/bootstrap.bundle.min.js"></script>
<script src="src/js/form-validation.js"></script>

</body>

