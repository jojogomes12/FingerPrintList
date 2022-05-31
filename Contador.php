<?php
 /* variavel para informar o nome do cookie*/
 $nome = 'contadordevisitas';
 /* o valor do cookie */
 $valor = 'marcospinguim';
 /* o arquivo TXT que armazenará o número de visitantes */
 $arquivo = 'mp_visitas.txt';
 /* o número de visitantes, pega os dados que estão gravados no TXT em inteiro(pra não haver erro)*/
 $conta = intval(file_get_contents($arquivo));
 /* se não houver um cookie gravado preparamos pra gravar ele */
 if(!isset($_COOKIE[$nome])){
  /*bool setcookie ( string $nome [, string $valor [, int $expira [, string $caminho [, string $domínio [, bool $seguro [, bool $somente http ]]]]]] )*/
  
 /* dados a ser informados nesse cookie: setcookie('nomedocookie', 'valordocookie', 'tempopraexpirar', 'caminhodocookie'), quando  o tempo pra expirar decidimos em 0, só expirará quando o navegador for fechado */
  
 setcookie($nome,$valor,0,'/');
 /* modo de gravação no TXT, +r é pra escrever */
 $modo = 'r+';
 /* abrir o arquivo */
 $abrir = fopen($arquivo, $modo);
 /* perceba que $conta aqui ta com +1, pois como não havia cookie aumentamos, pois é mais 1 usuario */
 $conta = intval(file_get_contents($arquivo)) + 1;
 /* gravamos com o novo valor de $conta */
 fwrite($abrir, $conta);
 /* fechamos o arquivo */
 fclose($abrir); 
 /* confirmamos o valor do cookie */
 $_COOKIE['marcospinguim'] = TRUE;
 } 
 /* imprimimos a $conta atualizada ou não */
echo 'Visitaram '; 
?>