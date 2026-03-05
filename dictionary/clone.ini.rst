.. _clone:
.. meta::
	:description:
		Clone: Clone creates a duplicate of an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Clone
	:twitter:description: Clone: Clone creates a duplicate of an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Clone
	:og:type: article
	:og:description: Clone creates a duplicate of an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/clone.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Clone","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Mar 2026 17:01:38 +0000","dateModified":"Thu, 05 Mar 2026 17:01:38 +0000","description":"Clone creates a duplicate of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Clone.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Clone
-----

Clone creates a duplicate of an object.

By default, PHP creates a shallow clone: it only make a copy of the scalars properties, and it keeps the references and any objects untouched. This means that object properties are shared between an object and its clone. 

To perform a deep clone, aka to clone an object and its referenced properties, there is the magic method ``__clone()``.

Until PHP 8.5, ``clone`` was only an operator. Ever since, it is also a native PHP function, which accepts a second argument to update the public properties. That argument prevents from using the magic method ``__clone``, although both may happen at the same time. When ``__clone`` and ``clone()`` update the same property, the ``clone()`` is applied last, and stays.

Cloning had conflict with the ``readonly`` properties, until updating readonly during the cloning operation was allowed, in PHP 8.5.

.. code-block:: php
   
   <?php
   
       class X {
           protected $property = 1;
           
           function __clone() {
               $this->property = 2;
           }
       }
       
       // instantiation
       $x = new X;
       
       // cloning
       $y = clone $x;
       
       $z2 = clone($x);  // parenthesis are now useful
       echo $z2->property;  // 2
       $z3 = clone($x, ['property' => 3]);
       echo $z3->property;
       
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.cloning.php>`__

See also https://doeken.org/blog/what-happens-when-we-clone, https://www.php.net/manual/en/language.oop5.cloning.php, https://linuxhint.com/cloning_objects_php/, https://jolicode.com/blog/php-clone-all-the-things, https://wiki.php.net/rfc/clone_with_v2

Related : :ref:`Shallow Clone <shallow-clone>`, :ref:`Deep Clone <deep-clone>`, :ref:`Readonly <readonly>`, :ref:`References <reference>`, :ref:`Object <object>`

Added in PHP 4.0+
