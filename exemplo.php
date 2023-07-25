<?php
#__DIR__ -> Constante da linguagem php que retorna o caminho específico do arquivo que está sendo executado.
$caminho = __DIR__."/dados.csv";

echo $caminho;
echo "<hr>";

#fopen -> abre um arquivo a partir do seu caminho utilizando um modo de acesso. Modo de acesso "r" -> leitura (read).
$arquivoAberto = fopen($caminho,"r");
#filesize -> verifica o tamanho do arquivo a partir do seu caminho no computador
$tamanho = filesize($caminho);
#fread -> realiza a leitura do arquivo retornando um texto (string)
$transacoes = fread($arquivoAberto,$tamanho);
echo $transacoes;
#Fecha o arquivo liberando a memoria
fclose($arquivoAberto);