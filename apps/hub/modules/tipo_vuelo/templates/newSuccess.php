<section class="content-header">
          <h1>
            Ingreso del Tipo vuelos
            <small>vista previa</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo url_for('dashboard/index')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo url_for('tipo_vuelo/index')?>">Tipos vuelos</a></li>
            <li class="active">Ingreso nuevo</li>
          </ol>
</section>

<?php include_partial('form', array('form' => $form)) ?>
