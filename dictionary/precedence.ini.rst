.. _precedence:
.. meta::
	:description:
		Precedence: Precedence organizes the way operators are executed, when they are mixed in the same expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Precedence
	:twitter:description: Precedence: Precedence organizes the way operators are executed, when they are mixed in the same expression
	:twitter:creator: @exakat
	:og:title: Precedence
	:og:type: article
	:og:description: Precedence organizes the way operators are executed, when they are mixed in the same expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/precedence.ini.html
	:og:locale: en


Precedence
----------

Precedence organizes the way operators are executed, when they are mixed in the same expression.

For example, `1 + 2 * 3` will produce `7`, since `*` has a higher precedence than `+`. 

Every operator has a precedence, and when they have the same precedence, the rightmost one yield to the leftmost one.

Precedence offers some reading surprises to human readers. For example, `! $b instanceof \X` really applies `instanceof` first, and `&&` has a higher priority than `and`, even though they perform the same function.



.. code-block:: php
   
   <?php
   
   var_dump(!$b instanceof \X);
   var_dump($a = 1 and 2);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.precedence.php>`__

See also `Understanding PHP Operators of Logic, or || and && and ! a lot more <https://wpshout.com/php-logic-operators/>`_

Related : :ref:`Operators <operator>`
