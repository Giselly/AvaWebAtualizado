<link rel='stylesheet' type='text/css' href='css/fontExercicio.css'>


<div id="title2"><h2 id="tituloCapitulo">Capítulo <?php echo $url->getURL(1); ?></h2></div>
<section id="exercicio">
    <?php
    $dataBanco = date('Y-m-d H:i:s', strtotime('+1 days',strtotime($exercicios[0]['data'])));
    $data = date('Y-m-d H:i:s');
    if ((!$exercicios[0]['maiorNota']) || ($exercicios[0]['maiorNota'] < 7 && $dataBanco <= $data)) {
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

                    <li class="numero">
                        <p id="pergunta<?php echo $questao['id']; ?>">
                            <?php echo $questao['questao'] ?>
                        </p>
                        <ol id="opcoes">
                            <?php
                            foreach ($questoesBusiness->buscarPorQuestao($questao['id']) as $item) {
                                ?>
                                <li class="letra">
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
        if($exercicios[0]['maiorNota'] > 7){
            echo "<p>Parabéns, você tirou {$exercicios[0]['maiorNota']} e pode continuar nos próximos níveis.</p>";
        }else{
            echo "<p>Sua maior nota nesse exercício é {$exercicios[0]['maiorNota']} e você deverá repetí-lo. O novo teste estará liberado apenas amanhã.";
            
        }
    }
    ?>
</section>