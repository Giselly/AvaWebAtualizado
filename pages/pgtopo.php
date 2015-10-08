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
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/jquery.mask.js" type="text/javascript"></script>
        <script src="js/mascaras.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min_1.js"></script>
        <script type="text/javascript" src="js/topo.js"></script>
        <script type="text/javascript" src="js/datepicker-pt-br.js"></script>
        <?php echo $arqJS; ?>
        <link rel="shortcut icon" href="imagens/icon.ico" type="image/gif">
    </head>
    <body>
    	<!--<input type="button" class="voltarTopo" onclick="$j('html,body').animate({scrollTop: $j('#voltarTopo').offset().top}, 2000);" value="Voltar ao topo" >-->
        
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
            <div id="menuUsuario">
                <span id="boasVindas">Olá, <?php echo $apelido; ?>  |  </span>Comunicação Digital
                <a href="logout" id="logout">Sair</a>
            </div>
            <a href="logout" id="logout2">Sair</a>
        </header>
        	
        <section id="menuSistema">
            <div id="separador">
            </div>
            <ul>
                <li><a href="treinamento">Treinamento</a></li>
                <li><a href="cronogramaDoCurso">Cronograma do curso</a></li>
                <?php
                    if(!$professor){
                        echo '<li><a href="notificacoes">Notificações</a></li>';
                    }
                ?>
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
            <p><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider">Alterar dados</a></p><br>
            <p><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider">Alterar senha</a></p><br>
            <p><a <?php if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios"  id="menu_slider">Cadastro de usuários</a></p><br>
            <p><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider">Resumos</a></p><br>
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
            <p><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados" id="menu_slider">Alterar dados</a></p><br>
            <p><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha" id="menu_slider">Alterar senha</a></p><br>
            <p><a <?php if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios"  id="menu_slider">Cadastro de usuários</a></p><br>
            <p><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao"  id="menu_slider">Resumos</a></p><br>
            <div id="tcns">
                <br>
                <p><a href="treinamento" id="menu_slider">Treinamento</a></p><br>
                <p><a href="cronogramaDoCurso" id="menu_slider">Cronograma do curso</a></p><br>                
                <?php
                    if(!$professor){
                        echo '<li><a href="notificacoes" id="menu_slider">Notificações</a></li>';
                    }
                ?>
                <p><a href="logout" id="menu_slider_logout">Sair</a></p><br>
            </div>
        </section>
        <div id="mascara"></div>

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
                    });   
                 });
             </script>
        <!--JAVA SCRIPT Menu Slider - MOVEL SCREEN--> 
            <script>
                $(document).ready(function(){
                   $("#nav-slide-movel").hide(); 

                   $("#nav-btn-movel").click(function(){
                       $("#nav-slide-movel").slideToggle("fast");
                       $("#nav-slide-medium").css({"display":"none"});
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
                });
            });
        </script>
        
       
        
        
        