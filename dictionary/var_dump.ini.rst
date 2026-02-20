.. _var_dump:
.. meta::
	:description:
		var_dump(): var_dump() displays the information in a variable or any data container.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: var_dump()
	:twitter:description: var_dump(): var_dump() displays the information in a variable or any data container
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: var_dump()
	:og:type: article
	:og:description: var_dump() displays the information in a variable or any data container
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/var_dump.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"var_dump()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:23:04 +0000","dateModified":"Thu, 19 Feb 2026 22:23:04 +0000","description":"var_dump() displays the information in a variable or any data container","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/var_dump().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


var_dump()
----------

var_dump() displays the information in a variable or any data container. It is a debugging function.

var_dump() is one of the most famous PHP function. It is often related to print_r(). 

.. code-block:: php
   
   <?php
   
   $a = true;
   var_dump($a);
   // bool(true)
   
   ?>


`Documentation <https://www.php.net/var_dump>`__

Related : :ref:`print_r() <print_r>`

Related packages : `koriym/printo <https://packagist.org/packages/koriym/printo>`_, `symfony/var-dumper <https://packagist.org/packages/symfony/var-dumper>`_, `spiral/dumper <https://packagist.org/packages/spiral/dumper>`_
