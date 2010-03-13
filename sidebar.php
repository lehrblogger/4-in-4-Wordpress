<div id="side">

<div id="box"><h3>Events</h3>
<li><a href="http://4-in-4.com/category/mar-2010/">4-in-4 March 2010</a></li>
<li><a href="http://4-in-4.com/category/aug-2008/">5-in-5 August 2008</a></li>
</div>

<div id="box"><h3>Daily Posts</h3>
<li><a href="http://4-in-4.com/category/day-1/">Day 1</a></li>
<li><a href="http://4-in-4.com/category/day-2/">Day 2</a></li>
<li><a href="http://4-in-4.com/category/day-3/">Day 3</a></li>
<li><a href="http://4-in-4.com/category/day-4/">Day 4</a></li>
<li><a href="http://4-in-4.com/category/day-5/">Day 5</a></li>
</div>


<div id="box"><h3>Other Events</h3>
<?php get_links(2, '<li>', '</li>','', TRUE, 'url', FALSE); ?>
</div>

<div id="box"><a href="<?php bloginfo('rss2_url'); ?>"><img style="float:left; border:none;" src="<?php bloginfo('stylesheet_directory'); ?>/images/feed.png" alt="feed"></a><h3>Search</h3><br />


<div id="centered"> <form action="<?php bloginfo('siteurl'); ?>" method="get">			<input value="" name="s" id="s" />
			<input type="hidden" id="searchsubmit" />
	</form><p style="font-size:90%; color:#aaa">type and hit 'enter'</p></div></div>

</div>
