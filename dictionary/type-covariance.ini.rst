.. _type-covariance:
.. _covariance:
.. meta::
	:description:
		Covariance: Covariance allows a child's method to return a more specific type than the return type of its parent's method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Covariance
	:twitter:description: Covariance: Covariance allows a child's method to return a more specific type than the return type of its parent's method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Covariance
	:og:type: article
	:og:description: Covariance allows a child's method to return a more specific type than the return type of its parent's method
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-covariance.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Covariance","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:49:55 +0000","dateModified":"Thu, 22 Jan 2026 12:49:55 +0000","description":"Covariance allows a child's method to return a more specific type than the return type of its parent's method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Covariance.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Covariance
----------

Covariance allows a child's method to return a more specific type than the return type of its parent's method.

This means that the type of the return value in the method ``foo`` of the child class ``X`` can be a child of the type of the return value in the method ``foo`` of the parent class ``W``. 

Less specific types can be : the same type ``W``, a child class of the ``W`` type (here ``X``), an intersectional type, such as ``W&Z``. In particular, the type may not become nullable. 

It cannot be a totally different type, an union type, such as ``W|A``, any class that implements the same interfaces than ``W``, or a different scalar type. 


.. code-block:: php
   
   <?php
   
   class V {}
   
   class W extends V {
       function foo() : W { }
   }
   
   class X extends W {
       // This method returns an object compatible with w, but more specific
       function foo() : X { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.variance.php>`__

See also `Type variance in PHP <https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html>`_, `Covariance and Contravariance in PHP <https://dev.to/ashallendesign/covariance-and-contravariance-in-php-3cim>`_

Related : :ref:`Contravariance <type-contravariance>`

Added in PHP 7.4+
