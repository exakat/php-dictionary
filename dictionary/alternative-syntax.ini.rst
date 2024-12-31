.. _alternative-syntax:
.. meta::
	:description:
		Alternative Syntax: PHP offers an alternative syntax for some of its control structures.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Alternative Syntax
	:twitter:description: Alternative Syntax: PHP offers an alternative syntax for some of its control structures
	:twitter:creator: @exakat
	:og:title: Alternative Syntax
	:og:type: article
	:og:description: PHP offers an alternative syntax for some of its control structures
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/alternative-syntax.ini.html
	:og:locale: en


Alternative Syntax
------------------

PHP offers an alternative syntax for some of its control structures; namely, ``if``, ``while``, ``for``, ``foreach``, and ``switch``. In each case, the basic form of the alternate syntax is to change the opening brace to a colon (:) and the closing brace to ``endif;``, ``endwhile;``, ``endfor;``, ``endforeach;``, or ``endswitch;``, respectively.

.. code-block:: php
   
   <?php if ($a == 5): ?>
   A is equal to 5
   <?php endif; ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__

See also `Using Alternative Syntax for Control Structures in PHP to Enhance HTML Integration <https://www.linkedin.com/pulse/using-alternative-syntax-control-structures-php-html-rahman-nadim/>`_

Related : :ref:`Control Structures <control-structure>`
