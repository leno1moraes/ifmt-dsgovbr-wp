<section class="mb-5 my-4x" style="background: #f8f8f8 no-repeat left bottom; padding: 30px 0">

<div class="content text-center mb-5x">
    <h2 class="text-blue-warm-70 text-bold">Ações e Programas</h2>
</div>            

<div class="container">
    <div class="row justify-content-center">

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <?php 
                    if ( get_theme_mod( 'set_text_link_acprog1', '#') <> '#' and is_active_sidebar('acprog-1')):
                ?>
                    <a href="<?php echo get_theme_mod( 'set_text_link_acprog1'); ?>">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                            <?php 
                                dynamic_sidebar('acprog-1');
                            ?>
                            </div>
                        </div>
                    </a>
                <?php
                else:
                ?>
                    <a href="#">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                                <span class="fas fa-exclamation-triangle fa-5x"></span>
                            </div>
                        </div>  
                        <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-70">Rodapé</div>
                    </a>
                <?php
                endif;
                ?>            
            </div>
        </div> 

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <?php 
                    if ( get_theme_mod( 'set_text_link_acprog2', '#') <> '#' and is_active_sidebar('acprog-2')):
                ?>
                    <a href="<?php echo get_theme_mod( 'set_text_link_acprog2'); ?>">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                            <?php 
                                dynamic_sidebar('acprog-2');
                            ?>
                            </div>
                        </div>
                    </a>
                <?php
                else:
                ?>
                    <a href="#">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                                <span class="fas fa-exclamation-triangle fa-5x"></span>
                            </div>
                        </div>  
                        <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-70">Rodapé</div>
                    </a>
                <?php
                endif;
                ?>            
            </div>
        </div> 
        
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <?php 
                    if ( get_theme_mod( 'set_text_link_acprog3', '#') <> '#' and is_active_sidebar('acprog-3')):
                ?>
                    <a href="<?php echo get_theme_mod( 'set_text_link_acprog3'); ?>">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                            <?php 
                                dynamic_sidebar('acprog-3');
                            ?>
                            </div>
                        </div>
                    </a>
                <?php
                else:
                ?>
                    <a href="#">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                                <span class="fas fa-exclamation-triangle fa-5x"></span>
                            </div>
                        </div>  
                        <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-70">Rodapé</div>
                    </a>
                <?php
                endif;
                ?>            
            </div>
        </div> 

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <?php 
                    if ( get_theme_mod( 'set_text_link_acprog4', '#') <> '#' and is_active_sidebar('acprog-4')):
                ?>
                    <a href="<?php echo get_theme_mod( 'set_text_link_acprog4'); ?>">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                            <?php 
                                dynamic_sidebar('acprog-4');
                            ?>
                            </div>
                        </div>
                    </a>
                <?php
                else:
                ?>
                    <a href="#">                
                        <div class="card-content">
                            <div class="card-content text-center">                        
                                <span class="fas fa-exclamation-triangle fa-5x"></span>
                            </div>
                        </div>  
                        <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-70">Rodapé</div>
                    </a>
                <?php
                endif;
                ?>            
            </div>
        </div>                

    </div>
</div>
</section>