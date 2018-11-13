    <!-- hero area start -->
    <div class="hero-area hero-three">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 offset-xl-1">
                    <div class="hero-content h3-content">
                        <h3>Hola Mundo,</h3>
                        <h2>Soy Jorge
                            <span>Partal</span>
                        </h2>
                        <p>Soy un Web Developer, entusiasta por las tecnologias web y amante de <b>CakePhp</b>.</p>
                        <ul class="hr-social">
                            <li>
                                <a href="https://www.linkedin.com/in/jorgepartal">Linkedin</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/Desarrollador-Web-239188126233108/">Facebook</a>
                            </li>
                            <li>
                                <a href="mailto:jorgepartal@gmail.com">jorgepartal@gmail.com</a>
                            </li>
                        </ul>
                        <div class="download-cv">
                            <a onclick="bajocv();" href="<?= $this->Url->build('/files/curiculum-2018.pdf', true) ?>" target="_blank" aria-haspopup="true" role="button">Descargar CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area edddnd -->

    <script type="text/javascript">
        function bajocv(){

            gtag('event', 'CV', {
              'event_category' : 'Descargas',
              'event_label' : 'DOC',
              'value': 1
            });
        }

    </script>