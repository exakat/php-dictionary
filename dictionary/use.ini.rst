.. _use:
.. meta::
	:description:
		Use: The use operator has three distinct usages.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Use
	:twitter:description: Use: The use operator has three distinct usages
	:twitter:creator: @exakat
	:og:title: Use
	:og:type: article
	:og:description: The use operator has three distinct usages
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/use.ini.html
	:og:locale: en


Use
---

The use operator has three distinct usages. 

The use operator allows the import and aliasing of fully qualified names (such as classes, interfaces, constants, ...)  in the current namespace. 

When `use` used inside a class or a trait, it imports a trait and its methods and properties. 

When `use` is used with a closure, it imports the listed variables in the closure, from the defining environment. 

.. code-block:: php
   
   <?php
   
   namespace \My\Space {
       // class importation with use
       use \Some\Other\Space\aClass as A;
       
       class B {
           // trait importation of use
           use MyTrait; 
       
           function foo() {
               $a = 1;
               // use imports the variable $a in the closure. Its value is accessible at execution time.
               $closure = function ($b) use ($a) { return $a + $b;}
           }
       }
       // class importation with use
       use \Some\Other\Space\aClass as A;
       
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__

Related : :ref:`Fully Qualified Name <fully-qualified-name>`, :ref:`Use Alias <use-alias>`, :ref:`Closure <closure>`, :ref:`Traits <trait>`, :ref:`Fully Qualified Name <fqn>`
