.. _enum:
.. _enumeration:

Enumeration
-----------

Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type.

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


`Documentation <https://www.php.net/manual/en/language.enumerations.php>`__

See also `Enumerations in PHP <https://www.delftstack.com/howto/php/php-enum/>`_, `5 Pitfalls of Upgrade to Native PHP Enums and How to Avoid Them <https://tomasvotruba.com/blog/five-pitfalls-of-upgrade-to-native-php-enums-and-how-to-avoid-them/>`_, `On the use of enums <https://peakd.com/hive-168588/@crell/on-the-use-of-enums>`_, `Enum in PHP — Real life examples <https://medium.com/@danielarcher/enum-in-php-real-life-examples-a596ba421f3c>`_

Related : :ref:`Enumeration Case <enum-case>`, :ref:`Collection <collection>`

Related packages : `myclabs/php-enum <https://packagist.org/packages/myclabs/php-enum>`_, `dasprid/enum <https://packagist.org/packages/dasprid/enum>`_, `spatie/enum <https://packagist.org/packages/spatie/enum>`_

Added in PHP 8.1+
