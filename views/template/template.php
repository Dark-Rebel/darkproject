<html>
    <header>
        <title>Dark Project - <?php echo ucfirst($viewName); ?></title>
         <link rel="stylesheet" type="text/css" href="/assets/css/grepo.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <meta charset="UTF-8">
    </header>
    <body>
        <div class="top">
            <ul>
                <li><a href="/home">Inicio</a></li>
                <li><a href="/contact">Contato</a></li>
                <li><a href="/about">Sobre</a></li>
            </ul>
        </div>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </body>
</html>