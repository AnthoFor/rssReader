<?php include(__DIR__ . '/../views/header.php'); ?>

    <div class="container-fluid rounded w-50">
        <div class="container d-flex justify-content-center align-items-center vh-100 vw-90">
            <form class="row justify-content-center rounded">
                <label class="parameters text-center fw-bolder mb-5 mt-3" for="parameters">PARAMÈTRES</label>
                <div class="col-12 d-flex justify-content-center align-items-center mb-5">
                    <label class="form-check-label"></label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="darkMode">
                        <label class="form-check-label" for="">Thème sombre</label>
                    </div>
                </div>
                <div class="col-auto">
                    <label for="flux" class="fw-bold mb-2">Vos préférences de flux</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories" type="checkbox" id="generalNews">
                        <label class="form-check-label" for="generalNews">Actualités générales</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories" type="checkbox" id="football">
                        <label class="form-check-label" for="football">Football</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories" type="checkbox" id="tennis">
                        <label class="form-check-label" for="tennis">Tennis</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories" type="checkbox" id="rugby">
                        <label class="form-check-label" for="rugby">Rugby</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories" type="checkbox" id="basketBall">
                        <label class="form-check-label" for="basketBall">Basket</label>
                    </div>
                </div>

                <label class="text-center fw-bold mt-5 mb-1" for="newsDisplay">Nombre d'actualités à afficher sur la page</label>
                <div class="col-12 d-flex justify-content-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">9</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">12</label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark mt-3 mb-3">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    <?php include(__DIR__.'\footer.php');