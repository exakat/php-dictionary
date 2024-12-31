.. _nullsafe:
.. meta::
	:description:
		Nullsafe: A nullsafe operator is able to carry a function or fail graciously to `null`.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nullsafe
	:twitter:description: Nullsafe: A nullsafe operator is able to carry a function or fail graciously to `null`
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nullsafe
	:og:type: article
	:og:description: A nullsafe operator is able to carry a function or fail graciously to `null`
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nullsafe.ini.html
	:og:locale: en


Nullsafe
--------

A nullsafe operator is able to carry a function or fail graciously to `null`. In particular, it won't stop the execution with a fatal error. 

There are two PHP operators that are nullsafe : 

+ nullsafe object operator `?->`
+ nullsafe-coalesce `??`.


.. code-block:: php
   
   <?php
   
   $a = foo();
   
   $b = $a?->method();
   
   $b = $a?->chain1?->chain2?->method();
   
   // foo may return null
   function foo() : ?A { }
   
   ?>
   


Related : :ref:`Object Operator -> <object-operator>`, :ref:`Coalesce Operator <coalesce>`
