
<aside id="paginas">
		
        <div id="fotoPerfilMenu">
        <form class="" id="fotoMenuLateral" name="fotoMenuLateral" method="POST" enctype="multipart/form-data">
           <input id="editarMenu" type="button" value="editar"/>
           <img src="imagens/perfil/<?php echo $foto; ?>" alt="" id="fotoAt" />

           <input type="file" name="foto" id="fotoMenu" accept="image/*" />
           <input type="submit" class="alterar" name="editar" id="editarFoto" value="Salvar">
        </form>
        </div>
        
    <!--<img id="fotoUsuario" src="imagens/perfil/<?php //echo $foto; ?>" alt="" />-->
    <nav id="menuLateral">
        <ul>
            <li><a <?php if ($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados/editar"><img src="imagens/icons_navSlider/alterar_dados.png"><p class="l_menu">Alterar dados</p></a></li>
            <li><a <?php if ($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href=<?php echo "alterarSenha/{$idUsuario}";?>><img src="imagens/icons_navSlider/alterar_senha.png"><p class="l_menu">Alterar senha</p></a></li>         
            
                <?php
                if ($professor) {
                ?>

                <li><a <?php if ($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios"><img src="imagens/icons_navSlider/cadastro_usuario.png"><p class="l_menu">Cadastro de usuários</p></a></li>
                <li><a <?php  if($url->getURL(0) == "resumosCorrecao") echo 'class="selecionado"';?> href="resumosCorrecao"  id="menu_slider" class="resumos"><img src="imagens/icons_navSlider/resumos.png"><p class="l_menu">Resumos</p></a></li>
		<?php
		} ?>
        </ul>
    </nav>
</aside>