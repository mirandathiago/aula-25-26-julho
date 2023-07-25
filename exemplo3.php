<?php
#__DIR__ -> Constante da linguagem php que retorna o caminho específico do arquivo que está sendo executado.
$caminho = __DIR__."/dados.csv";

echo $caminho;
echo "<hr>";

#fopen -> abre um arquivo a partir do seu caminho utilizando um modo de acesso. Modo de acesso "r" -> leitura (read).
$arquivoAberto = fopen($caminho,"r");

while( $transacao = fgetcsv($arquivoAberto) ){
    echo $transacao[0]." -> ".$transacao[1]."<br>";
}


fclose($arquivoAberto);