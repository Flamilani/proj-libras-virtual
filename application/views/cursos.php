  <!-- Portfolio Grid Section -->
  <section id="portfolio" class="parallax" data-speed="6" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading"><?= $title ?></h2> <br />
                    <!-- <h3 class="section-subheading text-muted"><?= $description ?></h3> -->
                </div>
            </div>
            <div class="row">
			<?php foreach($cursos as $curso): ?> 
	  				
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?= base_url(); ?>curso/<?php echo $curso->curso_id; ?>" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/uploads/' . $curso->curso_imagem); ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $curso->curso_nome; ?></h4>                       
                        <p class="text-muted"><?php echo nivel($curso->nivel_id); ?></p>
                    </div>
				</div>  
				<?php endforeach; ?>             
			</div>
            </div>
        </div>
    </section>
        
    