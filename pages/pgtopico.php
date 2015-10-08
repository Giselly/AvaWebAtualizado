<h2 id="tituloCapitulo"><?php echo isset($topicoAtual[0]['capitulo']) ? $topicoAtual[0]['capitulo'] : 'Não há capítulos listados!'; ?></h2>
<h3 id="subtituloCapitulo"><?php echo isset($topicoAtual[0]['titulo']) ? ($topicoAtual[0]['titulo']) . ": " . $topicoAtual[0]['subtitulo'] : ''; ?></h3>
<p id="conteudoTopico">
    <?php echo isset($topicoAtual[0]['conteudo']) ? $topicoAtual[0]['conteudo'] : 'Não há conteúdo!'; ?>
</p>