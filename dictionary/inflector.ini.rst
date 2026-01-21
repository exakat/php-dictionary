.. _inflector:
.. meta::
	:description:
		Inflector: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inflector
	:twitter:description: Inflector: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inflector
	:og:type: article
	:og:description: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inflector.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Inflector","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"An inflector processes strings to adapt them for various situations, such as singular\/plural, or for uppercase\/lowercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Inflector.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Inflector
---------

An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase.

.. code-block:: php
   
   <?php
   
   // example using doctrine/inflector
   
   $inflector = InflectorFactory::create()->build();
   echo $inflector->singularize('browsers'); // browser
   
   
   ?>


See also https://www.doctrine-project.org/projects/inflector.html

Related : :ref:`Internationalization <localisation>`

Related packages : `doctrine/inflector <https://packagist.org/packages/doctrine/inflector>`_, `symfony/inflector <https://packagist.org/packages/symfony/inflector>`_, `cakephp/utility <https://packagist.org/packages/cakephp/utility>`_
