.. _case:

Case
----

Case is a PHP keyword, which may be used in three distinct situations: 

+ with switch() expression
+ with match() expression
+ with enumeration

case is often complemented with default. 



.. code-block:: php
   
   <?php
   
   enum Suit
   {
       case Hearts;
       case Diamonds;
       case Clubs;
       case Spades;
   }
   
   switch ($i) {
       case 0:
           echo "i equals 0";
           break;
       case 1:
           echo "i equals 1";
           break;
       case 2:
           echo "i equals 2";
           break;
   }
   
   ?>


Related : :ref:`Default <default>`, :ref:`Match <match>`, :ref:`Enumeration <enum>`, :ref:`Enumeration Case <enum-case>`, :ref:`Switch <switch>`, :ref:`Switch Case <switch-case>`
