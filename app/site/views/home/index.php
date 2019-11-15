<body>

    <div class="loading efeito-flutuante" id="loader">
            <img src="<?=URL?>assets/img/bubble3.png" id="um">
            <img src="<?=URL?>assets/img/bubble2.png" id="dois">
            <img src="<?=URL?>assets/img/bubble1.png" id="tres">
    </div>

<main id="myDiv" style="display: none;">
                <div id="modal">
                        <a href="#" class="exit">X</a>
                        <div class="copy">
                            <ul class="ul-modal">
                                <a href="#"><li class="first">Janeiro</li></a>
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
                </div>
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
                        <li><a href="#content"><i class="far fa-clock"></i> Recentes</a></li>
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
                        <li><a href="#topo" class="top-button" id="retorno-topo"><i class="far fa-arrow-alt-circle-up fa-2x"></i></a></li>
                    </ul>

                    <!--MOBILE-->
                    <ul class="ul-mobile">
                        <li><a href="#content"><i class="far fa-clock"></i></a></li>
                        <li><a href="#modal"><i class="far fa-calendar-alt"></i></a></li>
                        <li><a href="<?=URL.'login/logout'?>"><i class="fas fa-sign-out-alt"></i></a></li>
                    </ul>
                    <!--/MOBILE-->
                </div>
            </div>
        <div class="text-area" id="topo">
            <h1>Divida conosco um pensamento!</h1>
            <form id='form-thoughts' method="post" action="addHistoryAjax">
                <textarea id="editor1" name="editor1"></textarea>
                <input type="submit" value="Publicar">
            </form>
        </div>
        <div class="content" id="content">
            <h1 id="remember-historys">Relembre algumas coisas <i class="fas fa-smile-wink fa-xs"></i></h1>
            <div id="teste" class="">
                <?php 
                    foreach($this->dados["historys"] as $history){
                        echo '<div class="thoughts readmore">';
                        echo '<div class="excluir"><i class="fas fa-trash"></i></div>';
                        echo $history["codigo_fonte"];
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
      </div>
</main>
      <script src="https://kit.fontawesome.com/94ead6391a.js" crossorigin="anonymous"></script>
      <script type="text/javascript">
        window.onload = function()  {
            CKEDITOR.replace( 'editor1' );
        };
      </script>