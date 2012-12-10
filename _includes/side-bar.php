<!-- sidebar -->
<aside id="sidebar">
	
	<ul>
		<li class="block" style="">
    		<h4 class="heading">blog information</h4>
    		<span>博客字数：{{ content | number_of_words }}</span><br/>
			<span>最后更新时间：{{ site.time | date_to_long_string }}</span><br/>
		</li>
		<!--
		<li class="block" style="">
    		<h4 class="heading">Categories</h4>
			<ul>
				
				<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li>
			
			</ul>
		</li>
		-->
		
	
	</ul>
	
</aside>
<!-- ENDS sidebar -->