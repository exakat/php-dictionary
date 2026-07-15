.. _nullsafe:
.. meta::
	:description:
		Nullsafe: A nullsafe operator is able to carry a function or fail graciously to ``null``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nullsafe
	:twitter:description: Nullsafe: A nullsafe operator is able to carry a function or fail graciously to ``null``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nullsafe
	:og:type: article
	:og:description: A nullsafe operator is able to carry a function or fail graciously to ``null``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nullsafe.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/nullsafe.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/nullsafe.ini.html","name":"Nullsafe","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 10:12:32 +0000","dateModified":"Mon, 29 Jun 2026 10:12:32 +0000","description":"A nullsafe operator is able to carry a function or fail graciously to ``null``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Nullsafe.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Nullsafe
--------

A nullsafe operator is able to carry a function or fail graciously to ``null``. In particular, it won't stop the execution with a fatal error. 

There are two PHP operators that are nullsafe: 

+ nullsafe object operator ``?->``
+ nullsafe-coalesce ``??``.

.. code-block:: php
   
   <?php
   
       $a = foo();
       
       $b = $a?->method();
       
       $b = $a?->chain1?->chain2?->method();
       
       // foo may return null
       function foo() : ?A { }
   
   ?>


`Documentation <https://www.php.net/oop5.basic>`__

See also `Mastering Null Safety in PHP 8: A Comprehensive Guide to Using the Null Safe Operator <https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b>`_ and `PHP 8.0: Null-safe operator <https://php.watch/versions/8.0/null-safe-operator>`_.

Related : :ref:`Object Operator -> <object-operator>`, :ref:`Coalesce Operator <coalesce>`, :ref:`Streamlining <streamlining>`

Added in PHP 8.0
