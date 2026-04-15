.. _constructor:
.. _-__construct:
.. meta::
	:description:
		Constructor: The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constructor
	:twitter:description: Constructor: The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constructor
	:og:type: article
	:og:description: The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constructor.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Constructor
-----------

The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments. It is called ``__construct``.

The constructor is an optional method: a class may be created without it. Though, it is very common to have it. 

In PHP, parent's constructor are not automatically called, when a child class defines a constructor. They have to be called explicitly. 

When a class has a parent, with a construtor, and not constructor itself, then the parent constructor is automatically called, by inheritance.

A constructor may have a visibility, and be not available to the outside. In particular, when creating named constructors, the magic method ``__construct`` is usually made ``private`` and object instantiation happens in a static method of that same class.


.. code-block:: php
   
   <?php
   
   class X {
       private $property;
       
       function __construct($value) {
           $this->property = $value;
       }
   }
   
   $x = new X(1);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

See also https://laracasts.com/discuss/channels/php/what-and-why-we-should-use-php-constructors, https://flatcoding.com/tutorials/php/php-oop-constructors-guide/

Related : :ref:`Destructor <destructor>`, :ref:`Inheritance <inheritance>`, :ref:`Visibility <visibility>`, :ref:`Named Constructors <named-constructor>`
