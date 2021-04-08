

        <div id="chatContainer" style="height:200px" class=""></div>





<script type="text/javascript">
    

    </script>
<script type="text/javascript">




    window._genesys = {
        widgets: {
          main: {
            theme: "light",
            lang: "es",
            i18n: "<?= $this->Url->build('/js/', true) ?>widgets-es.i18n.json"
          },
          webchat: {
            transport: {
              type: "purecloud-v2-sockets",
              dataURL: "https://api.mypurecloud.com",
              deploymentKey: "7177325f-223a-43d4-8993-b22c57a9c59c",
              orgGuid: "67304aca-b07c-445e-b400-bae3a2c4311b",
              interactionData: {
                routing: {
                  targetType: "QUEUE",
                  targetAddress: "Chattest",
                  priority:2
                }
              }
            },
            emojis: true
          },
          chatButton: {
            enabled: true
          }
        }
      }




    $(document).ready(function() {  
        cargachat();
    
    }); 
    function cargachat(){


        const customPlugin = CXBus.registerPlugin('Custom');

        customPlugin.subscribe('WebChatService.started', function (e) {
            console.log('Chat started', e);
        });

        customPlugin.subscribe('WebChatService.ended', function (e) {
            console.log('Chat ended', e);
        }); 

        customPlugin.command('WebChat.open');
    }
    
</script>
