            <!-- CAROUSEL padrao BR -->                      

            <div class="row">
                <div class="col-sm-12 col-md">

                  <div class="br-carousel" data-circular="true" data-stage="in" data-mobile-nav="">
                    <div class="carousel-button">
                      <button class="br-button carousel-btn-prev terciary circle" type="button" aria-label="Anterior"><i class="fas fa-angle-left" aria-hidden="false"></i>
                      </button>
                    </div>

                    <div class="carousel-stage">
                          <?php
                          $args = array(
                              'posts_per_page' => 5
                          );
                          $news_query = new WP_Query( $args );

                          if ( $news_query->have_posts() ):
                              while ($news_query->have_posts()) :
                                  $news_query->the_post();
                          ?>                         
                          <a href="<?php the_permalink(); ?>" >
                              <div class="carousel-page" active="active">
                                  <div class="carousel-content">                                                           
                                    <img class="d-block" src="<?php echo the_post_thumbnail_url(); ?>" alt="Uma imagem aqui" style="width:100%; height: 100%; object-fit: fill;">
                                    <?php //echo  the_post_thumbnail( 'full' ); ?>
                                  </div>
                              </div>
                          </a>
                          <?php
                              endwhile;
                          else:
                          ?>
                              <div class="h3 carousel-title">Não há posts</div> 
                          <?php
                          endif;
                          ?>
                    </div>

                    <div class="carousel-button">
                      <button class="br-button carousel-btn-next terciary circle" type="button" aria-label="Próximo">
                        <i class="fas fa-angle-right" aria-hidden="false"></i>
                      </button>
                    </div>

                    <div class="carousel-step">
                      <div class="br-step" data-initial="1" data-type="simple">
                        <div class="step-progress">

                          <button class="step-progress-btn" type="button"><span class="step-info">Exemplo de Rótulo 1</span></button>
                          <button class="step-progress-btn" type="button"><span class="step-info">Exemplo de Rótulo 2</span></button>
                          <button class="step-progress-btn" type="button"><span class="step-info">Exemplo de Rótulo 3</span></button>
                          <button class="step-progress-btn" type="button"><span class="step-info">Exemplo de Rótulo 4</span></button>
                          <button class="step-progress-btn" type="button"><span class="step-info">Exemplo de Rótulo 5</span></button>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
            </div>  
                    
            <!-- CAROUSEL padrao BR -->