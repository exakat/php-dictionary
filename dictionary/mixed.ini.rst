.. _mixed:
.. meta::
	:description:
		Mixed: A special type that represents any available type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mixed
	:twitter:description: Mixed: A special type that represents any available type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Mixed
	:og:type: article
	:og:description: A special type that represents any available type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mixed.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Mixed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A special type that represents any available type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Mixed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Mixed
-----

A special type that represents any available type. It is equivalent to not explicitly setting the type, though it is now explicitly done. 

A ``mixed`` type may be also represented by a union of all possible types. 

``mixed`` is useful when literally any type should be supported, such as with a cache system. Yet, it is usually recommended to consider reducing the number of possible types by using a common interface or a union type. 


.. code-block:: php
   
   <?php
   
   function cache(string $name, mixed $value) : bool {
   	static $cache = [];
   	
   	$cache[$name] = $value;
   	
   	return true;
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.mixed>`__

See also `Mixed Type PHP 8 <https://www.amitmerchant.com/mixed-type-php8/>`_

Related : :ref:`Type System <type>`

Added in PHP 8.0+
