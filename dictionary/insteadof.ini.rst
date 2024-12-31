.. _insteadof:
.. _method-alias:
.. meta::
	:description:
		Insteadof: The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Insteadof
	:twitter:description: Insteadof: The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class
	:twitter:creator: @exakat
	:og:title: Insteadof
	:og:type: article
	:og:description: The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/insteadof.ini.html
	:og:locale: en


Insteadof
---------

The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class.

When a class uses multiple traits that have methods or properties with the same name, naming conflicts can arise. The insteadof operator helps to resolve these conflicts by specifying which trait's implementation should be used in the class.

.. code-block:: php
   
   <?php
   
   // Example from the PHP documentation
   trait A {
       public function smallTalk() {
           echo 'a';
       }
       public function bigTalk() {
           echo 'A';
       }
   }
   
   trait B {
       public function smallTalk() {
           echo 'b';
       }
       public function bigTalk() {
           echo 'B';
       }
   }
   
   class Talker {
       use A, B {
           B::smallTalk insteadof A;
           A::bigTalk insteadof B;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict>`__

See also `PHP Traits Explained <https://alexwebdevelop.com/php-traits/>`_

Related : :ref:`Use <use>`

Added in PHP 5.4+
