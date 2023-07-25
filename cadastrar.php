
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Carteira</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header  class="topo">
       <div class="container container__topo">
            <h1><a href="index.php"><i class="ri-wallet-fill"></i> MinhaCarteira</a></h1>
            <nav class="menu">
                <ul>
                <li><a href="cadastrar.php"><i class="ri-add-circle-fill"></i> Cadastrar Transação</a></li>                                
                </ul>
            </nav>
        </div> 
    </header>
    <main class="container">
        
        <form class="container" action="cadastrar.php" method="post">
            <h2><i class="ri-add-circle-fill"> </i> Cadastrar Transação</h2>
            
            <div class="colunatotal">
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao">
            </div> 
           
            <div class="coluna1">
                <label for="data">Data:</label>
                <input type="date" id="data" name="data">
            </div>
           
            <div class="coluna2">
                <label for="valor">Valor:</label>
                <input type="number" id="valor" name="valor" step="0.01">
             </div>
            <div class="coluna1">
                <label for="tipo" class="tipo">Tipo:</label>
                <input type="radio" id="tipoReceitas" name="tipo" value="receita" onclick="populaCategorias()">
                <label for="tipoReceitas" class="radio-label receita"> <i class="ri-arrow-up-circle-fill"></i>Receitas</label>
                <input type="radio" id="tipoDespesas" name="tipo" value="despesa" onclick="populaCategorias()">
                <label for="tipoDespesas"  class="radio-label despesa"><i class="ri-arrow-down-circle-fill"></i> Despesas</label>
            </div>   
            <div class="coluna2"> 
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria">
                    <option>Selecione primeiro um Tipo</option>
                </select>
            </div>  
            <div class="colunatotal button"> 
                <button type="submit" class="submit-button">Salvar</button>
            </div> 
        </form>
    </main>
    <script src="populacategorias.js"></script>
    
</body>
</html>