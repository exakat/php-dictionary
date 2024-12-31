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


Template
--------

A template is a preset document, filled with values in placeholders, to display the resulting data. This is also called a view.

PHP used to be known as a template engine. Nowadays, template engines are written in PHP. 

Templates may be produced in any file format : HTML, CSS, Javascript, JSON, PDF, URL, etc. 

Template may be large : they are then broken down into smaller and reusable sub-templates.

Some template packages : Twig, Latte, Blade, smarty.


.. code-block:: php
   
   
   <?php
   
   // piece 
   echo "<h1>".$name."</h1>";
   
   ?>
   


Related : :ref:`View In Presentation <view-presentation>`

Related packages : `twig/twig <https://packagist.org/packages/twig/twig>`_, `smarty/smarty <https://packagist.org/packages/smarty/smarty>`_, `latte/latte <https://packagist.org/packages/latte/latte>`_, `twig/twig <https://packagist.org/packages/twig/twig>`_
