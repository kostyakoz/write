<?php theme_include('header'); ?>


<div class="content-wrapper bg-third padding-top">
        <div class="content">
      
          <h2 class="small-title sans-serif caps">Written <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>. This article is my <?php echo numeral(article_id()); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long.</h2>
      
          <h2 class="h2"><?php echo article_title(); ?></h2>
          
          <p><?php echo article_markdown(); ?></p>
        </div>
        <?php if(comments_open()): ?>
        <hr>
      
      <div class="content">
     
      <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'athlk'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
          
        </div>
<?php endif; ?>
        
</div>

<?php theme_include('footer'); ?>