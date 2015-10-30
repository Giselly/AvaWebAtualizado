<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo RAIZ; ?>" target="_self">
        <title>Ambiente Virtual de Aprendizagem</title>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <link rel='stylesheet' type='text/css' href='css/topo.css'>
        <link rel='stylesheet' type='text/css' href='css/lightBox.css'>
        <link rel='stylesheet' type='text/css' href='css/tooltip.css'>       
         <?php echo $arqCSS; ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/jquery.mask.js" type="text/javascript"></script>
        <script src="js/mascaras.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min_1.js"></script>
        <script type="text/javascript" src="js/topo.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
        <script type="text/javascript" src="js/cadastroDeUsuarios.js"></script>
        <script src="js/easyTooltip.js" type="text/javascript"></script>        
        <script type="text/javascript" src="js/datepicker-pt-br.js"></script>
        <?php echo $arqJS; ?>
        <link rel="shortcut icon" href="imagens/icon.ico" type="image/gif">
    </head>
    <body>
        
        <input type="hidden" value="<?php echo RAIZ; ?>" id="raiz" />
        <header id="principal">
            <!--logo Full Scren-->
            <div id="logo"> <a href="treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco"><img src="imagens/logo.gif" alt="" title="Voltar a Página Inicial" style="z-index:9999"></a>
            </div>
          	<!--logo Movel Screen-->
            <div id="logo_res"> <a href="treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco"><img src="imagens/logo3.gif" alt="" title="Voltar a Página Inicial" style="z-index:9999"></a>
            </div>
            <!--logo Medium Scren-->
            <div id="logo_res2"> <a href="treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco"><img src="imagens/logo2.gif" alt="" title="Voltar a Página Inicial" style="z-index:9999"></a>
            </div>
            <!--logo Medium Movel Scren-->
            <div id="logo_res3_1"> <a href="treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco"><img src="imagens/logo3_1.jpg" alt="" title="Voltar a Página Inicial" style="z-index:9999"></a>
            </div>
            <!--logo Super Movel Scren-->
            <div id="logo_res3"> <a href="treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco"><img src="imagens/logo4.jpg" alt="" title="Voltar a Página Inicial" style="z-index:9999"></a>
            </div>
            <!--Button Back_To_Top Super Movel Screen-->
            <div id="voltarTopo"></div>
             
            <div id="tituloSistema">
                Ambiente Virtual de Aprendizagem
            </div>
            
            <div id="tituloSistema-supermovel">
                Ambiente Virtual de Aprendizagem
            </div>
            
            <?php if(!$professor) {?>
            
            	 <!--Notification - FULL SCREEN-->
                 <div id="notificacao" style="position: relative; float: right; margin: 2px 25px 2px 0px;">
                    <?php
                    if(isset($visualizar) && $visualizar == 0){
                    ?>
                    <a href="notificacoes" class="tooltip-bottom" data-tooltip="Você não possui notificações para visualizar!"><img id="notification" src="imagens/notificacao.png" style="width: 40px; height: 40px;"></a>
                    <?php } else {?>
                    <a href="notificacoes" class="tooltip-bottom" data-tooltip="Você possui notificações! Clique aqui para visualizá-las!"><img id="notification" src="imagens/notificacao.png" style="width: 40px; height: 40px;"></a>      
                     <img src="imagens/balaoVermelho.png" style="display: inline-block; position: relative; left: -10px; top: -17px;">
                     <?php
                     if($visualizar >= 10){?>
                     <h1 style="display: inline-block; position: relative; width: 15px; height: 15px; left: -32px; top: -23px; color: white; font-size: 8pt;"><?php echo $visualizar;?></h1>
                    <?php }  else {?>
                     <h1 style="display: inline-block; position: relative; width: 15px; height: 15px; left: -30px; top: -22px; color: white; font-size: 10pt;"><?php echo $visualizar;?></h1>
                    <?php } }?>
                </div>
            
                 <!--Notification - MEDIUM SCREEN /MEDIUM MOVEL SCREEN-->
                 <div id="notificacao-medium">
                    <?php
                    if(isset($visualizar) && $visualizar == 0){
                    ?>
                    <a href="notificacoes" class="tooltip-bottom" data-tooltip="Você não possui notificações para visualizar!"><img id="notification" src="imagens/notificacao.png" style="width: 40px; height: 40px;"></a>
                    <?php } else {?>
                    <a href="notificacoes" class="tooltip-bottom" data-tooltip="Você possui notificações! Clique aqui para visualizá-las!"><img id="notification" src="imagens/notificacao.png" style="width: 40px; height: 40px;"></a>      
                     <img src="imagens/balaoVermelho.png" style="display: inline-block; position: relative; left: -10px; top: -17px;">
    
                     <?php
                     if($visualizar >= 10){?>
                     <h1 style="display: inline-block; position: relative; width: 21px; height: 15px; left: -36px; top: -23px; color: white; font-size: 8pt;"><?php echo $visualizar;?></h1>
                    <?php }  else {?>
                     <h1 style="display: inline-block; position: relative; width: 21px; height: 15px; left: -36px; top: -23px; color: white; font-size: 10pt;"><?php echo $visualizar;?></h1>
                    <?php } }?>
                </div>
                
                <!--Notification - MOVEL SCREEN-->
                <div id="notificacao-movel" style="position: absolute; float: right;  right:16px; top:15px;">
                    <?php
                    if(isset($visualizar) && $visualizar == 0){
                    ?>
                    <a href="notificacoes" class="tooltip-bottom" data-tooltip="Você não possui notificações para visualizar!"><img id="notification" src="imagens/notificacao-movel.png" style="width: 40px; height: 40px;"></a>
                    <?php } else {?>
                    <a href="notificacoes" class="tooltip-bottom" data-tooltip="Você possui notificações! Clique aqui para visualizá-las!"><img id="notification-movel" src="imagens/notificacao-movel.png" style="width: 40px; height: 40px;"></a>      
                     <img src="imagens/balaoVermelho-movel.png" style="display: inline-block; position: relative; left: -10px; top: -17px;">
    
                     <?php
                     if($visualizar >= 10){?>
                     <h1 style="display: inline-block; position: relative; width: 15px; height: 15px; left: -33px; top: -23px; color: white; font-size: 8pt;"><?php echo $visualizar;?></h1>
                    <?php }  else {?>
                     <h1 style="display: inline-block; position: relative; width: 15px; height: 15px; left: -33px; top: -22px; color: white; font-size: 10pt;"><?php echo $visualizar;?></h1>
                    <?php } } }?>
                </div>
                
            <div id="menuUsuario">
                <span id="boasVindas">Olá, <?php echo $apelido; ?>  |  </span>Comunicação Digital
                <a href="logout" id="logout">Sair</a>
                <!--<a href="logout" id="logout2">Sair</a>-->
            </div>
        </header>
        	
        <section id="menuSistema">
            <div id="separador">
            </div>
            <ul>
                <li><a href="treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco">Treinamento</a></li>
                <li><a href="cronogramaDoCurso">Cronograma do curso</a></li>
            </ul>
        </section>
        
        <!--Button Menu - SCREEN MEDIUM / MOVEL-->
        <a href="#" rel="modal">
            <span id="nav-btn-medium" class="nav-btn-medium">
                <div></div>
                <div></div>
                <div></div>
            </span>
        </a>
        
        <!--Button Menu - SCREEN SUPER MOVEL-->
        <a href="#" rel="modal">
            <span id="nav-btn-movel" class="nav-btn-movel">
                <div></div>
                <div></div>
                <div></div>
            </span>
         </a>
         
        <!--Menu Slider SCREEN MOVEL-->
        <menu id="nav-slide-medium">
        	<!--Foto do Perfil-->
            <div id="fotoPerfilMenu-medium" style="position:absolute; margin-left:30px; margin-top:0px;">
            	<form name="teste1" id="teste1" class="teste1" enctype="multipart/form-data">
                   <img src="imagens/perfil/<?php  echo $foto;  ?>" alt="" id="fotoAt-Medium" />
                </form>
            </div>
        
            <ul style="margin-top:210px;">
                <li><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider" class="alterar_dados">Alterar dados</a></li>
                <li><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider" class="alterar_senha">Alterar senha</a></li>
                <?php 
					 if($professor){
						 if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; echo '<li><a href="cadastroDeUsuarios" id="menu_slider" class="cadastro">Cadastro de usuários</a></li>';
					 }
				?>
                <li><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider" class="resumos">Resumos</a></li>
    
                <li><a href="logout" id="menu_slider_logout">Sair</a></li>
                </div>
            </ul>
        </menu>
         
         <!--Menu Slider SCREEN SUPER MOVEL-->
        <menu id="nav-slide-super-movel">
        <!--Foto do Perfil - MOVEL SCREEN-->
        <div id="fotoPerfilMenu-movel" style="position:absolute; margin-left:22px; margin-top:0px;">
        	<form name="teste2" id="teste2" class="teste2">
               <img src="imagens/perfil/<?php  echo $foto;  ?>" alt="" id="fotoAt-movel" />
            </form>
        </div>
        
            <ul style="margin-top:210px;">
                <li><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider" class="alterar_dados">Alterar dados</a></li>
                <li><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider" class="alterar_senha">Alterar senha</a></li>
                <?php 
					 if($professor){
						 if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; echo '<li><a href="cadastroDeUsuarios"  id="menu_slider" class="cadastro">Cadastro de usuários</a></li>';
					 }
				?>
                <li><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider" class="resumos">Resumos</a></li>
                
                <div id="tcns">
                    <li><a href="treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco" id="menu_slider" class="treinamento">Treinamento</a></p></li>
                <li><a href="cronogramaDoCurso" id="menu_slider" class="cronograma_do_curso">Cronograma do curso</a></li>  
                <?php
                	if(!$professor){
                    	if($url->getURL(0) == "notificacoes") echo "class='selecionado'"; echo '<li><a href="notificacoes" id="menu_slider" class="notificacoes">Notificações</a></li>';
                    }
                ?>
    
                <li><a href="logout" id="menu_slider_logout">Sair</a></li>
                </div>
            </ul>
        </menu>
                        
        <div id="mascara"></div> 
               
		<!--JAVASCRIPT Back_To_Top - MEDIUM, MOVEL, SUPER-MOVEL SCREEN-->
		<script>
			$(document).ready(function() {
				$("#voltarTopo").hide();
			
				$(window).scroll(function () {
			
				if ($(this).scrollTop() > 300) {
					$('#voltarTopo').fadeIn();
				} else {
					$('#voltarTopo').fadeOut();
				}
			});
			
			$('#voltarTopo').click(function() {
				$('body,html').animate({scrollTop:0},600);
			}); 
		    });
		</script>
          
            <!--JAVA SCRIPT Menu Slider - MOVEL SCREEN--> 
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.nav-btn-medium').on('click touchstart', function(e){
                            $('html').toggleClass('menu-active');
                            e.preventDefault();
                    });
                });
            </script>
            
        	<!--JAVA SCRIPT Menu Slider - SUPER MOVEL SCREEN--> 
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.nav-btn-movel').on('click touchstart', function(e){
                                $('html').toggleClass('menu-active');
                                e.preventDefault();
                        });
                    });
                </script>
                
            <!-- SHOW MASK -->
            <script>
                $(document).ready(function(){
                    $("a[rel=modal]").click( function(ev){
                       ev.preventDefault();
    
                       var id = $(this).attr("href");
    
                       var alturaTela = $(document).height();
    
                       //colocando o fundo preto
                       $('#mascara').css({'height':alturaTela});
                       $('#mascara').fadeToggle(); 
    
                       var top = ($(window).height() / 2) - ( $(id).height() / 2 );
    
                       $(id).css({'top':top});
                       $(id).show();  
                   });
                });
            </script>
            
            <!-- HIDE MASK --> 
              <script>
                $(document).ready(function(){
                   $('#mascara').click(function(){
                       $('#mascara').hide();
                       $('html').toggleClass('menu-active');
                   });
                });
            </script>
            
            