function populaCategorias() {
    var tipo = document.querySelector('input[name="tipo"]:checked').value;
    var categoriaSelect = document.getElementById("categoria");

    categoriaSelect.innerHTML = "";

    var categorias = [];
    if (tipo === "receita") {
      categorias = [
        "Salário",
        "Freelancer",
        "Renda Extra",
        "Retorno de Investimentos",
        "Recebimento de Aluguel"
      ];
    } else if (tipo === "despesa") {
      categorias = [
        "Alimentação",
        "Transporte",
        "Hospedagem",
        "Lazer",
        "Educação",
        "Saúde",
        "Impostos",
        "Contas da Casa",
        "Compras",
        "Manutenção",
        "Seguros",
        "Dívidas",
        "Investimentos",
        "Outras Despesas"
      ];
    }

    // Povoar as opções de categoria
    categorias.forEach(function(categoria) {
      var option = document.createElement("option");
      option.value = categoria;
      option.textContent = categoria;
      categoriaSelect.appendChild(option);
    });
  }