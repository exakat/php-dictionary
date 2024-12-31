.. _spaceship:
.. meta::
	:description:
		Spaceship Operator: Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Spaceship Operator
	:twitter:description: Spaceship Operator: Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value
	:twitter:creator: @exakat
	:og:title: Spaceship Operator
	:og:type: article
	:og:description: Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/spaceship.ini.html
	:og:locale: en


Spaceship Operator
------------------

Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value. It return 1, 0 or -1 in each case, respectively. 

The spaceship operator may be replace by a `-` (minus) sign, if the compared values are correct. It may also be replace with `!=`, since -1 and 1 are both cast to `true`. 

The spaceship operator got its name from its resemblance to an flying saucer. Battleship operator, or death star operator do not exist. 



.. code-block:: php
   
   <?php
   
   $a = 1;
   $b = 3;
   
   print $a <=> $b;
   
   ?>


`Documentation <https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.spaceship-op>`__

See also `Weird operators in PHP <https://www.exakat.io/en/weird-operators-in-php/>`_, `What Is the PHP Spaceship Operator? <https://www.designcise.com/web/tutorial/what-is-the-php-spaceship-operator>`_

Related : :ref:`Comparison <comparison-operator>`

Added in PHP 7.0
