<?php echo $this->extend('index'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <h1> Registro de Categorias </h1>

    <form method="POST" action="<?php echo base_url()?>categorias/registrar">
        <div class="mb-3">
            <label for="nombre_cat" class="form-label">Nombre Categoría</label>
            <input type="text" class="form-control" id="nombre_cat" name="nombre_cat" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="descripcion_cat" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion_cat"  name="descripcion_cat">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


</div>



<?php echo $this->endSection(); ?>