
  <div class="row middle">
    <?php
      if ( ! dynamic_sidebar('home-middle-text') ) :
        dynamic_sidebar('home-middle-text');
      endif;
    ?>
  </div>
  
  <?php //Add the fancy cards section that we're going to use for more info ?>
  <div class="row cards">
    
  <?php //First card ?>
    <div class="large-4 small-12 columns">
      <div class="image-wrapper overlay-slide-in-left">
        
        <?php
        
        //Let's get that photo, or use the stock one
          if( get_theme_mod( 'squarefoot_card_one') ) :
            echo '<img src="' . esc_url( get_theme_mod( 'squarefoot_card_one' ) ) . '" />';
          else : 
            echo '<img src="/wp-content/themes/squarefoot/assets/img/move-in.jpg" />';
          endif;
        
        //Let's check if we've got content
          if ( ! dynamic_sidebar('home-middle-card-one') ) :
            dynamic_sidebar('home-middle-card-one');
          endif;
          
        ?>
        
        </div>
    </div>
    
    <?php //Second Card ?>
      <div class="large-4 small-12 columns">
        <div class="image-wrapper overlay-slide-in-left">
        
           <?php
        
          //Let's get that photo, or use the stock two
            if( get_theme_mod( 'squarefoot_card_two') ) :
              echo '<img src="' . esc_url( get_theme_mod( 'squarefoot_card_two' ) ) . '" />';
            else : 
              echo '<img src="/wp-content/themes/squarefoot/assets/img/amens.jpg" />';
            endif;
          
          //Let's check if we've got content
            if ( ! dynamic_sidebar('home-middle-card-two') ) :
              dynamic_sidebar('home-middle-card-two');
            endif;
            
          ?>
        
        </div>
      </div> 
    
    <?php //Third Card ?>
      <div class="large-4 small-12 columns">
        <div class="image-wrapper overlay-slide-in-left">
           
            <?php
        
            //Let's get that photo, or use the stock three
              if( get_theme_mod( 'squarefoot_card_three') ) :
                echo '<img src="' . esc_url( get_theme_mod( 'squarefoot_card_three' ) ) . '" />';
              else : 
                echo '<img src="/wp-content/themes/squarefoot/assets/img/neighborhood.jpg" />';
              endif;
            
            //Let's check if we've got content
              if ( ! dynamic_sidebar('home-middle-card-three') ) :
                dynamic_sidebar('home-middle-card-three');
              endif;
              
            ?>
           
        </div>
      </div>
      <?php //End cards ?>
  </div>