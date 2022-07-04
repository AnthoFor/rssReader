                <!-- Nav bar en mode < 576 px  -->
<div>
    <nav class="navbar navbar-expand-lg text-center <?=$bgClass?> navBarSm">
        <div class="container-fluid justify-content-between ">
            <a  href="../controllers/pages-controller.php" class="bi bi-gear gear <?=$txtClass?> img-fluid" ></a>
            <div>
                    <a  class="link" href="../controllers/pages-controller.php"><h1 class="title <?=$txtClass?>">L'EQUIPE 22 </h1></a>
                    <a  class="link" href="../controllers/pages-controller.php"><h3 class="<?=$txtClass?> slogan">L'info Sport</h3></a>
            </div>
            
            <button class="navbar-toggler buttonNav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon iconNav <?=$btnClass?>"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item dropdown ">
                            <ul  class="list-unstyled" aria-labelledby="navbarDropdown ">
                                <li><a class="dropdown-item <?=$txtClass?>" href="../controllers/pages-controller.php?cat=global">Actualités générales</a></li>
                                <li><a class="dropdown-item <?=$txtClass?>" href="../controllers/pages-controller.php?cat=foot">Football</a></li>
                                <li><a class="dropdown-item <?=$txtClass?>" href="../controllers/pages-controller.php?cat=tennis">Tennis</a></li>
                                <li><a class="dropdown-item <?=$txtClass?>" href="../controllers/pages-controller.php?cat=rugby">Rugby</a></li>
                                <li><a class="dropdown-item <?=$txtClass?>" href="../controllers/pages-controller.php?cat=basket">Basket</a></li>
                            </ul>
                        </li>
                    </ul>
            </div>

        </div>
    </nav>
</div>


                        <!-- Nav bar en mode > 576 px  -->
<div>
    <nav class="navbar text-center <?=$bgClass?> navBarLg">
        <div class="container-fluid justify-content-around  w-100">
            <a  href="../controllers/parameters-controller.php" class="bi bi-gear gear <?=$txtClass?> justify-content-start" ></a>
        <div>
            <h1 class="title <?=$txtClass?> ">L'EQUIPE 22 </h1>
            <h3 class="<?=$txtClass?> slogan">L'info Sport</h3>
        </div>
        <a href="../controllers/pages-controller.php"><img src="../public/assets/img/lEQUIPE_22Logo.png" class="logo"  alt="logo de l'équipe 22 avec style, une chaussure multicolor"></a>


        </div>
        <div class="<?=$txtClass?> d-flex justify-content-around w-100 mt-3">
            <p><a class="text-decoration-none <?=$txtClass?>" href="../controllers/pages-controller.php?cat=global">Actualités générales <img src="../public/assets/img/newspaper-svgrepo-com.svg" alt="logo journal illustrant les news général" class="iconSports ms-3"></a></p>
            <p><a class="text-decoration-none <?=$txtClass?>" href="../controllers/pages-controller.php?cat=foot">Football <img src="../public/assets/img/football-svgrepo-com.svg" alt="logo ball de football illustrant les news de foot"  class="iconSports ms-3"></a></p>
            <p><a class="text-decoration-none <?=$txtClass?>" href="../controllers/pages-controller.php?cat=tennis">Tennis <img src="../public/assets/img/big-tennis-ball-svgrepo-com.svg" alt="logo ball de football illustrant les news de foot"  class="iconSports ms-3"></a></p>
            <p><a class="text-decoration-none <?=$txtClass?>" href="../controllers/pages-controller.php?cat=rugby">Rugby <img src="../public/assets/img/rugby-ball-svgrepo-com.svg" alt="logo ball de football illustrant les news de foot"  class="iconSports ms-3"></a></p>
            <p><a class="text-decoration-none <?=$txtClass?>" href="../controllers/pages-controller.php?cat=basket">Basket <img src="../public/assets/img/basketball-ball-svgrepo-com.svg" alt="logo ball de football illustrant les news de foot"  class="iconSports ms-3"></a></p>
        </div>
    </nav>
</div>
