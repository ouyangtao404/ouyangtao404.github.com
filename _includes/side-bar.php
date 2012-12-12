<!-- sidebar -->
<aside id="sidebar">
	
	<ul>
		
		<li class="block me">
			<iframe width="260" height="100" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=260&height=100&fansRow=2&ptype=1&speed=0&skin=1&isTitle=1&noborder=0&isWeibo=0&isFans=0&uid=1629780185&verifier=81cd8ab8&colors=F3E4C8,F3E4C8,444444,A83E2A,56fc33&dpc=1"></iframe>
		</li>
		
		<li class="block" style="">
    		<span>博客字数：{{ content | number_of_words }}</span><br/>
			<span>最后更新时间：{{ site.time | date_to_long_string }}</span><br/>
		</li>
		<li class="block" style="">
    		<h4 class="heading">分类</h4>
			<ul>
				{% assign categories_list = site.categories %}
				{% include sort/categories/categories.php %}
			</ul>
		</li>
		<li class="block" style="">
    		<h4 class="heading">标签</h4>
			<ul>
				{% assign tags_list = site.tags %}
				{% include sort/tags/tags.php %}
			</ul>
		</li>
	
	</ul>
	
</aside>
<!-- ENDS sidebar -->