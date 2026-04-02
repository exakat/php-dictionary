.. _eponymous:
.. meta::
	:description:
		Eponymous: Eponymous means that it carries the same name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Eponymous
	:twitter:description: Eponymous: Eponymous means that it carries the same name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Eponymous
	:og:type: article
	:og:description: Eponymous means that it carries the same name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/eponymous.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Eponymous","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Apr 2026 11:09:14 +0000","dateModified":"Thu, 02 Apr 2026 11:09:14 +0000","description":"Eponymous means that it carries the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Eponymous.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Eponymous
---------

Eponymous means that it carries the same name. For example, a variable called ``$variable``, or a constant called ``CONSTANT``. 

PHP does not allow every structure to be eponymous. It is not possible to call a class ``class``, but one may call a class anonymous: this won't be eponymous, as an anonymous class doesn't have a name.

.. code-block:: php
   
   <?php
   
       const CONSTANT = 'literal';
       
       $variable = CONSTANT;
   
   ?>


Related : :ref:`Naming <naming>`
