<link rel="stylesheet" type="text/css" href="css/font.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/font.js"></script>

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
                            $i = 0;
                            foreach ($conteudoCapitulo as $topico) {

                                /** Link para visualizar este capitulo */
                                $link = "treinamento/{$capitulo}/topico/" . utf8_encode(inserirUnderline($topico));

                                /** Nome de exibição deste capitulo */
                                $exibir = utf8_encode($topico);

                                /** Estilo do link selecionado */
                                $selecionado = ($refTopico == utf8_encode(inserirUnderline($topico)) &&  !($url->posicaoExiste(2) && $url->getURL(2) != "topico")) ? "id='clicado'" : "";
                                $id = $i+1;
                                echo "<li id='{$capitulo} {$id}'><a {$selecionado} href='{$link}'>{$exibir}</a></li>";
                                $i++;
                                
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
        <div class="conteudoLetras">
           <div id="letras">
             <span id="dec-font">
                <img src="imagens/decrease_font.png" alt="Diminuir" title="Diminuir fonte"/>
             </span>
               <span id="reset-font">
                <img src="imagens/reset_font.png" alt="Resetar" title="Resetar fonte"/>
             </span>
             <span id="inc-font">
                <img src="imagens/increase_font.png" alt="Aumentar" title="Aumentar fonte" />
            </span>
           </div>


        <?php
        if ($url->posicaoExiste(2)) {
            include_once('includes/inc' . $url->getURL(2) . '.php');
        }else{
            include_once('includes/inctopico.php');
        }
        ?>
      </div>
    </section>
</section>