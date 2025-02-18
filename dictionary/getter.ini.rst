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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Class Getter Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Feb 2025 01:48:35 +0000","dateModified":"Tue, 18 Feb 2025 01:48:35 +0000","description":"Getters are methods used to access the values of a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Getter Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Getter Method
-------------------

Getters are methods used to access the values of a property. Getters may include some formatting. 

Getters are usually created with a setter method.


.. code-block:: php
   
   <?php
   
   class x {
       private $property;
       
       public function getProperty() {
           return $this->property;
       }
   }
   
   ?>


`Documentation <https://thisinterestsme.com/php-getters-and-setters/>`__

Related : :ref:`Class <class>`, :ref:`Class Setter Method <setter>`, :ref:`Class Wither Method <wither>`

Added in PHP 5.0+
