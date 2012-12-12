{% comment %}
<!--
The categories_list include is a listing helper for categories.
Usage:
  1) assign the 'categories_list' variable to a valid array of tags.
  2) include categories/categories.php
  example:
   <ul>
   {% assign categories_list = site.categories %}
   {% include categories/categories.php %}
   </ul>
  
  Notes:
    Categories can be either a Hash of Category objects (hashes) or an Array of category-names (strings).
    The encapsulating 'if' statement checks whether categories_list is a Hash or Array.
    site.categories is a Hash while page.categories is an array.
    
  This helper can be seen in use at: ../_layouts/default.html
-->
{% endcomment %}

    {% for category in categories_list %}
    	<li class="cat-item">
			<a title="title" href="{{ BASE_PATH }}{{ site.sort.categories }}#{{ category[0] }}-ref">
				{{ category[0] | join: "/" }}
				
				{% if(from_side_bar) %}
				<span class="post-counter">({{ category[1].size }})</span>
				{% else %}
				<span class="post-counter">{{ category[1].size }}</span>
				{% endif %}
			</a>
		</li>
    {% endfor %}

{% assign categories_list = null %}