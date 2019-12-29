Curso Perguntas

<div class="col-sm-6 col-md-8">

<h2><?php echo $aula_info['titulo']; ?></h2><hr>
<h3><?php echo $aula_info['pergunta']; ?></h3>
<?php if(isset($aula_info['tipo_midia']) && $aula_info['tipo_midia'] == 'texto'):  ?>
<div class="radio"><label><input type="radio" name="opcao" id="opcao1" value="1">
<?php echo $aula_info['opcao1']; ?></label></div>

<div class="radio"><label><input type="radio" name="opcao" id="opcao2" value="2">
<?php echo $aula_info['opcao2']; ?></label></div>

<div class="radio"><label><input type="radio" name="opcao" id="opcao3" value="3">
<?php echo $aula_info['opcao3']; ?></label></div>

<div class="radio"><label><input type="radio" name="opcao" id="opcao4" value="4">
<?php echo $aula_info['opcao4']; ?></label></div>

<button type="button" class="btn btn-primary">Concluir</button>

<?php elseif(isset($aula_info['tipo_midia']) && $aula_info['tipo_midia'] == 'imagem'): ?>
<h2><?php echo $aula_info['titulo']; ?></h2><hr>
<h3><?php echo $aula_info['pergunta']; ?></h3>
<div class="row">
<div class="col-md-6"> 
<img class="img-responsive" src="<?php echo BASE . '/assets/uploads/' . $aula_info['opcao1']; ?>" alt="">
<p><div class="radio"><label><input type="radio" name="opcao" id="opcao1" value="1">
<?php echo $aula_info['titulo1']; ?></label></div></p>      
</div>
<div class="col-md-6"> 
<img class="img-responsive" src="<?php echo BASE . '/assets/uploads/' . $aula_info['opcao2']; ?>" alt="">
<p><div class="radio"><label><input type="radio" name="opcao" id="opcao2" value="2">
<?php echo $aula_info['titulo2']; ?></label></div></p>      
</div>
<div class="col-md-6"> 
<img class="img-responsive" src="<?php echo BASE . '/assets/uploads/' . $aula_info['opcao3']; ?>" alt="">
<p><div class="radio"><label><input type="radio" name="opcao" id="opcao3" value="3">
<?php echo $aula_info['titulo3']; ?></label></div></p>      
</div>
<div class="col-md-6"> 
<img class="img-responsive" src="<?php echo BASE . '/assets/uploads/' . $aula_info['opcao4']; ?>" alt="">
<p><div class="radio"><label><input type="radio" name="opcao" id="opcao4" value="4">
<?php echo $aula_info['titulo4']; ?></label></div></p>      
</div>
</div>
<button type="button" class="btn btn-primary">Concluir</button>


<?php else: ?>





<h2><?php echo $aula_info['titulo']; ?></h2><hr>
<h3><?php echo $aula_info['pergunta']; ?></h3>
<div class="row">
<div class="col-md-6"> 
<div class="embed-responsive embed-responsive-16by9">
<iframe src="https://player.vimeo.com/video/5414544" width="640" height="360" frameborder="0" allowfullscreen></iframe> </div>
<p><div class="radio"><label><input type="radio" name="opcao" id="opcao1" value="1">
<?php echo $aula_info['titulo1']; ?></label></div></p>      
</div>
<div class="col-md-6"> 
<div class="embed-responsive embed-responsive-16by9">
<iframe src="https://player.vimeo.com/video/5414544" width="640" height="360" frameborder="0" allowfullscreen></iframe> </div>
<p><div class="radio"><label><input type="radio" name="opcao" id="opcao2" value="2">
<?php echo $aula_info['titulo2']; ?></label></div></p>      
</div>
<div class="col-md-6"> 
<div class="embed-responsive embed-responsive-16by9">
<iframe src="https://player.vimeo.com/video/5414544" width="640" height="360" frameborder="0" allowfullscreen></iframe> </div>
<p><div class="radio"><label><input type="radio" name="opcao" id="opcao1" value="1">
<?php echo $aula_info['titulo1']; ?></label></div></p>      
</div>
<div class="col-md-6"> 
<div class="embed-responsive embed-responsive-16by9">
<iframe src="https://player.vimeo.com/video/5414544" width="640" height="360" frameborder="0" allowfullscreen></iframe> </div>
<p><div class="radio"><label><input type="radio" name="opcao" id="opcao2" value="2">
<?php echo $aula_info['titulo2']; ?></label></div></p>      
</div>
</div>
<button type="button" class="btn btn-primary">Concluir</button>
<?php endif; ?>
</div>
