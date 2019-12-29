
<div class="container mt-3">
<h2>Meus Cursos</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
  <div class="row">
  <?php foreach($cursos as $curso): ?> 
    <div class="col-sm">
    <div class="card">
  <img class="card-img-top icone" src="<?php echo base_url('assets/img/icones/libras-em-foco.jpg'); ?>" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title text-center mb-4"><?php echo $curso->curso_nome; ?> (Básico)</h5>
  <p class="card-text text-center"><b>20 aulas - 190 horas</b></p>
  <div class="progress mb-3">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
    <a href="<?php echo base_url('painel/cursos/ver_curso/' . $curso->curso_id); ?>" class="btn btn-primary btn-block">Acessar</a>
  </div>
</div>
    </div>

    <?php endforeach; ?>       
  </div>
</div>
