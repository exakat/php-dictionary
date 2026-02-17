.. _object-nullsafe-operator:
.. _nullsafe-operator:
.. meta::
	:description:
		Object Nullsafe Operator ?->: The object nullsafe operator is an operator which gives access to properties and methods of an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Nullsafe Operator ?->
	:twitter:description: Object Nullsafe Operator ?->: The object nullsafe operator is an operator which gives access to properties and methods of an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object Nullsafe Operator ?->
	:og:type: article
	:og:description: The object nullsafe operator is an operator which gives access to properties and methods of an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-nullsafe-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Object Nullsafe Operator ?->","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Feb 2026 21:35:51 +0000","dateModified":"Mon, 16 Feb 2026 21:35:51 +0000","description":"The object nullsafe operator is an operator which gives access to properties and methods of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object Nullsafe Operator ?->.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object Nullsafe Operator ?->
----------------------------

The object nullsafe operator is an operator which gives access to properties and methods of an object.

Depending on the context, those properties and methods must be public or protected.

Object Nullsafe Operator is directly related to the Object operator : the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.

.. code-block:: php
   
   <?php
   
       $array = ['a' => (new stdClass)?->a, ];
       
       // displays 1
       echo $array['a']?->a;
       
       // displays null, so nothing
       echo $array['b']?->a;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

See also https://www.delftstack.com/howto/php/php-object-operator/

Related : :ref:`Scope Resolution Operator :: <scope-resolution-operator>`, :ref:`Object Operator -> <object-operator>`
