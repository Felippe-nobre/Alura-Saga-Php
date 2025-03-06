<?php

$nome = 'cam" /> <script>alert("teste")</script>';
// addslashes Adicione \antes de ', ", \e NULL.
// htmlentities  Converte todos os caracteres especiais para entidades HTML.
// htmlspecialchars Converta apenas alguns caracteres ( &, <, >, ", ').
?>
<input type="text" name="<?php echo htmlspecialchars($nome); ?>" /> 

