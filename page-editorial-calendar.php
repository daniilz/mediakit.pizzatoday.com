<?php

/*

Template Name: Editorial Calendar Template

*/

?>

<?php get_header(); ?>
     
<div class="main-container page-editorial-cal">
    <div class="main wrapper clearfix">
        <div id="contentwrapper">
            <div class="content-right content-right-pdf">
                  <div class="pdfs-container">
                      <span class="pdf-link"><a href="<?=the_field('pdf_1_link');?>" target="_blank"><img src="/wp-content/themes/ptmk/images/PDFlogo.png" alt="pdf" class="PDF_LogoLink"><?=the_field('pdf_1_title');?></a></span>
                  </div>
            </div> 
            <article>
                <section>
                    <div class="table-header">
                        <span class="title"><h3><? the_field('page_title'); ?></h3></span>                     
                    </div>            
                    <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); 
                        $print_highlights = get_field('editorial_calendar');
                        $object = get_field_object('editorial_calendar');
                    ?>
                    <div class="table">     
                    <table cellspacing="0" cellpadding="0" border="0" align="left">
                        <thead>
                            <tr class="header-row">
                                <th><strong><?php echo $object['sub_fields'][0]['label'] ?></strong></th>
                                <th><strong><?php echo $object['sub_fields'][1]['label'] ?></strong></th>
                                <th><strong><?php echo $object['sub_fields'][2]['label'] ?></strong></th>
                                <th><strong><?php echo $object['sub_fields'][3]['label'] ?></strong></th>
                                <th><strong><?php echo $object['sub_fields'][4]['label'] ?></strong></th>
                                <th><strong><?php echo $object['sub_fields'][5]['label'] ?></strong></th>
                            </tr>
                        </thead>
                        <tbody>       
                            <?php                                                  
                            if(!empty($print_highlights)) {
                                foreach($print_highlights as $print_highlight) { 
                            ?>
                                <tr>
                                    <td><strong><?=$print_highlight['issue']; ?></strong></td>
                                    <td><?=$print_highlight['reservations_due']; ?></td>
                                    <td><?=$print_highlight['materials_due']; ?></td>
                                    <td><?=$print_highlight['issue_theme']; ?></td>
                                    <td><?=$print_highlight['notes']; ?></td>         
                                </tr>   
                            <?php  
                                }    
                            }                                        
                            ?>                                          
                       </tbody>
                    </table>
                    <?php if(get_field('note')) { ?> 
                        <div class="note">
                            <span><? the_field('note'); ?></span>
                        </div><br />
                    <? } ?>  
                    <?php if(get_field('pdf_title_1')) { ?>   
                        <div class="table-footer">
                            <span class="pdf-link"><a href="<?=the_field('pdf_2_link');?>" target="_blank"><img src="/wp-content/themes/ptmk/images/PDFlogo.png" alt="pdf" class="PDF_LogoLink"><?=the_field('pdf_2_title');?></a></span>
                        </div><br />
                    <? } ?>    
                    </div>        
                    <?php endwhile; ?>
                <?php endif; ?>
                </section>
            </article>
        </div>
    </div>
</div>

<?php get_footer(); ?>