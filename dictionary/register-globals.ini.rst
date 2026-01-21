.. _register-globals:
.. meta::
	:description:
		Register Globals: Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Register Globals
	:twitter:description: Register Globals: Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Register Globals
	:og:type: article
	:og:description: Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/register-globals.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Register Globals","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:48:22 +0000","dateModified":"Wed, 21 Jan 2026 08:48:22 +0000","description":"Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Register Globals.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Register Globals
----------------

Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES. 

This meant that the initial set of variables in an application was not known, as they would depend on the incoming data. 

Register-globals has been removed in PHP 5.4.

.. code-block:: php
   
   <?php
   	// $_GET['foo'] = 'bar';
   	
   	echo $foo;
   	
   	// $_GET['_SESSION']['logged'] = '1';
   	
   ?>


`Documentation <https://www.mediawiki.org/wiki/Register_globals>`__
