.. _enum-case:

Enumeration Case
----------------

An Enumeration may have zero or more case definitions, with no maximum. A zero-case enum is syntactically valid, if rather useless.

.. code-block:: php
   
   <?php
   
   enum Suit
   {
       case Hearts;
       case Diamonds;
       case Clubs;
       case Spades;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.enumerations.basics.php>`__

Related : :ref:`Enumeration <enum>`, :ref:`Case <case>`

Added in PHP 8.1+
