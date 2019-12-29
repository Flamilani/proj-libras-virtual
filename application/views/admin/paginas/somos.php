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
    <label for="nome">Nome Completo</label>
    <input type="text" class="form-control" name="funcao" id="nome" placeholder="Digite nome completo" />
  </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
    <label for="funcao">Função</label>
    <input type="text" class="form-control" name="funcao" id="funcao" placeholder="Digite a função" />
  </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
    <label for="nome">Foto</label>
    <input type="file" class="form-control" name="imagem" id="imagem" />
  </div>
    </div>    
  </div>

  <div class="row">
  <div class="col-sm-12">
  <label for="funcao">Redes Sociais</label>
</div>
  <div class="col-sm-6">
    <div class="form-group">
   
    <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-facebook-f"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
</div>  
</div>
</div>
<div class="col-sm-6">
    <div class="form-group">
    
    <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-youtube"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
</div>  
</div>
</div>

</div>
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
   
    <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-linkedin-in"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
</div>  
</div>
</div>
<div class="col-sm-6">
    <div class="form-group">
    
    <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-instagram"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
</div>  
</div>
</div>

</div>
<br />
<button type="button" class="btn btn-primary">Adicionar</button>
</form>
</div>
    </section>
</div>
