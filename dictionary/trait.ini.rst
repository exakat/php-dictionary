.. _trait:
.. meta::
	:description:
		Traits: Traits are a mechanism for code reuse in single inheritance languages.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Traits
	:twitter:description: Traits: Traits are a mechanism for code reuse in single inheritance languages
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Traits
	:og:type: article
	:og:description: Traits are a mechanism for code reuse in single inheritance languages
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/trait.ini.html
	:og:locale: en


Traits
------

Traits are a mechanism for code reuse in single inheritance languages.

Traits define methods and properties. They are included in one or several classes by the use of ``use`` expression.


.. code-block:: php
   
   <?php
   
   trait t {
       const CONSTANT = 1;
       
       private $property;
   
       function method();
   }
   
   class x { 
       use t;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.traits.php>`__

See also `Traits are not inherited <https://doeken.org/tip/traits_are_not_inherited>`_, `What are traits <https://riptutorial.com/php/example/10952/what-is-a-trait->`_, `Some lesser known facts of Traits in PHP <https://www.amitmerchant.com/some-lesser-known-facts-traits-php/>`_, `When to use a trait? <https://matthiasnoback.nl/2022/07/when-to-use-a-trait/>`_, `The difference between Traits, Interfaces, and Abstract Classes in PHP <https://aschmelyun.com/blog/the-difference-between-traits-interfaces-and-abstract-classes-in-php/>`_

Related : :ref:`Classes <class>`, :ref:`Use <use>`
