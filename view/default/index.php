<?php
    require_once ROOT.'/lang/'.$language.'.php';
?>

<!doctype html>
<html lang="<?= $language; ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/<?= $template; ?>/custom.css">
        <?= isset($link) ? $link : null; ?>
        <title><?= $title; ?></title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['alert']) && !empty($_SESSION['alert'])) { ?>
            <div class="alert alert-<?= $_SESSION['alert']['type']; ?>" role="alert">
            <?php
            echo $_SESSION['alert']['message']; ?>
            </div>
        <?php } ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><?= HOME; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                        ?>
                    <li class="nav-item">
                    <a class="nav-link" href="/deconnexion.php">Déconnexion</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Compte
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/compte.php">Compte</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </li>
                    <?php
                    } else {
                        ?>

                    <li class="nav-item">
                    <a class="nav-link" href="/login.php"><?= LOGIN; ?></a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Login modal</a>
                    </li>

                    <li>
            
                        <select onchange="if (this.value) window.location.href=this.value">
                        <option>Selectionner votre langue</option><?php
                        for ($i = 0; $i < count($languages); ++$i) {
                            echo '<option value="?lang='.$languages[$i].'">'.$languages[$i].'</option>';
                        } ?>
                        </select>
                    </li>




                    <?php
                    }?>
                </ul>
            </div>
        </nav>

        <?= $body; ?>

        <footer>

        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>