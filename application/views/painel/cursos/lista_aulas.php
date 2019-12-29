

<?php foreach($modulos as $mod): ?> 
<div class="card">
  <div class="card-header">
	<?php echo $mod->modulo_nome; ?>
  </div>
  <ul class="list-group list-group-flush">
	<?php $lista_videos = $this->db->query("SELECT * FROM videos v INNER JOIN aulas a on v.aula_id = a.aula_id WHERE modulo_id = '{$mod->modulo_id}'"); ?>
					 <?php foreach ($lista_videos->result() as $vs): ?>
	<a href="<?php echo base_url('painel/cursos/aula/' . $vs->curso_id . '/' . $vs->video_id); ?>" class="list-group-item list-group-item-action">
		<?php echo $vs->video_nome; ?></a>
		<?php endforeach; ?> 
  </ul>
</div>
<br />
<?php endforeach; ?> 
