<section class="content-header">
    <h1>
        Memorias RAM <small>Editar</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <form action="<?php echo base_url();?>configuraciones/memorias/update" method="POST">
                        <input type="hidden" name="idMemoria" value="<?php echo $memoria->id?>">
                        <?php if ($this->session->flashdata("success")): ?>
                            <script>
                                swal("Registro Exitoso!", "Haz click en el botón para continuar registrando.", "success");
                            </script>
                        <?php endif ?>
                        <?php if ($this->session->flashdata("error")): ?>
                            <script>
                                swal("Error al Registrar!", "Haz click en el botón para volver intentarlo.", "error");
                            </script>
                        <?php endif ?>
                        
                        <div class="form-group">
                            <label for="capacidad">Capacidad:</label>
                            <input type="text" name="capacidad" id="capacidad" class="form-control" required="required" value="<?php echo $memoria->capacidad?>">
                        </div>
                        <div class="form-group">
                            <label for="fabricante">Fabricante:</label>
                            <select name="fabricante" id="fabricante" class="form-control" required="required">
                                <option value="">Elija Fabricante</option>
                                <?php foreach ($fabricantes as $fabricante): ?>
                                    <option value="<?php echo $fabricante->id;?>" <?php echo $fabricante->id == $memoria->fabricante_id ? "selected":"";?>><?php echo $fabricante->nombre;?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <?php if ($memoria->estado == 0): ?>
                            <div class="form-group">
                                <label for="">Estado:</label>
                                <select name="estado" id="estado" required class="form-control">
                                    <option value="1">Activo</option>
                                    <option value="2" selected>Inactivo</option>
                                </select>
                            </div>
                        <?php endif ?>
                        
                        <div class="form-group">
                            <input type="submit" name="guardar" class="btn btn-success btn-flat" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->