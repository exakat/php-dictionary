.. _pseudo-variable:
.. meta::
	:description:
		Pseudo-variable: A pseudo-variable is a term used to describe a symbol that looks like a variable but does not represent one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pseudo-variable
	:twitter:description: Pseudo-variable: A pseudo-variable is a term used to describe a symbol that looks like a variable but does not represent one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pseudo-variable
	:og:type: article
	:og:description: A pseudo-variable is a term used to describe a symbol that looks like a variable but does not represent one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pseudo-variable.ini.html
	:og:locale: en


Pseudo-variable
---------------

A pseudo-variable is a term used to describe a symbol that looks like a variable but does not represent one. Instead, it is a special case that has a specific meaning within its context. In PHP, ``$this`` is the only pseudo-variable: it represents the object that is called.

.. code-block:: php
   
   <?php
   
   class x {
   	private string $name;
   	
   	function __construct($name) {
   		$this->name = $name;
   	}
   	
   	function foo() {
   		// $this represents any object of type x
   		print $this->name;
   	}
   }
   
   // $a represents only the object 'a', type x, until it is reassigned
   $a = new x('a');
   
   // $b represents only the object 'b', type x, until it is reassigned
   $b = new x('b');
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php>`__

Related : :ref:`Variables <variable>`
