.. _constant-in-trait:
.. meta::
	:description:
		Constants In Trait: Constants were added to trait in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constants In Trait
	:twitter:description: Constants In Trait: Constants were added to trait in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constants In Trait
	:og:type: article
	:og:description: Constants were added to trait in PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-in-trait.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Constants In Trait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:20 +0000","dateModified":"Sun, 25 Jan 2026 20:46:20 +0000","description":"Constants were added to trait in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Constants In Trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Constants In Trait
------------------

Constants were added to trait in PHP 8.3. Before, they were not allowed. 

After PHP 8.3, they are added to the host class, with less precedence than the host own class, but higher precedence than the host parent's one.

.. code-block:: php
   
   <?php
   
   trait t {
       private const A = 1;
   }
   
   ?>


Related : :ref:`Trait <trait>`, :ref:`Static Constant <class-constant>`
