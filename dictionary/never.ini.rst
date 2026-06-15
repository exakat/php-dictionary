.. _never:
.. _never-type:
.. meta::
	:description:
		Never Type: ``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Never Type
	:twitter:description: Never Type: ``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Never Type
	:og:type: article
	:og:description: ``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/never.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Never Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Never Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Never Type
----------

``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop.

``never`` is the lowest type available. Nothing can be a sub-type of ``never`` but never can be the subtype of anything.

.. code-block:: php
   
   <?php
   
   function headers() : never {
       headers('Location: https://www.exakat.io/');
       die();
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/noreturn_type>`__

See also `The never Return Type for PHP <https://betterprogramming.pub/the-never-return-type-for-php-802fbe2fa303>`_ and `Using ‘never’ return type in PHP (PHP 8.1+) <https://www.slingacademy.com/article/using-never-return-type-in-php-php-81/>`_.

Related : :ref:`Type System <type>`, :ref:`PHP Natives <native-type>`, :ref:`Return Value <return-value>`, :ref:`Special Types <special-typehint>`

Added in PHP 8.1+
