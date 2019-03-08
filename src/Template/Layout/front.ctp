<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php
            if(isset($title)){
                echo $title;
            }else{
                echo 'Jorge Partal || Cakephp Web Developer';
            }
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <?php
        if(isset($description)){
            echo $this->Html->meta('description',$description);
        }else{
            echo $this->Html->meta('description','Soy un Web Developer, entusiasta por las tecnologias web y amante de CakePhp. Contáctame si necesitas realizar un proyecyo desde una pagina simple, hasta sistemas complejos como un ecommerce');
        }
    ?>
    <meta content="jorgepartal" name="author" />

    <meta property="og:type" content="website"/>
    <?php
        if(isset($title)){
            echo '<meta property="og:title" content="'.$title.'" />';
        }else{
            echo '<meta property="og:title" content="Jorge Partal || Cakephp Web Developer" />';
        }
    ?>

    <?php
        if(isset($description)){
            echo '<meta property="og:description" content="'.$description.'" />';
        }else{
            echo '<meta property="og:description" content="Soy un Web Developer, entusiasta por las tecnologias web y amante de CakePhp. Contáctame si necesitas realizar un proyecyo desde una pagina simple, hasta sistemas complejos como un ecommerce" />';
        }
    ?>

    <?php
        if(isset($meta_img)){
            echo '<meta property="og:image" content="'.$this->Url->build('/template_front/'.$meta_img, true).'" />';
        }else{
            echo '<meta property="og:image" content="'.$this->Url->build('/template_front/jpg/img-face2.jpg', true).'" />';
        }
    ?>

    <?php
        echo '<meta property="og:url" content="'.$this->Url->build(null, true).'" />';
    ?>



    <?= $this->fetch('meta') ?>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="<?= $this->Url->build('/template_front/', true) ?>ico/favicon.ico">


    <?php  //echo $this->AssetCompress->css('allcss.css'); ?>
    <?= $this->element('front_css') ?>
    <?php  //echo $this->AssetCompress->css('allcss2.css'); ?>
    

    <!-- Global site tag (gtag.js) - Google Analytics ss-->
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