<?php
/*
Template Name: Print Specifications Template
*/
?>

<?php get_header(); ?>



<div class="main-container" id="page-print-specs-rates">

    <div class="main wrapper clearfix">

        <div id="contentwrapper">

            <article>

                <section> 

                    <div id="content">
                          <div id="content-header">  
                            <h1><?php the_title(); ?></h1>
                          </div>                       

          
                    <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <div id="content-image">

                          <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                          } 
                          ?> 
                          <a href="<?php the_field('featured_image_link'); ?>" target="_blank"><?php the_field('featured_image_link_text'); ?></a> 

                        </div>
                        <?php
                            $size_requirements = get_field('size_requirements');
                            $display_ad_rates = get_field('display_ad_rates');
                            $yellow_page_ad_rates = get_field('yellow_page_ad_rates');
                            $marketplace_ad_rates = get_field('marketplace_ad_rates');
                            $posttype = get_field('row_type_name'); 
                            $bottom_content = get_field('bottom_content');
                        ?>  
                        <h3><?=the_field('table_1_header');?></h3>
                        <div class="table">   
                            <table cellspacing="0" cellpadding="0" border="0" align="left">
                                <thead>
                                    <tr class="header-row">
                                        <th><strong><?=the_field('t1_col_1_title');?></strong></th>
                                        <th><strong><?=the_field('t1_col_2_title');?></strong></th>
                                        <th><strong><?=the_field('t1_col_3_title');?></strong></th>
                                    </tr>
                                </thead>
                                <tbody>               
                                    <?php
                                    
                                    if(!empty($size_requirements)) {
                                        foreach($size_requirements as $size_requirement) {
                                    ?>
                                        <tr>
                                            <td><?=$size_requirement['ad_size']; ?></td>
                                            <td><?=$size_requirement['size_inches']; ?></td>
                                            <td><?=$size_requirement['live_area']; ?></td>               
                                        </tr>   
                                    <?php  
                                        }    
                                    }                                        
                                    ?>
                               </tbody>
                           </table> 
                        </div>      

                        <h3><?=the_field('table_2_header');?></h3>
                        <div class="table">   
                            <table cellspacing="0" cellpadding="0" border="0" align="left">
                                <thead>
                                    <tr class="header-row">
                                        <th><strong><?=the_field('t2_col_1_title');?></strong></th>
                                        <th><strong><?=the_field('t2_col_2_title');?></strong></th>
                                        <th><strong><?=the_field('t2_col_3_title');?></strong></th>
                                        <th><strong><?=the_field('t2_col_4_title');?></strong></th>
                                        <th><strong><?=the_field('t2_col_5_title');?></strong></th>
                                    </tr>
                                </thead>
                                <tbody>               
                                    <?php
                                    
                                    if(!empty($display_ad_rates)) {
                                        foreach($display_ad_rates as $display_ad_rate) {
                                    ?>
                                        <tr>
                                            <td><?=$display_ad_rate['t2_space']; ?></td>
                                            <td><?=$display_ad_rate['t2_1x']; ?></td>
                                            <td><?=$display_ad_rate['t2_3x']; ?></td>
                                            <td><?=$display_ad_rate['t2_6x']; ?></td>
                                            <td><?=$display_ad_rate['t2_12x']; ?></td>                   
                                        </tr>   
                                    <?php  
                                        }    
                                    }                                        
                                    ?>
                               </tbody>
                           </table> 
                        </div> 


                        <h3><?=the_field('table_3_header');?></h3>
                        <div class="table">   
                            <table cellspacing="0" cellpadding="0" border="0" align="left">
                                <thead>
                                    <tr class="header-row">
                                        <th><strong><?=the_field('t3_col_1_title');?></strong></th>
                                        <th><strong><?=the_field('t3_col_2_title');?></strong></th>
                                        <th><strong><?=the_field('t3_col_3_title');?></strong></th>
                                        <th><strong><?=the_field('t3_col_4_title');?></strong></th>
                                        <th><strong><?=the_field('t3_col_5_title');?></strong></th>
                                    </tr>
                                </thead>
                                <tbody>               
                                    <?php
                                    
                                    if(!empty($yellow_page_ad_rates)) {
                                        foreach($yellow_page_ad_rates as $yellow_page_ad_rate) {
                                    ?>
                                        <tr>
                                            <td><?=$yellow_page_ad_rate['baseline_listings']; ?></td>
                                            <td><?=$yellow_page_ad_rate['baseline']; ?></td>
                                            <td><?=$yellow_page_ad_rate['additional_line']; ?></td>
                                            <td><?=$yellow_page_ad_rate['half_vertical']; ?></td>
                                            <td><?=$yellow_page_ad_rate['1_vertical']; ?></td>                   
                                        </tr>   
                                    <?php  
                                        }    
                                    }                                        
                                    ?>
                               </tbody>
                           </table> 
                        </div> 

                        <h3><?=the_field('table_4_header');?></h3>
                        <div class="table">   
                            <table cellspacing="0" cellpadding="0" border="0" align="left">
                                <thead>
                                    <tr class="header-row">
                                        <th><strong><?=the_field('t4_col_1_title');?></strong></th>
                                        <th><strong><?=the_field('t4_col_2_title');?></strong></th>
                                        <th><strong><?=the_field('t4_col_3_title');?></strong></th>
                                        <th><strong><?=the_field('t4_col_4_title');?></strong></th>
                                        <th><strong><?=the_field('t4_col_5_title');?></strong></th>
                                    </tr>
                                </thead>
                                <tbody>               
                                    <?php
                                    
                                    if(!empty($marketplace_ad_rates)) {
                                        foreach($marketplace_ad_rates as $marketplace_ad_rate) {
                                    ?>
                                        <tr>
                                            <td><?=$marketplace_ad_rate['t4_space']; ?></td>
                                            <td><?=$marketplace_ad_rate['t4_1x']; ?></td>
                                            <td><?=$marketplace_ad_rate['t4_3x']; ?></td>
                                            <td><?=$marketplace_ad_rate['t4_6x']; ?></td>
                                            <td><?=$marketplace_ad_rate['t4_12x']; ?></td>                    
                                        </tr>   
                                    <?php  
                                        }    
                                    }                                        
                                    ?>
                               </tbody>
                           </table> 
                        </div> 
                    <?php endwhile; ?>
               
                        <?php endif; ?>
                        <div class="table-footer">     
                            <div class="bottom-content">
                                    <?=$bottom_content;?>    
                            </div>
                        </div> 

                    </div>     

                    </section>

            </article>
            </div>
        </div>

    </div>

<?php get_footer(); ?>