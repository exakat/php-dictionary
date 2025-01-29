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

A wither method is a function in an immutable class that creates a new object with a modified property instead of changing the original object.
It is similar to a setter, but instead of modifying the existing instance, it returns a clone of the instance with the updated value.

.. code-block:: php
   
   <?php
   
   class X {
       private A $property;
       
       // setter
       public function setProperty(A $property): static {
           $this->property = $property;

           return $this;
       }
   
       // wither
       public function withProperty(A $property) : static {
           $clone = (clone) $this;
           $clone->property = $property;

           return $clone;
       }
   }


`Documentation <https://projectlombok.org/features/With>`__

See also `RFC: Accessors <https://wiki.php.net/rfc/property_accessors>`_

Related : :ref:`Class <class>`, :ref:`Class Setter Method <setter>`, :ref:`Immutable Object <immutable>`
