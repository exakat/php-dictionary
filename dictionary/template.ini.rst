.. _template:
.. meta::
	:description:
		Template: A template is a preset document, filled with values in placeholders, to display the resulting data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Template
	:twitter:description: Template: A template is a preset document, filled with values in placeholders, to display the resulting data
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Template
	:og:type: article
	:og:description: A template is a preset document, filled with values in placeholders, to display the resulting data
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/template.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Template","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:13:36 +0000","dateModified":"Thu, 02 Jul 2026 08:13:36 +0000","description":"A template is a preset document, filled with values in placeholders, to display the resulting data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Template.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Template
--------

A template is a preset document, filled with values in placeholders, to display the resulting data. This is also called a view.

PHP used to be known as a template engine. Nowadays, template engines are written with PHP and set up a specific set of instruction. 

Templates may be produced in any file format, such as HTML, CSS, Javascript, JSON, PDF, URL, Markdown, etc. 

Template may be large: they are then broken down into smaller and reusable sub-templates.

There are many PHP template packages, such as Twig, Latte, Blade, smarty, etc.

.. code-block:: php
   
   <?php
   
       // piece 
       echo "<h1>".$name."</h1>";
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Web_template_system>`__

See also `How WordPress Tells which Template to Load for a URL <https://www.virtualcuriosities.com/articles/5106/how-wordpress-tells-which-template-to-load-for-a-url>`_.

Related : :ref:`View In Presentation <view-presentation>`, :ref:`HyperText Markup Language (HTML) <html>`, :ref:`CSS <css>`, :ref:`PDF <pdf>`, :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Markdown <markdown>`, :ref:`Code Generator <code-generator>`, :ref:`Framework <framework>`, :ref:`Render <render>`

Related packages : `twig/twig <https://packagist.org/packages/twig/twig>`_, `smarty/smarty <https://packagist.org/packages/smarty/smarty>`_, `latte/latte <https://packagist.org/packages/latte/latte>`_, `twig/twig <https://packagist.org/packages/twig/twig>`_, `jenssegers/blade <https://packagist.org/packages/jenssegers/blade>`_
