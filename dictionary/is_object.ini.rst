.. _is_object:
.. meta::
	:description:
		is_object(): ``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is_object()
	:twitter:description: is_object(): ``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: is_object()
	:og:type: article
	:og:description: ``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/is_object.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"is_object()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_object().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


is_object()
-----------

``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class. It is the equivalent of ``object`` type, which cannot be used with ``instanceof``; or the ``(object)`` cast, that turns a value into an object of class ``stdClass``.

is_object() is rarely used, as ``instanceof`` with the expected class or interface is more precise.

.. code-block:: php
   
   <?php
   
   var_dump(is_object((object)[])); // true
   
   $x = new stdClass();
   var_dump(is_object($x)); // true
   
   $x = 1;
   var_dump(is_object($x)); // false
   
   ?>


`Documentation <https://www.php.net/manual/en/function.is-object.php>`__

Related : :ref:`instanceof <instanceof>`, :ref:`stdclass <stdclass>`, :ref:`is_a() <is_a>`
