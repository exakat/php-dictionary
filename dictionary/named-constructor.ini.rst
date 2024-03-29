.. _named-constructor:

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
