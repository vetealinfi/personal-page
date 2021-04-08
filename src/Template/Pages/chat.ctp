

        <div id="chatContainer" style="height:200px" class=""></div>





<script type="text/javascript">
    

    </script>
<script type="text/javascript">




    window._genesys = {
        widgets: {
          main: {
            theme: "light",
            lang: "es",
            i18n: "https://www.cambiatuneumatico.com/js/widgets-es.i18n.json"
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


    function getAdvancedConfig() {
      return {
        "form": {
          "autoSubmit": false,
          "firstname": "",
          "lastname": "",
          "email": "",
          "subject": ""
        },
        "formJSON": {
          "wrapper": "<table></table>",
          "inputs": [
            {
              "id": "cx_webchat_form_firstname",
              "name": "firstname",
              "maxlength": "100",
              "placeholder": "Required",
              "label": "Nombre"
            },
            {
              "id": "cx_webchat_form_email",
              "name": "email",
              "maxlength": "100",
              "placeholder": "Optional",
              "label": "Correo"
            },
            {
              "id": "cx_webchat_form_subject",
              "name": "subject",
              "maxlength": "100",
              "placeholder": "Optional",
              "label": "Asunto"
            },
            {
              "id": "cx_webchat_form_measure",
              "name": "measure",
              "maxlength": "100",
              "placeholder": "Required",
              "label": "Medida Neumatico"
            },
          ]
        }
      };
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

        customPlugin.command('WebChat.open', getAdvancedConfig());
    }
    
</script>
