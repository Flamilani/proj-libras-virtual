<div class="card">
  <div class="card-header">
  <strong><?php echo (isset($video['video_nome']) && $video['video_nome'] !== null ? $video['video_nome'] : ''); ?></strong>
	</div> <!-- card-header -->
	<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item" src="<?php echo (isset($video['video_url']) && $video['video_url'] !== null ? $video['video_url'] : ''); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
    <div class="card-body">

    <p class="card-text"> 
		<?php echo $video['video_descricao']; ?></p>
  </div> <!-- card-body -->

</div> <!-- card -->
