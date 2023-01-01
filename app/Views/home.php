<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="<?= base_url()?>/js/particlesjs/particles.js-2.0.0/particles.js"></script>
    <script src="<?= base_url()?>/js/header.js" defer></script>
    <script src="<?= base_url()?>/js/card.js" defer></script>
</head>

<body>
    <header>
        <div class="menu-deroulant">
            <ul id="menu">
                <li id="first-border">Accueil</li>
                <li>Projets</li>
                <li>Compétences</li>
                <li>Etudes</li>
            </ul>
        </div>
        <div class="menu-menu-deroulant">
            <div class="menu-button">
                <img src="<?= base_url() ?>/img/icons8-horizontal-line-30white.png" alt="" id="top" class="menubar">
                <img src="<?= base_url() ?>/img/icons8-horizontal-line-30white.png" alt="" id="bottom" class="menubar">
            </div>
        </div>
    </header>

    <div id="main-header">
        <h1>Guillaume.</h1>
        <h2>étudiant en</br>
        développement</h2>
    </div>

    <div id="particle-container"></div>
    
    <div class="slope"></div>
    
    <div class="cards-container">
        <div class="card">
            <img src="<?= base_url() ?>/img/chococo_main.png" alt="">
            <p>lorem ipsum</p>
        </div>
    </div>
    
    <div class="cards-container">
        <div class="card">
            <img src="<?= base_url() ?>/img/chococo_main.png" alt="">
            <p>lorem ipsum</p>
        </div>
    </div>
    
    <div class="cards-container">
        <div class="card">
            <img src="<?= base_url() ?>/img/chococo_main.png" alt="">
            <p>lorem ipsum</p>
        </div>
    </div>
    
    <div class="cards-container">
        <div class="card">
            <img src="<?= base_url() ?>/img/chococo_main.png" alt="">
            <p>lorem ipsum</p>
        </div>
    </div>
    
    
    <script>
        particlesJS.load('particle-container', '<?= base_url()?>/js/particlesjs/particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
        </script>
    
</body>

</html>