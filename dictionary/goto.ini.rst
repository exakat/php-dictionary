.. _goto:
.. meta::
	:description:
		Goto: The goto operator PHP is a language construct that allows you to perform an unconditional jump in the flow of your code to a specified label.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Goto
	:twitter:description: Goto: The goto operator PHP is a language construct that allows you to perform an unconditional jump in the flow of your code to a specified label
	:twitter:creator: @exakat
	:og:title: Goto
	:og:type: article
	:og:description: The goto operator PHP is a language construct that allows you to perform an unconditional jump in the flow of your code to a specified label
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/goto.ini.html
	:og:locale: en


Goto
----

The goto operator PHP is a language construct that allows you to perform an unconditional jump in the flow of your code to a specified label. 

Goto one of the very controversial features in PHP and has been the subject of much debate due to its potential to create spaghetti code and make code difficult to read and maintain.

Some legit uses of goto in PHP include breaking out of nested loops, implementing state machines, or in some cases for error handling. However, they are rare, and should only considered in last resort.

The target label must be within the same file and context, meaning that you cannot jump out of a function or method, nor can you jump into one.


.. code-block:: php
   
   
   <?php
   goto a;
   echo 'Foo';
    
   a:
   echo 'Bar';
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.goto.php>`__

See also `GoTo statement in PHP <https://www.thecreativedev.com/goto-statement-in-php/>`_, `Why PHP, goto, and bubblesort, are good, actually <https://topher.io/writing/why-php-goto-and-bubblesort-are-good/>`_

Related : :ref:`Goto Labels <label>`, :ref:`Colon <colon>`

Related packages : `symfony/symfony <https://packagist.org/packages/symfony/symfony>`_, `yiisoft/yii2 <https://packagist.org/packages/yiisoft/yii2>`_

Added in PHP 5.3
