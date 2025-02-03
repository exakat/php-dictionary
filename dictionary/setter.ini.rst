.. _setter:
.. meta::
	:description:
		Class Setter Method: Setters are methods used to give the values of a property.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Setter Method
	:twitter:description: Class Setter Method: Setters are methods used to give the values of a property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Setter Method
	:og:type: article
	:og:description: Setters are methods used to give the values of a property
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/setter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Class Setter Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Setters are methods used to give the values of a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Setter Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Setter Method
-------------------

Setters are methods used to give the values of a property. Setters may apply some filtering and validation before accepting the value.

Setters are usually created with a getter method.


.. code-block:: php
   
   <?php
   
   class x {
       private $property;
       
       public function setProperty($value) {
           $this->property = $value;
       }
   }
   
   ?>


`Documentation <https://thisinterestsme.com/php-getters-and-setters/>`__

See also `What are getters and setters methods in PHP? <https://www.tutorialspoint.com/what-are-getters-and-setters-methods-in-php>`_

Related : :ref:`Class <class>`, :ref:`Class Getter Method <getter>`, :ref:`Class Wither Method <wither>`

Added in PHP 5.0+
