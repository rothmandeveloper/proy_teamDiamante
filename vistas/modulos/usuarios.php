 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Usuarios
      </h1>

      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
              
              Agregar usuario

            </button>

        </div>
       
        <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                <thead>         
                    <tr>                    
                        <th style="width:10px">#</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Foto</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Último login</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>               
                        <td>1</th>
                        <td>User Admin</td>
                        <td>Admin</td>
                        <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                        <td>Administrador</td>
                        <td><button class="btn btn-success btn-xs">Activado</button></td>
                        <td>2023-02-22 12:46:32</td>
                        <td>
                            <div class="btn-group">
                                <button class = "btn btn-warning"><i class="fa fa-pencil"> </i></button>
                                <button class = "btn btn-danger"><i class="fa fa-times"> </i></button>
                            </div>

                        </td>
                    </tr>
              
              
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<!-- Modal -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header" style="background:#3c8dbc; color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar Usuarios</h4>
            </div>

            <div class="modal-body">
                <div class="box-body">

<!-- ENTRADA DE NOMBRE DE PERSONA -->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>
                        </div>
                    </div>

<!-- ENTRADA PARA EL USUARIO -->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" required>
                        </div>
                    </div>
<!-- ENTRADA PARA LA CONTRASEÑA -->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Constraseña" required>
                        </div>
                    </div>
<!-- ENTRADA PARA SU PERFIL-->
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                            <select class="form-control input-lg" name="Nuevo Perfil">
                                <option value="Administrador"> Seleccionar perfil </option>
                            </select>
                        </div>
                    </div>                 

                </div>
            </div>




            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>

</div>