
<!-- Pagination links -->
<!-- <div class="pagination">
  {% if paginator.previous_page %}
    <a href="/page{{paginator.previous_page}}" class="previous">Previous</a>
  {% else %}
    <span class="previous">Previous</span>
  {% endif %}
  <span class="page_number ">Page: {{paginator.page}} of {{paginator.total_pages}}</span>
  {% if paginator.next_page %}
    <a href="/page{{paginator.next_page}}" class="next ">Next</a>
  {% else %}
    <span class="next ">Next</span>
  {% endif %}
</div> -->

<!-- page-navigation -->
<div class="page-navigation cf">
	{% if paginator.previous_page %}
    <div class="nav-next"><a href="/page{{paginator.previous_page}}">Previous</a></div>
    {% else %}
    <div class="nav-next"><a href="javascript:void(0);" class="unable">Previous</a></div>
    {% endif %}
	<span class="page_number ">Page: {{paginator.page}} of {{paginator.total_pages}}</span>
	{% if paginator.next_page %}
    <div class="nav-previous"><a href="/page{{paginator.next_page}}">Next</a></div>
  	{% else %}
	<div class="nav-previous"><a href="javascript:void(0);" class="unable">Next</a></div>
  	{% endif %}
	
</div>
<!--ENDS page-navigation -->