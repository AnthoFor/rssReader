


    <div class="container-fluid rounded w-50">
        <div class="container d-flex justify-content-center align-items-center vh-100 vw-90">
            <form class="row justify-content-center rounded" method="POST">
                <label class="parameters text-center fw-bolder mb-5 mt-3" for="parameters">PARAMÈTRES</label>
                <div class="col-12 d-flex justify-content-center align-items-center mb-5">
                    <label class="form-check-label"></label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="darkMode" type="checkbox" id="darkMode" value="1" <?=(!empty($darkMode) && ($darkMode == '1')) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="darkMode">Thème sombre</label>
                    </div>
                </div>
                <div class="col-auto">
                    <label for="flux" class="fw-bold mb-2">Vos préférences de flux</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories[]" type="checkbox" value="generalNews" id="generalNews">
                        <label class="form-check-label" for="generalNews">Actualités générales</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories[]" type="checkbox" value="football" id="football">
                        <label class="form-check-label" for="football">Football</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories[]" type="checkbox" value="tennis" id="tennis">
                        <label class="form-check-label" for="tennis">Tennis</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories[]" type="checkbox" value="rugby" id="rugby">
                        <label class="form-check-label" for="rugby">Rugby</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="categories{]" type="checkbox" value="basketBall" id="basketBall">
                        <label class="form-check-label" for="basketBall">Basket</label>
                    </div>
                </div>

                <label class="text-center fw-bold mt-5 mb-1" for="newsDisplay">Nombre d'actualités à afficher sur la page</label>
                <div class="col-12 d-flex justify-content-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="newsDisplay" id="six" value="0">
                        <label class="form-check-label" for="newsDisplay">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="newsDisplay" id="nine" value="1">
                        <label class="form-check-label" for="newsDisplay">9</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="newsDisplay" id="twelve" value="2">
                        <label class="form-check-label" for="newsDisplay">12</label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark mt-3 mb-3">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    <?php include(__DIR__.'\footer.php');