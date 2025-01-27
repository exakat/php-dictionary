.. _method:
.. meta::
	:description:
		Method: Methods are function dedicated to a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method
	:twitter:description: Method: Methods are function dedicated to a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Method
	:og:type: article
	:og:description: Methods are function dedicated to a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html
	:og:locale: en


Method
------

Methods are function dedicated to a class. They are defined inside the body of a class, and may only be access in relation to that class : via an object, the class name or another method. 



.. code-block:: php
   
   <?php
   
   class x {
       public function foo() {
           echo "I am foo!\n";
       }
   }
   
   $x = new Y();
   $y->foo(); // calling the foo method, defined in x,
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods>`__

Related : :ref:`Class <class>`, :ref:`__call() Method <-__call>`, :ref:`Default Parameter <default-parameter>`, :ref:`Fossilized Methods <fossilized-method>`, :ref:`Functions <function>`, :ref:`Return <return>`, :ref:`Static Method <static-method>`, :ref:`Visibility <visibility>`
