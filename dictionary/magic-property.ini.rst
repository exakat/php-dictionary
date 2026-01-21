.. _magic-property:
.. _overloaded-property:
.. meta::
	:description:
		Magic Property: Special properties, which are not declared, but dynamically handled by the magic methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Magic Property
	:twitter:description: Magic Property: Special properties, which are not declared, but dynamically handled by the magic methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Magic Property
	:og:type: article
	:og:description: Special properties, which are not declared, but dynamically handled by the magic methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Magic Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"Special properties, which are not declared, but dynamically handled by the magic methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Magic Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Magic Property
--------------

Special properties, which are not declared, but dynamically handled by the magic methods. They do not have specific declaration. 

The magic methods to handle magic properties are :  __get(), __set(), __isset() and __unset().

.. code-block:: php
   
   <?php
   
   class x {
       //
       function __get($name) {
           return 'World!';
       }
   }
   
   $x = new x;
   echo $x->hello; // display World!
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

Related : :ref:`__get() Method <-__get>`, :ref:`__set() Method <-__set>`, :ref:`Magic Constants <magic-constant>`
