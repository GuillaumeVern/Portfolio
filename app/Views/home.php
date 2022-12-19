<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="<?= base_url() ?>/particlesjs/particles.js-2.0.0/particles.js">
    </script>
</head>

<body>
    <header>
        <div class="menu-deroulant">
            <ul id="menu">
                <li>Accueil</li>
                <li>Projets</li>
                <li>Compétences</li>
                <li>Etudes</li>
            </ul>
        </div>
        <div class="menu-menu-deroulant">
            <div class="menu-button">+</div>
        </div>
    </header>


    <div id="particle-container"></div>


    <script>
        particlesJS.load('particle-container', '<?= base_url() ?>/particlesjs/particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
    </script>
    <script>
        var menu = document.querySelector(".menu-deroulant");
        var buttonMenu = document.querySelector(".menu-menu-deroulant");

        buttonMenu.addEventListener("click", function() {
            menu.classList.toggle("active");
        })
    </script>
</body>

</html>