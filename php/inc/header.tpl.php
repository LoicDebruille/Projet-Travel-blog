<!DOCTYPE html>
<html>

<head>
    <meta charslet="UTF-8">
    <title>Travel Blog</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrapper">
        <!-- emmet: header>h1+p+nav>ul>li*3>a -->
        <header class="left <?= $classLeft ?? '' ?>">
            <?php
        //* opérateur coalescent :
        /*
        if (isset($classLeft)) {
          echo $classLeft;
        }
        else {
          echo '';
        }
        */
      ?>
            <h1 class="left__title">Trip to the World</h1>
            <div class="left__paragraph">
                <h2 class="left__subtitle"><strong class="left__subtitle-strong">Road Trip</strong> from our familly
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis
                    porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
                </p>
            </div>
            <nav>
                <ul class="left__nav">
                    <?php
              $navLinks = [
                'Site map' => './plan_de_site.php',
                'Legal mention' => './mentions_legales.php',
                'Contact' => './contact.php'
              ];

              foreach ($navLinks as $labelLink => $urlLink):
            ?>

                    <li class="left__nav-item">
                        <a href="<?= $urlLink ?>" class="left__nav-link">
                            <?= $labelLink ?>
                        </a>
                    </li>

                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>
        <main class="right">