<div class="meta">
	<span class="user">相关文章：</span>
	<span class="tags">
		
		{% if(site.related_posts.size != 0) %}
	  	<ul class="posts">
		    {% for post in site.related_posts limit:3 %}
		    	<a href="{{ post.url }}">{{ post.title }}</a>
		    {% endfor %}
	  	</ul>
		{% else %}
			木有
		{% endif %}
		
	</span>
</div>



