.. _private:
.. meta::
	:description:
		Private Visibility: The private keyword is part of the three keywords to define visibility of a method, property or constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Private Visibility
	:twitter:description: Private Visibility: The private keyword is part of the three keywords to define visibility of a method, property or constant
	:twitter:creator: @exakat
	:og:title: Private Visibility
	:og:type: article
	:og:description: The private keyword is part of the three keywords to define visibility of a method, property or constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/private.ini.html
	:og:locale: en


Private Visibility
------------------

The private keyword is part of the three keywords to define visibility of a method, property or constant. It is the strictest level of visibility : it restrict usage to the current class only. Child class can't redefine it, nor access it.

The private keyword cannot be used with the final keyword : a private method is not visible in the child classes, and can't also be redefined.



.. code-block:: php
   
   <?php
   
   class x {
       private const X = 1;
       
       final public function method() { 
           echo self::X;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Visibility <visibility>`, :ref:`Protected Visibility <protected>`, :ref:`Public Visibility <public>`, :ref:`Var <var>`
