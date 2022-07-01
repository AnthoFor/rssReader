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

    <div class="container-fluid">
        <div class="container">
            <form class="row justify-content-center">
                <label class="parameters text-center mb-5 mt-5 fw-bolder" for="parameters">PARAMÈTRES</label>
                <div class="col-12 mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="Football">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Thème</label>
                    </div>
                </div>
                <div class="col-auto">
                    <label for="flux" class="mb-3 fw-bold">Vos préférences de flux</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="generalNews">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Actualités générales</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="Football">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Football</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="Tennis">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Tennis</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="Rugby">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Rugby</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="Basket">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Basket</label>
                    </div>
                </div>
                <div class="col-12 text-center mt-4 mb-3">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>