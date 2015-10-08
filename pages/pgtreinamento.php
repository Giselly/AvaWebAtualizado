<section id="conteudo">
    <?php include_once('pages/pgmenuLateral.php'); ?>
    <section id="capitulos">
        <ul id="menuCapitulos">
            <?php
            foreach ($capitulos as $capitulo => $conteudoCapitulo) {
                if ($professor || (int) $capitulo < $capituloAtual + 2) {
                    ?>
                    <li>
                        <h3>Capítulo <?php echo $capitulo; ?></h3>
                        <ul class="subItens">
                            <?php
                            foreach ($conteudoCapitulo as $topico) {

                                /** Link para visualizar este capitulo */
                                $link = "treinamento/{$capitulo}/topico/" . utf8_encode(inserirUnderline($topico));

                                /** Nome de exibição deste capitulo */
                                $exibir = utf8_encode($topico);

                                /** Estilo do link selecionado */
                                $selecionado = ($refTopico == utf8_encode(inserirUnderline($topico)) &&  !($url->posicaoExiste(2) && $url->getURL(2) != "topico")) ? "id='clicado'" : "";

                                echo "<li><a {$selecionado} href='{$link}'>{$exibir}</a></li>";
                            }
                            
                            /** @var string indica se o link selecionado é o de exercicios */
                            $exercicioSel = ($url->posicaoExiste(2) && $url->getURL(2) == "exercicio" && $refCapitulo == $capitulo) ? "id='clicado'" : "";
                            
                            /** @var string indica se o link selecionado é o de resumo */
                            $resumoSel = ($url->posicaoExiste(2) && $url->getURL(2) == "resumo" && $refCapitulo == $capitulo) ? "id='clicado'" : "";
                            
                            ?>
                            <li><a <?php echo $exercicioSel; ?> href="<?php echo "treinamento/{$capitulo}/exercicio"; ?>">Exercício</a>        
                            <li><a <?php echo $resumoSel; ?>href="<?php echo "treinamento/{$capitulo}/resumo"; ?>">Resumo</a></li>
                        </ul>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </section>
    <section id="conteudoTopico">
        <?php
        if ($url->posicaoExiste(2)) {
            include_once('includes/inc' . $url->getURL(2) . '.php');
        }else{
            include_once('includes/inctopico.php');
        }
        ?>    
    </section>
</section>