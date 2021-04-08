<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
             chat ctn
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000000"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
  

        <script src="<?= $this->Url->build('/template_front/') ?>js/jquery-2.2.4.min.js"></script> 

        <script
              src="https://apps.mypurecloud.com/widgets/9.0/cxbus.min.js"
              onload="javascript:CXBus.configure({
                    debug:false,
                    pluginsPath:'https://apps.mypurecloud.com/widgets/9.0/plugins/'
              });
              CXBus.loadPlugin('widgets-core');">
        </script>

     
    </head>

    <body>

        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>



    </body>
</html>