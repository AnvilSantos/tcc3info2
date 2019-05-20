<?php
session_start();
unset($_SESSION[usuario_logado]);
session_destroy();
?>
<script>location.href='../conteudo/index.php';</script> 
<?php exit('Redirecionando...'); ?>