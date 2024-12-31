.. _control-flow:
.. meta::
	:description:
		Control Flow: Control flow structures direct the way PHP execute the statements.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Control Flow
	:twitter:description: Control Flow: Control flow structures direct the way PHP execute the statements
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Control Flow
	:og:type: article
	:og:description: Control flow structures direct the way PHP execute the statements
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/control-flow.ini.html
	:og:locale: en


Control Flow
------------

Control flow structures direct the way PHP execute the statements. For example, a loop repeats the same statements several times; a goto instruction jumps to another part of the code; a if-then statement applies a block of code or another, depending on a condition.

+ if
+ else
+ elseif/else if
+ Alternative syntax for control structures
+ while
+ do...while
+ for
+ foreach
+ break
+ continue
+ switch
+ match
+ declare
+ return
+ require()
+ include()
+ require_once()
+ include_once()
+ goto

Control flow structures can't be called dynamically : they have to be hardcoded, or nested in a closure or other function. 



.. code-block:: php
   
   
   <?php
   
   if ($a === 1) { 
   	$b = 2;
   } else {
   	$b = 3;
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.control-structures.php>`__

See also `PHP flow control <https://zetcode.com/php/flowcontrol/>`_

Related : :ref:`Statement <statement>`, :ref:`Loops <loop>`, :ref:`Semicolon <semicolon>`, :ref:`If Then Else <if-then>`, :ref:`While <while>`, :ref:`Do While <do-while>`, :ref:`For <for>`, :ref:`Foreach <foreach>`, :ref:`Break <break>`, :ref:`Continue <continue>`, :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`declare() <declare>`, :ref:`Return <return>`, :ref:`Inclusions <inclusion>`, :ref:`Goto <goto>`
