<?php if(!isset($_SESSION['userID']) && empty($_SESSION['userID'])): ?>
    <script>window.location.href = "<?php echo BASE_URL; ?>"</script>
<?php endif; ?>

<div class="container-fluid page-content add-ref">

    <form action="register" method="POST">
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" required />
        </div>
        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Separe diferentes autores por ;" required />
        </div>
        <div class="form-group">
            <label for="year">Ano:</label>
            <input type="number" name="year" id="year" class="form-control" />
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" name="city" id="city" class="form-control" />
        </div>
        <div class="form-group">
            <label for="publisher">Editora:</label>
            <input type="text" name="publisher" id="publisher" class="form-control" />
        </div>
        <div class="form-group">
            <label for="editor">Editor:</label>
            <input type="text" name="editor" id="editor" class="form-control" />
        </div>
        <div class="form-group">
            <label for="volume">Volume:</label>
            <input type="number" name="volume" id="volume" class="form-control" />
        </div>
        <div class="form-group">
            <label for="edition">Edição:</label>
            <input type="number" name="edition" id="edition" class="form-control" />
        </div>
        <div class="form-group">
            <button type="reset" class="btn btn-warning mr-3">Limpar</button>
            <button class="btn btn-success">Adicionar</button>
        </div>
    </form>

</div>