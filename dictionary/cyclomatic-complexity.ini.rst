.. _cyclomatic-complexity:

Cyclomatic Complexity
---------------------

Cyclomatic complexity is a software metric of the complexity of a program.

This metric measure the number of decisions happening within the code. Those decisions are commands such as If/then, loops, or ternary operators.


.. code-block:: php
   
   <?php
   
   function foo() {
   	if ($a) {
   
   	} else {
   
   	}
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Cyclomatic_complexity>`__

See also `Cyclomatic Complexity for PHP <https://pdepend.org/documentation/software-metrics/cyclomatic-complexity.html>`_

Related packages : `phpmetrics/phpmetrics <https://packagist.org/packages/phpmetrics/phpmetrics>`_
