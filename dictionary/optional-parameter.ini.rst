.. _optional-parameter:
.. meta::
	:description:
		Optional Parameter: Optional parameter are parameter fitted with a default value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Optional Parameter
	:twitter:description: Optional Parameter: Optional parameter are parameter fitted with a default value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Optional Parameter
	:og:type: article
	:og:description: Optional parameter are parameter fitted with a default value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/optional-parameter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Optional Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:22:11 +0000","dateModified":"Tue, 20 Jan 2026 07:22:11 +0000","description":"Optional parameter are parameter fitted with a default value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Optional Parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Optional Parameter
------------------

Optional parameter are parameter fitted with a default value. They may then be skipped when the function is called. 

Optional parameter should be the last parameters : otherwise, PHP will have trouble figuring out which parameter uses which value.

.. code-block:: php
   
   <?php
   
   function foo($a, $b = 2) { }
   
   // $b will be 2, using the default value
   foo(1); 
   
   // $b will be 3
   foo(1, 3); 
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__
