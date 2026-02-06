.. _throwable:
.. meta::
	:description:
		Throwable: ``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Throwable
	:twitter:description: Throwable: ``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Throwable
	:og:type: article
	:og:description: ``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/throwable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Can only throw objects.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Can only throw objects.html","name":"Throwable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 17:10:49 +0000","dateModified":"Mon, 26 Jan 2026 17:10:49 +0000","description":"``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Throwable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Throwable
---------

``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``.

This interface may be used with catch clauses, to catch everything that is thrown. Yet, this interface cannot be implemented directly. It should be acquired by extending ``Exception``: extending ``Error`` should be avoided.

.. code-block:: php
   
   <?php
   
   class x extends \Exception implements \Throwable {}
   
   throw new X();
   
   ?>


`Documentation <https://www.php.net/manual/en/class.throwable.php>`__

Related : :ref:`Catch <catch>`, :ref:`Exception <exception>`, :ref:`Error <error>`, :ref:`Type Error <typerror>`

Added in PHP 7.0
