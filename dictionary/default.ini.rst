.. _default:
.. meta::
	:description:
		Default: default is a PHP keyword, used with switch() and match() structures.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Default
	:twitter:description: Default: default is a PHP keyword, used with switch() and match() structures
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Default
	:og:type: article
	:og:description: default is a PHP keyword, used with switch() and match() structures
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/default.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Default","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"default is a PHP keyword, used with switch() and match() structures","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Default.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Default
-------

default is a PHP keyword, used with switch() and match() structures. It represents any case that was not already considered.

.. code-block:: php
   
   <?php
   
   switch ($i) {
       case 0:
           echo "i equals 0";
           break;
       case 1:
           echo "i equals 1";
           break;
       default 2:
           echo "i is not 0 nor 1";
           break;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.switch.php>`__

Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Case <case>`
