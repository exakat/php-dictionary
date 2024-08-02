.. _match:

Match
-----

The ``match`` expression is the remote cousin of the ``switch``. It takes a value, branch among a list of cases, or fallback to a default one, and returns a unique value. 

``match`` use a strict comparison for the comparison. ``match`` raise an error if no case match, unless the ``default`` case is provided. 

``match`` is an expression, to be used in an assignment, while ``switch`` is a command, and must be used alone. 


.. code-block:: php
   
   <?php
   
   $return_value = match ($food) {
       'apple' => 'This food is an apple',
       'bar'   => 'This food is a bar',
       'cake'  => 'This food is a cake',
       default => 'This is not food'
   };
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.match.php>`__

See also `PHP Tricks: Multi-value match() <https://peakd.com/hive-168588/@crell/php-tricks-multi-value-match>`_

Related : :ref:`Switch <switch>`, :ref:`Default <default>`, :ref:`If Then Else <if-then>`, :ref:`UnhandledMatchError <unhandledmatcherror>`

Added in PHP 8.0
