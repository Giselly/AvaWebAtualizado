<link rel='stylesheet' type='text/css' href='css/font.css'>
<h2 id="tituloCapitulo">Capítulo <?php echo $url->getURL(1); ?></h2>
<section id="exercicio">
    <?php
    
    if (!isset($nota)) {
        ?>

        <section id="iniciarExercicio">
            <input type="button" id="iniciar" value="Iniciar" />
            <a href="#" id="voltar">Voltar ao conteúdo</a>
        </section>
        <form method="post" id="exercicio">
            <ol id="questoes">
                <?php
                foreach ($questoes as $questao) {
                    ?>

                    <li>
                        <p id="pergunta<?php echo $questao['id']; ?>">
                            <?php echo $questao['questao'] ?>
                        </p>
                        <ol id="opcoes">
                            <?php
                            foreach ($questoesBusiness->buscarPorQuestao($questao['id']) as $item) {
                                ?>
                                <li>
                                    <input type="radio" value="<?php echo $item['id']; ?>" name="opcao<?php echo $questao['id']; ?>" />
                                    <label><?php echo $item['item']; ?></label>
                                </li>
                                <?php
                            }
                            ?>

                        </ol>
                    </li>
                    <?php
                }
                ?>
            </ol>
            <input type="submit" id="salvar" value="Salvar" name="salvar" />
        </form>
        <?php
    } else {
        if($nota > 7){
            echo "<p>Parabens, você tirou um {$nota} e pode continuar nos próximos níveis.</p>";
        }else{
            echo "<p>Você tirou um {$nota} e deverá repetir o teste.O novo teste estará liberado apenas amanhã.";
            
        }
    }
    ?>
</section>