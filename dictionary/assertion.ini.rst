.. _assertion:
.. _assert:
.. meta::
	:description:
		Assertions: Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Assertions
	:twitter:description: Assertions: Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Assertions
	:og:type: article
	:og:description: Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/assertion.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Assertions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Assertions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Assertions
----------

Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production. 

Assertions are disabled in production, by using the `zend.assertions` directive. Then, they are said 'zero-cost' : they are completely removed from the code, and not executed.

Assertions are a development tool, and should not be used in production. Be aware that the removal of the assertion may leave the system running with unchecked data. 

There are packages providing assertions features and more.

.. code-block:: php
   
   <?php
   
   $a = foo();
   assert($a !== null, 'Sorry, we got a NULL from foo()!');
   
   ?>


`Documentation <https://www.php.net/manual/en/function.assert.php>`__

See also https://www.exakat.io/en/php-assertions-usage/, https://aleksandertabor.com/blog/assertions-in-php/

Related packages : `webmozart/assert <https://packagist.org/packages/webmozart/assert>`_, `beberlei/assert <https://packagist.org/packages/beberlei/assert>`_
