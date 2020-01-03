

<?php foreach($modulos as $mod): ?> 
<div class="card">
  <div class="card-header">
	<?php echo $mod->modulo_nome; ?>
  </div>
  <ul class="list-group list-group-flush aulas_curso">
	<?php $lista_videos = $this->db->query("SELECT * FROM videos v INNER JOIN aulas a on v.aula_id = a.aula_id WHERE modulo_id = '{$mod->modulo_id}'"); ?>
	 <?php foreach ($lista_videos->result() as $vs): ?>
	<li class="list-group-item list-group-item-action">
		<?php echo $vs->video_nome; ?></li>
		<?php endforeach; ?> 
  </ul>
</div>
<br />
<?php endforeach; ?> 
