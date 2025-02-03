.. _intersection-type:
.. _intersectional:
.. _intersectional-type:
.. meta::
	:description:
		Intersection Type: Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Intersection Type
	:twitter:description: Intersection Type: Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Intersection Type
	:og:type: article
	:og:description: Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/intersection-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Intersection Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Intersection Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Intersection Type
-----------------

Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type. The individual types are separated with the & operator. 

The value typed with an intersection type must satisfy all the types at the same time. 

Intersection types don't work with scalar values, which are excluding one another. It works with polymorphism, where one object may be of several types at the same time, when implementing interfaces. 


.. code-block:: php
   
   <?php
   
   class x {
   	// Property is of type A, B and C at the same time. 
   	// Two of them have to be interfaces.
       private A & B & C $property;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.intersection>`__

See also `How the New Intersection Types in PHP 8.1 Give You More Flexibility <https://www.howtogeek.com/devops/how-the-new-intersection-types-in-php-8-1-give-you-more-flexibility/>`_

Related : :ref:`Type System <type>`

Added in PHP 8.1
