.. _primitive-obsession:
.. meta::
	:description:
		Primitive Obsession: Primitive Obsession is when the code uses too many primitive types to represent complex concepts.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Primitive Obsession
	:twitter:description: Primitive Obsession: Primitive Obsession is when the code uses too many primitive types to represent complex concepts
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Primitive Obsession
	:og:type: article
	:og:description: Primitive Obsession is when the code uses too many primitive types to represent complex concepts
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/primitive-obsession.ini.html
	:og:locale: en


Primitive Obsession
-------------------

Primitive Obsession is when the code uses too many primitive types to represent complex concepts.

.. code-block:: php
   
   <?php
   
   class Person
   {
       public string $id;
   
       public string $firstName;
       public string $lastName;
   
       public string $address;
       public string $postCode;
       public string $city;
       public string $country;
   }
   
   ?>


See also `Primitive Obsession <https://refactoring.guru/smells/primitive-obsession>`_

Related : :ref:`Scalar Types <scalar-type>`
