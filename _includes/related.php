<div id="related">
  <h2>相关文章：</h2>
  <ul class="posts">
    {% for post in site.related_posts limit:3 %}
      <li><span>{{ post.date | date_to_string }}</span> &raquo; <a href="{{ post.url }}">{{ post.title }}</a></li>
    {% endfor %}
  </ul>
</div>