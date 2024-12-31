.. _wither:
.. meta::
	:description:
		Class Wither Method: With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Wither Method
	:twitter:description: Class Wither Method: With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Wither Method
	:og:type: article
	:og:description: With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wither.ini.html
	:og:locale: en


Class Wither Method
-------------------

With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself.  


.. code-block:: php
   
   <?php
   
   class x {
       private A $property;
       
       // getter
       public function getProperty() : A {
           return $this->property;
       }
   
       // wither
       public function withProperty() : A{
           return clone $this->property;
       }
   }
   
   ?>


`Documentation <https://projectlombok.org/features/With>`__

See also `RFC: Accessors <https://wiki.php.net/rfc/property_accessors>`_

Related : :ref:`Classes <class>`, :ref:`Class Setter Method <setter>`, :ref:`Class Getter Method <getter>`
