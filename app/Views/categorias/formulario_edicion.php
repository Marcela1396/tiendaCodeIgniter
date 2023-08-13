<?php echo $this->extend('index'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <h1> Edición de Categorias </h1>

    <form method="POST" action="<?php echo base_url()?>categorias/editar">

        <input type="hidden" id="id_cat" name="id_cat"  value="<?php echo $data['id_categoria']; ?>" >
        <div class="mb-3">
            <label for="nombre_cat" class="form-label">Nombre Categoría</label>
            <input type="text" class="form-control" id="nombre_cat" 
            name="nombre_cat" aria-describedby="emailHelp" value="<?php echo $data['nom_categoria']; ?>" >
        </div>
        <div class="mb-3">
            <label for="descripcion_cat" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion_cat"  
            name="descripcion_cat" value="<?php echo $data['desc_categoria']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>


</div>



<?php echo $this->endSection(); ?>