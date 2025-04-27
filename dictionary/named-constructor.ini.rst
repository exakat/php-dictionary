.. _named-constructor:
.. meta::
	:description:
		Named Constructors: Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Named Constructors
	:twitter:description: Named Constructors: Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Named Constructors
	:og:type: article
	:og:description: Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/named-constructor.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Named Constructors","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Named Constructors.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Named Constructors
------------------

Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments. They usually prepare the argument, to call the constructor the right way. 

That approaches makes the construction of the object simpler, and reduces the number of conditionals. 

As Matthias Verraes puts it : 'Don't limit yourself by PHP's single constructor. Use static factory methods.'.

.. code-block:: php
   
   
   <?php
   
   // parse a single string
   $user = Person::createFromTitle('Mr John Smith');
   
   $user = Person::createFromNames('John', 'Smith');
   
   class Person {
   	// constructor is private, $parameters are not documented
   	private function __construct( ) {}
   	
   	static public function createFromNames(string $firstName, string $lastName) : self {
   		// assign the argument to the right parameter of the constructor
   	}
   
   	static public function createFromTitle(string $fullName) : self {
   		// parse the string, and calls the constructor
   	}
   }
   
   ?>
   


`Documentation <https://verraes.net/2014/06/named-constructors-in-php/>`__

Related : :ref:`Static Method <static-method>`
