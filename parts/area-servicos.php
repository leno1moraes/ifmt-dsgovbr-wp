<section class="mb-5 my-4x" style="background: #f8f8f8 no-repeat left bottom; padding: 30px 0">

<div class="content text-center mb-5x">
    <h2 class="text-blue-warm-70 text-bold">Serviços</h2>
</div>            

<div class="container">
    <div class="row justify-content-center">
    
    <?php
    if ( is_active_sidebar('servico-1') ){
    ?>                    
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <div class="card-content">
    <?php 
                    dynamic_sidebar('servico-1');
    ?>
                </div>
            </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="br-card hover">
            <a href="google.com">
                <div class="card-content">
                    <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                </div>  
                <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-80">Rodapé</div>
            </a>
        </div>
    </div>   
    <?php                     
    } 
    ?>   
    
    <?php
    if ( is_active_sidebar('servico-2') ){
    ?>                    
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <div class="card-content">
    <?php 
                    dynamic_sidebar('servico-2');
    ?>
                </div>
            </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="br-card hover">
            <a href="google.com">
                <div class="card-content">
                    <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                </div>  
                <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-80">Rodapé</div>
            </a>
        </div>
    </div>   
    <?php                     
    } 
    ?>                     
    
    <?php
    if ( is_active_sidebar('servico-3') ){
    ?>                    
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <div class="card-content">
    <?php 
                    dynamic_sidebar('servico-3');
    ?>
                </div>
            </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="br-card hover">
            <a href="google.com">
                <div class="card-content">
                    <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                </div>  
                <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-80">Rodapé</div>
            </a>
        </div>
    </div>   
    <?php                     
    } 
    ?> 

    <?php
    if ( is_active_sidebar('servico-4') ){
    ?>                    
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="br-card hover">
                <div class="card-content">
    <?php 
                    dynamic_sidebar('servico-4');
    ?>
                </div>
            </div>
        </div>
    <?php 
    }else{
    ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="br-card hover">
            <a href="google.com">
                <div class="card-content">
                    <div class="card-content"><img src="<?php echo get_template_directory_uri() . '/assets/images/online-test.png'?>" alt="Imagem de exemplo"/></div>
                </div>  
                <div class="card-footer h5 my-1  text-center text-indigo-cool-vivid-80">Rodapé</div>
            </a>
        </div>
    </div>   
    <?php                     
    } 
    ?>                     
    </div>
</div>
</section>