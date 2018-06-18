<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jorge Partal || Web Developer - CakePhp Lover</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="ico/favicon.ico">

    <?= $this->fetch('meta') ?>



    <?= $this->element('front_css') ?>
    <?= $this->fetch('css') ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-69284021-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-69284021-1');
    </script>


    
    <?= $this->fetch('script') ?>
 
</head>

<body>
    
    <?= $this->element('front_header') ?>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?= $this->element('front_footer') ?>
    <?= $this->element('front_js') ?>

</body>
</html>