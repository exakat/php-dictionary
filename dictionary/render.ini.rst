.. _render:
.. meta::
	:description:
		Rendering: Rendering is the action to take a template and its related data, to produce a target format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Rendering
	:twitter:description: Rendering: Rendering is the action to take a template and its related data, to produce a target format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Rendering
	:og:type: article
	:og:description: Rendering is the action to take a template and its related data, to produce a target format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/render.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Rendering","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 13:19:03 +0000","dateModified":"Thu, 22 Jan 2026 13:19:03 +0000","description":"Rendering is the action to take a template and its related data, to produce a target format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Rendering.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Rendering
---------

Rendering is the action to take a template and its related data, to produce a target format. 

Usually, the rules to render the format are complex.

For example, rendering an HTML page, javascript, PDF, YAML, etc..

.. code-block:: php
   
   <?php
   
   $name = "elephpant";
   $template = "Hello NAME";
   
   // very simple rendering
   
   echo str_replace('NAME', $name, $template);
   
   ?>


Related : :ref:`View <view>`, :ref:`Template <template>`

Related packages : `friendsofcake/cakepdf <https://packagist.org/packages/friendsofcake/cakepdf>`_
