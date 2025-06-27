.. _dynamic-loading:
.. meta::
	:description:
		Dynamic Loading: Dynamic Loading is related to the loading of PHP extensions, at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Loading
	:twitter:description: Dynamic Loading: Dynamic Loading is related to the loading of PHP extensions, at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Loading
	:og:type: article
	:og:description: Dynamic Loading is related to the loading of PHP extensions, at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-loading.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Dynamic Loading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 26 Jun 2025 04:48:31 +0000","dateModified":"Thu, 26 Jun 2025 04:48:31 +0000","description":"Dynamic Loading is related to the loading of PHP extensions, at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Loading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic Loading
---------------

Dynamic Loading is related to the loading of PHP extensions, at execution time. 

Most of the time, the extensions are compiled with PHP, and loaded at startup. For development purposes, or for distribution purposes, some libraries may be loaded at execution time, with the dl() function.

Dl() calls are considered bad for performances and for security. 



.. code-block:: php
   
   <?php
       // add extra features to PHP
       dl('ldap.so');
   ?>
   


`Documentation <https://www.php.net/manual/en/function.dl.php>`__
