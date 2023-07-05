<?php echo $this->extend('index'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
    <h1> Listado de Categorias </h1>


    <a href="<?php echo base_url()?>categorias/registrar" type="button" class="btn btn-success">Añadir</a>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $i):  ?>
        <tr>
            <th scope="row"> <?php echo $i['id_categoria'] ?> </th>
            <td><?php echo $i['nom_categoria'] ?></td>
            <td><?php echo $i['desc_categoria'] ?></td>
            <td>
                <a type="button" class="btn btn-primary">Editar</a>
                <a type="button" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    </table>

</div>


<?php echo $this->endSection(); ?>