.. _getter:
.. meta::
	:description:
		Class Getter Method: Getters are methods used to access the values of a property.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Getter Method
	:twitter:description: Class Getter Method: Getters are methods used to access the values of a property
	:twitter:creator: @exakat
	:og:title: Class Getter Method
	:og:type: article
	:og:description: Getters are methods used to access the values of a property
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/getter.ini.html
	:og:locale: en


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

Related : :ref:`Classes <class>`, :ref:`Class Setter Method <setter>`, :ref:`Class Wither Method <wither>`

Added in PHP 5.0+
