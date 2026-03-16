.. _render:
.. _rendering:
.. meta::
	:description:
		Render: To render, or renderingm is the action to take a template and its related data, to produce a target format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Render
	:twitter:description: Render: To render, or renderingm is the action to take a template and its related data, to produce a target format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Render
	:og:type: article
	:og:description: To render, or renderingm is the action to take a template and its related data, to produce a target format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/render.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Render","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"To render, or renderingm is the action to take a template and its related data, to produce a target format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Render.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Render
------

To render, or renderingm is the action to take a template and its related data, to produce a target format. 

Usually, the rules to render the format are complex: they cannot be reduced to simple commands, so they are collected in an engine, called the renderer.

For example, rendering an HTML page, javascript, PDF, YAML, etc.. 

Rendering is related to templates, formats and optimisation.

.. code-block:: php
   
   <?php
   
   $name = "elephpant";
   $template = "Hello NAME";
   
   // very simple rendering
   
   echo str_replace('NAME', $name, $template);
   
   ?>


Related : :ref:`View <view>`, :ref:`Template <template>`, :ref:`Renderer <renderer>`, 

Related packages : `friendsofcake/cakepdf <https://packagist.org/packages/friendsofcake/cakepdf>`_
