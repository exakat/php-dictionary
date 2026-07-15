.. _getter:
.. meta::
	:description:
		Class Getter Method: Getters are methods used to access the values of a property.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Getter Method
	:twitter:description: Class Getter Method: Getters are methods used to access the values of a property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Getter Method
	:og:type: article
	:og:description: Getters are methods used to access the values of a property
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/getter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/getter.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/getter.ini.html","name":"Class Getter Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Getters are methods used to access the values of a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Getter Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Getter Method
-------------------

Getters are methods used to access the values of a property. Getters may include formatting, or not. 

Getters are usually created with a setter method.

Getters are build on top of private properties: that way, the getter is main way to reach the data. 

Getters may be replaced by a property hook.

Getters generates a lot of boilerplate code, as they must be created for each property, and are often reduced to returning the property itself. This does not help performances too, as a call to a property is now replaced by a method call.


.. code-block:: php
   
   <?php
   
       class X {
           private $property;
           
           public function getProperty() {
               return $this->property;
           }
       }
   
   ?>


`Documentation <https://www.geeksforgeeks.org/php/what-are-getters-and-setters-methods-in-php/>`__

Related : :ref:`Class <class>`, :ref:`Class Setter Method <setter>`, :ref:`Class Wither Method <wither>`, :ref:`Property Hook <property-hook>`, :ref:`Visibility <visibility>`, :ref:`Boilerplate <boilerplate>`, :ref:`Encapsulation <encapsulation>`, :ref:`implements <implements>`

Added in PHP 5.0+
