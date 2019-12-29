  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"><hr />
<form>
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label for="nome">Título</label>
    <input type="text" class="form-control" name="titulo" id="titulo" />
  </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
    <label for="funcao">Função</label>
    <select class="form-control">
   <option value="">Selecione nível</option>
  <option value="1">Básico</option>
  <option value="2">Intermediário</option>
  <option value="3">Avançado</option>
</select>
  </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
    <label for="nome">Imagem</label>
    <input type="file" class="form-control" name="imagem" id="imagem" />
  </div>
    </div>    
  </div>

  <div class="row">
  <div class="col-sm-12">
	<label for="funcao">Descrição</label>
	<div class="form-group">
		<div class="mb-3">
								<textarea id="editor1" name="editor1">				
							</textarea>
              </div>

</div>
</div>

 
</div>

<br />
<button type="button" class="btn btn-primary">Adicionar</button>
</form> <br />
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listagem de Cursos</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Nível</th>
                    <th>Imagem</th>
                    <th>Descrição</th>
										<th>Módulo</th>
                    <th>Status</th>
									</tr>
									<?php foreach ($cursos as $curso): ?>
                  <tr>
                    <td><?php echo $curso->curso_id; ?></td>
                    <td><?php echo $curso->curso_nome; ?></td>
                    <td><span class="tag tag-success"><?php echo nivel($curso->nivel_id); ?></span></td>
                    <td><img class="img-fluid tamImagem text-center" src="<?php echo base_url('assets/uploads/' . $curso->curso_imagem); ?>" id="img_upload" alt="" /></td>
										<td><?php echo $curso->curso_descricao; ?></td>
										<td><a class="btn btn-info" href="<?php echo base_url('admin/cursos/modulo/' . $curso->curso_id); ?>" role="button">Módulos <span class="badge">0</span></a></td>
										<td><?php echo status($curso->curso_status); ?></td>
									</tr>      
									<?php endforeach; ?>            
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->
</div>
    </section>
</div>



