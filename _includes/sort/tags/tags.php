{% comment %}
<!--
The tags_list include is a listing helper for tags.
Usage:
  1) assign the 'tags_list' variable to a valid array of tags.
  2) include JB/tags_list
  example:
    <ul>
   {% assign tags_list = site.tags %}
   {% include sort/tags %}
   </ul>
  
  Notes:
    Tags can be either a Hash of tag objects (hashes) or an Array of tag-names (strings).
    The encapsulating 'if' statement checks whether tags_list is a Hash or Array.
    site.tags is a Hash while page.tags is an array.
    
  This helper can be seen in use at: ../_layouts/default.html
-->
{% endcomment %}
	{% for tag in tags_list %}
		<li class="cat-item">
			<a title="title" href="{{ BASE_PATH }}{{ site.sort.tags }}#{{ tag[0] }}-ref">
				{{ tag[0] }}
				{% if(from_side_bar) %}
				<span class="post-counter">({{ tag[1].size }})</span>
				{% else %}
				<span class="post-counter"> {{ tag[1].size }} </span>
				{% endif %}
			</a>
		</li>
	{% endfor %}
{% assign tags_list = nil %}