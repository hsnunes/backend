<div class="container">
<h3 class="m-3">Edição de Páginas</h3>

<form action="#" method="post">
    <div class="form-group">
        <label for="titlePages">Título</label>
        <input name="title" value="<?php echo $data['page']['title']; ?>" id="titlePages" type="text" class="form-control" placeholder="Título da Página">
    </div>
    <div class="form-group">
        <label for="urlPages">URL</label>
        <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text">/</span></div>
        <input name="url" value="<?php echo $data['page']['url']; ?>" id="urlPages" type="text" class="form-control" placeholder="Deixe em branco para início">
        </div>
    </div>
    <div class="form-group">
        <label for="editorPages">Editor de Textos</label>
        <input name="body" type="hidden" id="bodyPages" value="<?php echo htmlentities($data['page']['body']); ?>">
        <trix-editor input="bodyPages" id="editorPages"></trix-editor>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button> <a href="/admin/pages" class="btn btn-primary">Páginas</a>
</form>

</div>