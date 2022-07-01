<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/spinnaker" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <title>Document</title>
</head>

<body>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>