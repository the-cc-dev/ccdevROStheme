<?php 

//carousel vars
    $tar_blank = ' target="_blank"';

    $posts = get_field('carousel_slides','option'); //get chosen carousel slides
    $num_posts = count($posts); //get length of the array of the slides
    
    $title = get_the_title($p->ID);
    $img_opt = get_field('carousel_image_options', $p->ID);
    $link_opt = get_field('carousel_link_options', $p->ID);
    $caption_opt = get_field('carousel_caption_options', $p->ID); 
    $link_url = get_field('carousel_link', $p->ID);
    $img_url = get_field('carousel_image', $p->ID);
    $bg_color = get_field('carousel_bg_color', $p->ID);

//carousel functions

    //return active state in li class
    function is_it_active($po) {
        if($po === 0) {
            $state = ' active'
            } else {
            $state = '';
        }
        return $state;
    }

    //return bg size
    function get_bg_size($pst) {

        if($pst == fit) {
            $size = 'cover';
        } elseif($pst == 'nofit') {
            $size = 'contain';
        }
        return $size;
    }

    //return target="_blank" where needed
    function is_tar_blank($l) {
        
        if($l == true) {
            echo $tar_blank;
        }
    }

    //return ' active' to the active slide
function isit_active() {
  
                                   }


?>

<!--    carousel container    -->
<div class="carousel-container">
    
<?php if( $posts ) { //begin carousel  ?>
    
    <!--    carousel   -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        
        <!-- Indicators -->
        <ol class="carousel-indicators">
        
            <?php   
            for($x = 0; $x < $num_posts; $x++) { //loop for the length of the array 
                $indicators = '<li data-target="#myCarousel" data-slide-to="' . $x . '" class="' . is_it_active($x) . '"></li>';
                echo $indicators; 
            } //end for loop for the length of the array  ?>
            
        </ol> <!--  /.carousel-indicators   -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            
        <?php foreach( $posts as $p ): // loop through the slide posts ?>
        
            <div class="item<?php  ?>">
                
                <a href="<?php echo $link_url; ?>" class="carousel-link"<?php is_tar_blank($link_opt); ?>>
                    
                    <div class="carousel-item-inner" style="background-color: <?php echo $bg_color; ?>;<?php if($img_opt != 'none') { ?> background-image: url(<?php echo $img_url ?>); background-repeat: no-repeat; background-size: <?php echo $bgimg_style; ?>;<?php } ?>">
                        
                    <?php if($caption_opt != 'none') { //start condition that Caption Options does not equal 'none' ?>
                            
                        <div class="carousel-caption">  
                            
                        <?php if($caption_opt == 'both'||'head') { ?>    
                            
                            <h2 class="carousel-caption-h2">
                                <?php the_field('carousel_caption_header', $p->ID); ?>
                            </h2> 
                            
                        <?php } 
                            
                        if($caption_opt == 'both'||'cap') { ?>
                            
                            <p class="carousel-caption-p">
                                <?php the_field('carousel_caption_text', $p->ID); ?>
                            </p>
                            
                        } ?>    
                            
                        </div>
                        
                    <?php } //end condition that Caption Options does not equal 'none' ?>    
                        
                    </div>
                    
                </a>
                
            </div>
            
        <?php endforeach; //end loop through slide posts ?>

        </div> <!--   /.carousel-inner   -->

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a><!--  /.carousel-control.left   -->
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a><!--  /.carousel-control.right   -->
        
    </div> <!-- /.carousel   -->
    
   
    <?php } //end carousel ?>
    
</div> <!-- /.carousel-container   -->