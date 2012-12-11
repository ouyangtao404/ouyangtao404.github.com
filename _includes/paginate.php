<div id="pagination">
	<div class="pagenavi">
		<span class="page_number">第{{paginator.page}}页/共{{paginator.total_pages}}页</span>
		<a href="/">第一页</a>
		{% if paginator.previous_page %}
		{% if paginator.previous_page == 1 %}
		<a href="/" class="current"><<前一页</a>
		{% else %}
		<a href="/page{{paginator.previous_page}}"><<前一页</a>
		{% endif %}
		{% else %}
		<span><<前一页</span>
		{% endif %}
		{% for count in (2..paginator.total_pages) limit:8 %}
		{% if count == paginator.page %}
		<span class="current-page">{{count}}</span>
		{% else %}
		<a href="/page{{count}}">{{count}}</a>
		{% endif %}
		{% endfor %}
		
		{% if paginator.next_page %}
		<a href="/page{{paginator.next_page}}">后一页>></a>
		{% else %}
		<span>后一页>></span>
		{% endif %}
		<a href="/page{{paginator.total_pages}}">最后一页</a>
	</div>
</div>