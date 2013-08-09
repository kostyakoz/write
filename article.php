<?php theme_include('header'); ?>


<div class="content-wrapper bg-third padding-top">
        <div class="content">
      
          <h2 class="small-title sans-serif caps">Written <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>. This article is my <?php echo numeral(article_id()); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long.</h2>
      
          <h2 class="h2"><?php echo article_title(); ?></h2>
          
          <p><?php echo article_markdown(); ?></p>
        </div>
</div>

<?php theme_include('footer'); ?>