.. _colon:
.. meta::
	:description:
		Colon: Colons are used in a variety of situations : .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Colon
	:twitter:description: Colon: Colons are used in a variety of situations : 
	:twitter:creator: @exakat
	:og:title: Colon
	:og:type: article
	:og:description: Colons are used in a variety of situations : 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/colon.ini.html
	:og:locale: en


Colon
-----

Colons are used in a variety of situations : 

+ With named parameters, to separate the name from the value
+ With labels, for goto
+ With ternary operator, separated or not from the question mark

The double colon is a distinct operator.

.. code-block:: php
   
   
   <?php
   
   goto there;
   there:
   
   foo(a: 3); // 
   
   $b = $a ? 'a' : 'b';
   $c = $c ?: 'a';
   
   ?>
   


Related : :ref:`Goto <goto>`, :ref:`Ternary Operator <ternary>`, :ref:`Coalesce Operator <null-ternary>`, :ref:`Coalesce Operator <coalesce>`, :ref:`Named Parameters <named-parameter>`, :ref:`Scope Resolution Operator :: <double-colon>`
