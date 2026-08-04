.. _invalidargumentexception:
.. meta::
	:description:
		InvalidArgumentException: ``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: InvalidArgumentException
	:twitter:description: InvalidArgumentException: ``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: InvalidArgumentException
	:og:type: article
	:og:description: ``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/invalidargumentexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/invalidargumentexception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/invalidargumentexception.ini.html","name":"InvalidArgumentException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:45:53 +0000","dateModified":"Mon, 03 Aug 2026 16:45:53 +0000","description":"``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/InvalidArgumentException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


InvalidArgumentException
------------------------

``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type. It is a ``LogicException``, and it may be thrown when using SPL classes.

.. code-block:: php
   
   <?php
   
       function foo(string $a) {}
       
       // OK
       foo("abc");
       
       // KO : invalid argument
       foo(12);
   
   ?>


`Documentation <https://www.php.net/manual/en/class.invalidargumentexception.php>`__

See also `How to Handle InvalidArgument Exception in PHP <https://rollbar.com/blog/php-invalidargumentexception/>`_.

Related : :ref:`LogicException <logicexception>`
