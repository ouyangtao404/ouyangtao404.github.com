<div class="meta">
	<span class="user">TAGS：</span>
	<span class="tags">
		{% if(site.related_posts.size != 0) %}
			{% for tag in page.tags %}
			<a href="{{ BASE_URL }}{{ site.sort.tags }}#{{ tag }}-ref">{{ tag }}</a>
			{% endfor %} 
		{% else %}
			木有	
		{% endif %}
	</span>
</div>