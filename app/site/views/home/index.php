<body>
    <div class="grid-container">
            <div class="aside-menu">
                <div class="aside-header">
                    <h1 class="anime">Little Thoughts</h1>
                    <div class="img anime"><img src="<?=URL?>assets/img/logoMenor.png" alt="Logo"></div>
                </div>
                <div class="aside-mobile">
                        <div class="img anime"><img src="<?=URL?>assets/img/logoMenor.png" alt="Logo"></div>
                    </div> 
                <div class="lista">
                    <ul class="ul-desktop">
                        <li><a href="#"><i class="far fa-clock"></i> Recentes</a></li>
                        <li>
                            <input type="checkbox" name="" id="menu-sanfona">
                            <div class="trigger-sanfona">
                                
                            <label for="menu-sanfona">
                                    <span><i class="far fa-calendar-alt"></i> Mês</span>
                                    
                            </label>
                                    <ul class="ul-sanfona">
                                    <a href="#"><li>Janeiro</li></a>
                                    <a href="#"><li>Fevereiro</li></a>
                                    <a href="#"><li>Março</li></a>
                                    <a href="#"><li>Abril</li></a>
                                    <a href="#"><li>Maio</li></a>
                                    <a href="#"><li>Junho</li></a>
                                    <a href="#"><li>Julho</li></a>
                                    <a href="#"><li>Agosto</li></a>
                                    <a href="#"><li>Setembro</li></a>
                                    <a href="#"><li>Outubro</li></a>
                                    <a href="#"><li>Novembro</li></a>
                                    <a href="#"><li>Dezembro</li></a>
                                </ul>
                            
                            </div>
                        <li><a href="<?=URL.'login/logout'?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        <li><a href="#topo" id="retorno-topo"><i class="far fa-arrow-alt-circle-up fa-2x"></i></a></li>
                    </ul>
                    <ul class="ul-mobile">
                        <li><a href="#"><i class="far fa-clock"></i></a></li>
                        <li><a href="#"><i class="far fa-calendar-alt"></i></a></li>
                        <li><a href="#"><i class="fas fa-sign-out-alt"></i></a></li>
                    </ul>
                </div>
            </div>
        <div class="text-area" id="#topo">
            <h1>Divida conosco um pensamento!</h1>
            <form id='form-thoughts' method="post" action="addHistoryAjax">
                <textarea id="editor1" name="editor1"></textarea>
                <input type="submit" value="Publicar">
            </form>
        </div>
        <div class="content">
            <h1 id="remember-historys">Relembre algumas coisas <i class="fas fa-smile-wink fa-xs"></i></h1>
            <div id="teste" class="">
                <?php 
                    foreach($this->dados["historys"] as $history){
                        echo '<div class="thoughts">';
                        echo $history["codigo_fonte"];
                        echo '</div>';
                    }
                ?>
            </div>
            <!--div class="thoughts">
                    <p><img alt="" src="https://imagens.canaltech.com.br/267241.511763-simulacao-de-buraco-negro.gif" style="height:96px; width:167px" /> teste</p>

                    <p>&nbsp;</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>
            </div>
                <div class="thoughts">                       
                        <p><img alt="" src="https://imagens.canaltech.com.br/267241.511763-simulacao-de-buraco-negro.gif" style="height:600px; width:1040px" /></p>

                        <p>&nbsp;</p>
                        
                        <p>&nbsp;</p>
                        
                        <p>&nbsp;</p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>
                </div-->
        </div>
      </div>
      <script src="https://kit.fontawesome.com/94ead6391a.js" crossorigin="anonymous"></script>
      <script type="text/javascript">
        window.onload = function()  {
            CKEDITOR.replace( 'editor1' );
        };
      </script>