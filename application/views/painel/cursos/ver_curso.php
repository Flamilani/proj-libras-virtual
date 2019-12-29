
<div class="container mt-3">
<h2><?= $title; ?> <strong class="pull-right"><?php echo $aulas['curso_nome']; ?></strong></h2> 
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
<div class="row">
<div class="col-4">
<?php $this->load->view($lista_aulas); ?>

</div>
<div class="col-8">

			<img src="<?= base_url('assets/uploads/' . $aulas['curso_imagem']); ?>" />
			
			
			</div> <!-- col-8 -->
	</div>

 
</div>

