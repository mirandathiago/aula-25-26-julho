<?php
#__DIR__ -> Constante da linguagem php que retorna o caminho específico do arquivo que está sendo executado.
$caminho = __DIR__."/dados.csv";

echo $caminho;
echo "<hr>";

#fopen -> abre um arquivo a partir do seu caminho utilizando um modo de acesso. Modo de acesso "r" -> leitura (read).
$arquivoAberto = fopen($caminho,"r");

#fgets -> retorna uma linha do arquivo aberto a cada execução
while( $transacao = fgets($arquivoAberto) ){
    #explode -> converte uma string em um array separando seus elementos através de um separador definido.
    $dadoTransacao = explode(",",$transacao);
    //print_r($dadoTransacao);
    echo $dadoTransacao[0]." -> ".$dadoTransacao[1]."<br>";
}

fclose($arquivoAberto);