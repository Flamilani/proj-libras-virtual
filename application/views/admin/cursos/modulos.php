  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title ?></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/cursos'); ?>">Cursos</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php $url = $this->uri->segment(4); ?>
      <?php $titulo = array('name' => 'titulo', 'id' => 'titulo', 'type' => 'text', 'value' => set_value('titulo'), 'class' => 'form-control', 'placeholder' => 'Título');
     $button = array('name' => 'btn_adicionar', 'id' => 'btn_adicionar', 'type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Adicionar'); ?> 
      <?php echo form_open_multipart('admin/cursos/add_modulo', 'role="form"'); ?>
      <input type="hidden" id="curso_id" name="curso_id" value="<?php echo $url; ?>">
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label for="nome">Título</label>
    <input type="text" class="form-control" name="titulo" id="titulo" />
  </div>
    </div>
 
  </div>


<?php echo form_submit($button); ?>     
 <?php form_close(); ?>  
<br />
<br />
<div class="card-body table-responsive p-0">
<?php if (!empty($modulos)): ?>  
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>Título</th>                  
                    <th>Aula</th>                  
                    <th>Ações</th>                  
									</tr>
									<?php foreach ($modulos as $modulo): ?>
                  <tr>
                    <td><?php echo $modulo->modulo_id; ?></td>
                    <td><?php echo $modulo->modulo_nome; ?></td>    
                    <td>
                    <a class="btn btn-info" 
                    href="<?php echo base_url('admin/cursos/aula/' . $modulo->curso_id . "/" . $modulo->modulo_id); ?>" 
                    role="button">Aulas <span class="badge">0</span></a>
                    </td>              
									</tr>      
									<?php endforeach; ?>            
                </table>
<?php else: ?>
<div class="alert alert-info alert-dismissible text-center">               
                
                 Não há módulos no momento.
                </div>
                <?php endif; ?>  
              </div>
</div>
    </section>
</div>

