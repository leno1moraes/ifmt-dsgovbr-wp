
<?php get_header(); ?>


<div class="container-lg d-flex">
    <div class="row">
        <div class="col mb-5">
            <div class="main-content pl-sm-3 mt-4" id="main-content">

              <div class="template-erro">
                <div class="row">
                  <div class="col-sm-4 d-flex align-items-center justify-content-center">
                
                    <div class="mt-4 mt-sm-0"><img src="<?php if (get_theme_mod( 'set_media_logo_404' ) > 0): echo wp_get_attachment_image_url( get_theme_mod( 'set_media_logo_404' ), 'full'); else: echo "https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/images/logo-positive.png"; endif; ?>" alt="imagem de erro"/></div>
                  </div>
                  <div class="col text-center text-sm-left">
                    <div class="text-support-03">
                      <p class="text-up-06 text-semi-bold my-3">
                        Estamos constrangidos em te ver por aqui</p>
                    </div>
                    <div class="text-secondary-06">
                      <p class="text-up-03 text-medium my-3">
                        Mas, podemos ajudá-lo a encontrar o que está procurando de outra forma</p>
                    </div>
                    <p class="my-3">
                      Talvez você tenha se equivocado ao digitar o endereço URL ou quem sabe nós tenhamos cometido uma falha por aqui. Se possível, relate o erro para
                      que possamos sempre estar melhorando.
                    </p>
                  </div>
                </div>
                <!--
                <div class="my-3">
                  <p>Aproveite para fazer uma nova busca</p>

                  <div class="br-input input-button mt-n1 input-highlight">

                    
                    <label class="sr-only" for="error-search">Texto da pesquisa</label>
                    <input id="error-search" type="search" placeholder="O que você procura?"/>
                    <button class="br-button crumb" type="button" aria-label="Buscar"><i class="fas fa-search" aria-hidden="true"></i>
                    </button>                   
                  </div>

                </div>
                -->
                
                <div class="row my-5 text-center justify-content-lg-center">
                  <div class="col-lg-auto">
                    <button class="br-button crumb" type="button"><i class="fas fa-chevron-left" aria-hidden="true"></i><span>Ir para Página Anterior</span>
                    </button>
                  </div>
                  <div class="col-lg-auto mt-1 mt-lg-0">
                    <button class="br-button crumb" type="button"><i class="fas fa-home" aria-hidden="true"></i><span>Ir para Página Principal</span>
                    </button>
                  </div>
                  <div class="col-lg-auto mt-1 mt-lg-0">
                    <button class="br-button crumb" type="button"><i class="fas fa-comment-dots" aria-hidden="true"></i><span>Envie um Feedback</span>
                    </button>
                  </div>
                </div>
              </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


