.. _renderer:
.. meta::
	:description:
		Renderer: A renderer is an piece of code that applies the rules to produce a target format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Renderer
	:twitter:description: Renderer: A renderer is an piece of code that applies the rules to produce a target format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Renderer
	:og:type: article
	:og:description: A renderer is an piece of code that applies the rules to produce a target format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/renderer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Renderer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"A renderer is an piece of code that applies the rules to produce a target format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Renderer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Renderer
--------

A renderer is an piece of code that applies the rules to produce a target format. For example, rendering an HTML page, javascript, PDF, YAML, etc..

.. code-block:: php
   
   <?php
   
   $name = "elephpant";
   $template = "Hello NAME";
   
   // very simple rendering
   
   echo str_replace('NAME', $name, $template);
   
   ?>


Related : :ref:`Render <render>`
