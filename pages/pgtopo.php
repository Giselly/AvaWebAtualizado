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
            <div id="logo"> <a href="treinamento/1/conteudo"><img src="imagens/logo.gif" alt="" title="Voltar a Página Inicial"></a>
            </div>
          	<!--logo Movel Screen-->
            <div id="logo_res"> <a href="treinamento/1/conteudo"><img src="imagens/logo3.gif" alt="" title="Voltar a Página Inicial"></a>
            </div>
            <!--logo Medium Scren-->
            <div id="logo_res2"> <a href="treinamento/1/conteudo"><img src="imagens/logo2.gif" alt="" title="Voltar a Página Inicial"></a>
            </div>
            <!--logo Medium Movel Scren-->
            <div id="logo_res3_1"> <a href="treinamento/1/conteudo"><img src="imagens/logo3_1.png" alt="" title="Voltar a Página Inicial"></a>
            </div>
            <!--logo Super Movel Scren-->
            <div id="logo_res3"> <a href="treinamento/1/conteudo"><img src="imagens/logo4.gif" alt="" title="Voltar a Página Inicial"></a>
            </div>
            <!--Button Back_To_Top Super Movel Screen-->
            <div id="voltarTopo"></div>
             
            <div id="tituloSistema">
                Ambiente Virtual de Aprendizagem
            </div>
            
            <?php if(!$professor) {?>
            <div id="notificacao" style="display: inline-block; position: relative; float: right; margin: 2px 29px 2px 0px;">
                <?php
                if(isset($visualizar) && $visualizar == 0){
                ?>
                <a href="notificacoes" class="tooltip-bottom" data-tooltip="Você não possui notificações para visualizar!"><img id="notification" src="imagens/notificacao.png" style="width: 40px; height: 40px;"></a>
                <?php } else {?>
                <a href="notificacoes" class="tooltip-bottom" data-tooltip="Você possui notificações! Clique aqui para visualizá-las!"><img id="notification" src="imagens/notificacao.png" style="width: 40px; height: 40px;"></a>      
                 <img src="imagens/balaoVermelho.png" style="display: inline-block; position: relative; left: -10px; top: -17px;">

                 <!--<embed src='imagens/notificação.mp3' width='0' height='0'>-->               
                 <?php

                 if($visualizar >= 10){?>
                 <h1 style="display: inline-block; position: relative; width: 15px; height: 15px; left: -32px; top: -23px; color: white; font-size: 8pt;"><?php echo $visualizar;?></h1>
                <?php }  else {?>
                 <h1 style="display: inline-block; position: relative; width: 15px; height: 15px; left: -30px; top: -22px; color: white; font-size: 10pt;"><?php echo $visualizar;?></h1>
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
                <li><a href="treinamento">Treinamento</a></li>
                <li><a href="cronogramaDoCurso">Cronograma do curso</a></li>
            </ul>
        </section>   
        <!--MENU SCREEN MEDIUM-->
        <!--Button Menu-->
        <a href="#" rel="modal">
            <nav id="nav-btn-medium">
                <div></div>
                <div></div>
                <div></div>
            </nav>
        </a>
        <!--Menu Slider SCREEN MEDIUM-->
        <section id="nav-slide-medium">
            <br/>
            <p><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider" class="alterar_dados">Alterar dados</a></p><br>
            <p><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider" class="alterar_senha">Alterar senha</a></p><br>
            <p><a <?php if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios"  id="menu_slider" class="cadastro_de_usuarios">Cadastro de usuários</a></p><br>
            <p><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider" class="resumos">Resumos</a></p><br>
            <p><a href="logout" id="menu_slider_logout">Sair</a></p><br>
        </section>
        <!--MENU SCREEN MÓVEL-->
        <!--Button Menu-->
        <a href="#" rel="modal">
            <nav id="nav-btn-movel">
                <div></div>
                <div></div>
                <div></div>
            </nav>
        </a>
        
        <!--Menu Slider SCREEN MOVEL-->
        <section id="nav-slide-movel">
            <br/>
            <p><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider" class="alterar_dados">Alterar dados</a></p><br>
            <p><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider" class="alterar_senha">Alterar senha</a></p><br>
            <p><a <?php if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios"  id="menu_slider" class="cadastro">Cadastro de usuários</a></p><br>
            <p><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider" class="resumos">Resumos</a></p><br>
        </section>
        
        <!--Menu Slider SCREEN SUPER MOVEL-->
        <section id="nav-slide-super-movel">
            <br/>
            <p><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider" class="alterar_dados">Alterar dados</a></p><br>
            <p><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider" class="alterar_senha">Alterar senha</a></p><br>
            <p><a <?php if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios"  id="menu_slider" class="cadastro">Cadastro de usuários</a></p><br>
            <p><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider" class="resumos">Resumos</a></p><br>
            <div id="tcns">
                <br>
                <p><a href="treinamento" id="menu_slider" class="treinamento">Treinamento</a></p><br>
                <p><a href="cronogramaDoCurso" id="menu_slider" class="cronograma_do_curso">Cronograma do curso</a></p><br>                
               
                <p><a href="logout" id="menu_slider_logout">Sair</a></p><br>
            </div>
        </section>
                
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
    
        <!--JAVA SCRIPT Menu de navegação-->
          <script>
              $(document).ready(function(){

                  if(screen.width < 675 && screen.width > 994){
                      $("#nav-slide-medium").css({"display":"none"});
                  } else if(screen.width < 370 && screen.width > 674){
                      $("#nav-slide-movel").css({"display":"none"});
                  }
              });
         	</script>
          
        	<!--JAVA SCRIPT Menu Slider - MEDIUM SCREEN-->
            <script>
                 $(document).ready(function(){
                    $("#nav-slide-medium").hide(); 
          
                    $("#nav-btn-medium").click(function(){
                        $("#nav-slide-medium").slideToggle("fast");
                        $("#nav-slide-movel").css({"display":"none"});
						$("#nav-slide-super-movel").css({"display":"none"});
                    });   
                 });
            </script>
            
        	<!--JAVA SCRIPT Menu Slider - SUPER MOVEL SCREEN--> 
            <script>
                $(document).ready(function(){
                   $("#nav-slide-super-movel").hide(); 

                   $("#nav-btn-movel").click(function(){
                       $("#nav-slide-super-movel").slideToggle("fast");
                       $("#nav-slide-medium").css({"display":"none"});
					   $("#nav-slide-movel").css({"display":"none"});
                    });
                });
            </script>
            
        <!-- Mascara da página -->
        <script>
            $(document).ready(function(){
             $("a[rel=modal]").click( function(ev){
                ev.preventDefault();

                var id = $(this).attr("href");

                var alturaTela = $(document).height();

                //colocando o fundo preto
                $('#mascara').css({'height':alturaTela});
                $('#mascara').fadeToggle(); 
                $('#mascara').fadeTo("fast",0.8);

                var top = ($(window).height() / 2) - ( $(id).height() / 2 );

                $(id).css({'top':top});
                $(id).show();   
            });
						
                $("#mascara").click( function(){
                    $(this).hide();
                    $("#nav-slide-medium").slideUp();
                    $("#nav-slide-movel").slideUp();
					$("#nav-slide-super-movel").slideUp();
					$("#nav-slide-movel-right").slideUp();
                });
            });
        </script>