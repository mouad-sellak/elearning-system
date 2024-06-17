<style>
    a {
        font-weight: bold;
    }
</style>

<?php
if (isset($_SESSION['user'])) { ?>
    <div class="nav-container">
        <nav class="navbar" style="background-color: rgb(39,162,212);">
            <a class="navbar-brand">
                <span class="spn"><strong>Elearning System</strong></span>
            </a>
            <?php if ($_SESSION['user']->role == 'Administrateur') { ?>
                <a class="nav-item nav-link" href="http://localhost/elearning-system/gestion-employes">
                    <span class="spn">Employés</span>
                </a>
            <?php } ?>
            <?php if ($_SESSION['user']->role == 'Formateur' || $_SESSION['user']->role == 'Administrateur') { ?>
                <?php if ($_SESSION['user']->login == 'sara-kourri ' || $_SESSION['user']->login == 'sara-mountadar') { ?>
                    <a class="nav-item nav-link" href="http://localhost/elearning-system/ptmo-ppmo">
                        <span class="spn">PTMO-PPMO E-learning</span>
                    </a>
                <?php } ?>
                <?php if ($_SESSION['user']->login == 'hiba' || $_SESSION['user']->login == 'badreddine') { ?>
                    <a class="nav-item nav-link" href="http://localhost/elearning-system/rams">
                        <span class="spn">RAMS E-learning</span>
                    </a>
                <?php } ?>
                <a class="nav-item nav-link" href="http://localhost/elearning-system/gestion-quiz">
                    <span class="spn">Dashboard Quiz</span>
                </a>
                <a class="nav-item nav-link" href="http://localhost/elearning-system/retours-consultans">
                    <span class="spn">Retours Consultants</span>
                </a>
            <?php } ?>
            <div class="ml-auto d-flex justify-content-between">
                <?php if ($_SESSION['user']->login == 'meryem' || $_SESSION['user']->login == 'wiam') { ?>
                    <a class="nav-item nav-link" href="http://localhost/elearning-system/ptmo-ppmo">
                        <span class="spn">PTMO-PPMO E-learning</span>
                    </a>
                <?php } ?>
                <?php if ($_SESSION['user']->login == 'hamza' || $_SESSION['user']->login == 'touria' ||  $_SESSION['user']->login == 'abdessalam') { ?>
                    <a class="nav-item nav-link" href="http://localhost/elearning-system/rams">
                        <span class="spn">RAMS E-learning</span>
                    </a>
                <?php } ?>
                <a class="nav-item nav-link" href="http://localhost/elearning-system/employe-profile">
                    <span class="spn">Bonjour <?php echo $_SESSION['user']->login; ?> !</span>
                </a>
                <a class="nav-item nav-link" href="http://localhost/elearning-system/employe-logout">
                    <span class="spn">Déconnexion</span>
                </a>
            </div>
        </nav>
    </div>

    <!-- Image -->
    <img src="/elearning-system/public/files/PPMO/headline-image.png" alt="Description de votre image" style="width: 100%; height: 30vh;" />

<?php } else { ?>
    <div class="nav-container">
        <nav class="navbar" style="background-color: rgb(39,162,212);">
            <a class="navbar-brand" href="">
                <span class="spn"><strong>Elearning System</strong></span>
            </a>
            <a class="nav-item nav-link" href="http://localhost/elearning-system/employe-login">
                <span class="spn">Connexion</span>
            </a>
        </nav>
    </div>

    <img src="/elearning-system/public/files/PPMO/headline-image.png" alt="Description de votre image" style="width: 100%; height: 20vh;" />

<?php } ?>