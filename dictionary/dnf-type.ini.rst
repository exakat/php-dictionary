.. _dnf:
.. _dnf-type:

Disjunctive Normal Form (DNF)
-----------------------------

DNF stands for 'Disjunctive Normal Form'. It is a standard form used in propositional logic and Boolean algebra. DNF represents logical expressions as a disjunction (OR) of one or more conjunctions (AND) of literals. In simpler terms, it is a way to express logical statements using only the logical operators "OR" and "AND".

The DNF form allows for the representation of any logical expression using a combination of OR and AND operators. It is particularly useful in logic analysis, theorem proving, and boolean circuit design.


.. code-block:: php
   
   <?php
   
   class x {
       private (A&B)|(C&D) $y;
   }
   
   ?>


See also `PHP RFC: Disjunctive Normal Form Types <https://wiki.php.net/rfc/dnf_types>`_, `Disjunctive normal form <https://en.wikipedia.org/wiki/Disjunctive_normal_form>`_, `DNF Types in PHP 8.2 <https://lindevs.com/dnf-types-in-php-8-2>`_

Related : :ref:`Type System <type>`, :ref:`Union Type <union-type>`, :ref:`Intersection Type <intersection-type>`

Added in PHP 8.2
