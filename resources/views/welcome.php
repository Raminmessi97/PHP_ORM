{% extends "layouts/layout1.php" %}

{% block title %}Welcome Page{% endblock %}
{% block head %}
    {{ parent() }}
    <style type="text/css">
        .important { color: #336699; }
    </style>
{% endblock %}

{% block content %}
    <h1>Index</h1>
    <p class="important">
        Welcome to my awesome welcomepage.
    </p>

    <ul>

    	{% for article in articles  %}
			<li>{{article.title}}</li>
    	{% endfor %}
    	

    </ul>



{% endblock %}