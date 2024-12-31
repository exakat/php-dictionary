.. _-__clone:
.. meta::
	:description:
		__clone() Method: To clone an object is the creation of a new distinct object, from an existing one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __clone() Method
	:twitter:description: __clone() Method: To clone an object is the creation of a new distinct object, from an existing one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __clone() Method
	:og:type: article
	:og:description: To clone an object is the creation of a new distinct object, from an existing one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__clone.ini.html
	:og:locale: en


__clone() Method
----------------

To clone an object is the creation of a new distinct object, from an existing one. This is basically a copy, although the object itself is multiplied by call the clone operator.

By default PHP does a shallow clone, duplicating the scalars (string, integer...) and keeping the same reference to objects. To make a deep clone, the class must define the ``__clone`` magic method.

Cloning is similar to creating another object of the same class, without requiring all the constructor arguments.


.. code-block:: php
   
   <?php
   
   $spike = new Dog('Spike', 'Teckel', 'red');
   $medor = clone $spike;
   
   $medor->setCollar('green'); // distinguish spike and medor by collar
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.cloning.php>`__

See also `How to clone an object in PHP <https://linuxhint.com/cloning_objects_php/>`_

Related : :ref:`Readonly <readonly>`, :ref:`Magic Methods <magic-method>`, :ref:`Deep Clone <deep-clone>`, :ref:`Shallow Clone <shallow-clone>`
