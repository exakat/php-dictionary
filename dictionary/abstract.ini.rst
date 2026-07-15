.. _abstract:
.. meta::
	:description:
		Abstract Keyword: PHP has ``abstract`` classes, properties and methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Abstract Keyword
	:twitter:description: Abstract Keyword: PHP has ``abstract`` classes, properties and methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Abstract Keyword
	:og:type: article
	:og:description: PHP has ``abstract`` classes, properties and methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/abstract.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/abstract.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/abstract.ini.html","name":"Abstract Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 21:34:49 +0000","dateModified":"Fri, 10 Jul 2026 21:34:49 +0000","description":"PHP has ``abstract`` classes, properties and methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Abstract Keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Abstract Keyword
----------------

PHP has ``abstract`` classes, properties and methods. Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method, or property hook, must also be abstract.

PHP does not support abstract constants, so a class constant must be defined with a value, although it may be overwritten in a child class.

Traits may have abstract methods, and they don't have to be labelled abstract. On the other hand, any class that holds such a trait must either overwrite the abstract methods, or be itself declared abstract. 

Interfaces acts has implicit and systematic abstract classes: each of the methods in an interface is implicitely considered abstract.

An abstract method may be made concrete. It cannot be turned back into an abstract method later. 

An abstract method cannot be private: being abstract means that the method must be defined in a child, while private means the method is not shared with child class. protected and public are both fine.

An abstract method cannot be final: being abstract means that the method must be defined in a child, while final means the method cannot be overwritten. 

Static methods may be declared abstract.

abstract applies to the property, and is used by either or both of the ``get`` and ``set`` hook. At least one of them has to be without a body, as should be any abstract method.


.. code-block:: php
   
   <?php
   
       abstract class AbstractClass
       {
       
           // the abstract keyword is on the property
           public abstract string $p {
               set;
               get => 'abc';  
           }
   
           // Force Extending class to define this method
           abstract protected function getValue();
           abstract protected function prefixValue($prefix);
       
           // abstract property
           abstract public $p { get; }
       
           // Common method
           public function printOut() {
               print $this->getValue() . "\n";
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.abstract.php>`__

See also `Interfaces vs Abstract Classes in PHP <https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php>`_, `Testing Abstract Classes in PHP using Anonymous Classes <https://www.otsch.codes/blog/testing-abstract-classes-in-php-using-anonymous-classes>`_ and `Why (nearly) every PHP class you write should be abstract or final <https://matthewdaly.co.uk/blog/2023/08/13/why-nearly-every-php-class-you-write-should-be-abstract-or-final/>`_.

Related : :ref:`Abstraction <abstraction>`, :ref:`Concrete Class <concrete>`, :ref:`Object <object>`, :ref:`Overriding <overriding>`, :ref:`Final Keyword <final>`, :ref:`Private Visibility <private>`, :ref:`static <static>`, :ref:`Property Hook <property-hook>`
