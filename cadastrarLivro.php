<h1>Cadastrar Livro</h1>
<form action="inserirLivro.php">
    <div class="row">
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="titulo" placeholder="Digite o Título" id="">
        </div>
        <div class="col-2">
            <input type="number" class="form-control mb-2" name="isbn" placeholder="Digite o ISBN" id="">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="autor" placeholder="Digite o Autor" id="">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="editora" placeholder="Digite a Editora" id="">
        </div>
        <div class="col-2">
            <input type="date" class="form-control mb-2" name="ano" placeholder="Digite o Ano" id="">
        </div>
        <div class="col-2">
            <input type="number" class="form-control mb-2" name="qtd" placeholder="Digite a Quantidade" id="">
        </div>
    </div>
    <input type="submit" class="btn btn-primary col-12" value="Cadastrar">
</form>