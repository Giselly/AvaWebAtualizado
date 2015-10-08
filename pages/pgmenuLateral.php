<aside id="paginas">
    <img id="fotoUsuario" src="imagens/perfil/<?php echo $foto; ?>" alt="" />
    <nav id="menuLateral">
        <ul>
            <li><a <?php if($url->getURL(0) == "alterarDados") echo "class='selecionado'"; ?>href="alterarDados">Alterar dados</a></li>
            <li><a <?php if($url->getURL(0) == "alterarSenha") echo "class='selecionado'"; ?>href="alterarSenha">Alterar senha</a></li>
            <?php
            if ($professor) {
                ?>
                <li><a <?php if($url->getURL(0) == "cadastroDeUsuarios") echo "class='selecionado'"; ?>href="cadastroDeUsuarios">Cadastro de usuários</a></li>
                <li><a <?php if($url->getURL(0) == "resumosCorrecao") echo "class='selecionado'"; ?>href="resumosCorrecao">Resumos</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</aside>