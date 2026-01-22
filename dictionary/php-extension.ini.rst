.. _php-extension:
.. meta::
	:description:
		PHP Extensions: Extensions are PHP module system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Extensions
	:twitter:description: PHP Extensions: Extensions are PHP module system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Extensions
	:og:type: article
	:og:description: Extensions are PHP module system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-extension.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHP Extensions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 07:52:05 +0000","dateModified":"Thu, 22 Jan 2026 07:52:05 +0000","description":"Extensions are PHP module system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Extensions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Extensions
--------------

Extensions are PHP module system. They are compiled into PHP, and offer extra features, such as functions, classes, traits and directive.

Extensions are published in the PECL repository. Some are available by default, in the PHP standard configuration.

.. code-block:: php
   
   <?php
   
   // Example with the ext/pspell extensions, for orthographic checks
   $pspell = pspell_new("en");
   
   if (pspell_check($pspell, "testt")) {
       echo "This is a valid spelling";
   } else {
       echo "Sorry, wrong spelling";
   }
   ?>


`Documentation <https://www.php.net/manual/en/install.pecl.php>`__
