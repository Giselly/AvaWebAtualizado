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
            <li><a <?php if ($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados">Alterar dados</a></li>
            <li><a <?php if ($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha">Alterar senha</a></li>
            <?php //if($dadosUser[0]['primeiro_login'] == 1){?>
            <!--<li id="tutorial"><a>Tutorial</a></li>
                    <script>
                    $(document).ready(function () {
                        alert('eaeaeeaeeeeee');
                    $('#tutorial').click(function(){
                        $("#tutorial").attr('class', 'selecionado');
                        $('#audio').attr('src', 'imagens/bemvindo.mp3');
                        $('#audio').attr('autoplay', 'autoplay');
                    });
                });
                    </script>
                    <audio id="audio" width='0' height='0'></audio>-->
            <?php 
            /*$dados = array(
            "id" => $idUsuario,   
            "primeiro_login" => 2
            );
            $user->Editar($dados);
            
            }*/?>
            
            
                <?php
            if ($professor) {
                ?>

                <li><a <?php if ($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios">Cadastro de usuários</a></li>
                <li><a <?php if ($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao">Resumos</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</aside>