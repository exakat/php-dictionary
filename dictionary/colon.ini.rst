.. _colon:

Colon
-----

Colon are used in a variety of situations : 

+ With named parameters, to separate the name from the value
+ With labels, for goto
+ With ternary operator, separated or not from the question mark

Double colon is a distinct operator.



.. code-block:: php
   
   
   <?php
   
   goto there;
   there:
   
   foo(a: 3); // 
   
   $b = $a ? 'a' : 'b';
   $c = $c ?: 'a';
   
   ?>
   


Related : :ref:`Goto <goto>`, :ref:`Ternary Operator <ternary>`, :ref:`Coalesce Operator <null-ternary>`, :ref:`Named Parameters <named-parameter>`, :ref:`Scope Resolution Operator :: <double-colon>`
