.. _simple-switch:
.. meta::
	:description:
		Simple Switch: A simple switch is a switch where all the cases are simple literals.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Simple Switch
	:twitter:description: Simple Switch: A simple switch is a switch where all the cases are simple literals
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Simple Switch
	:og:type: article
	:og:description: A simple switch is a switch where all the cases are simple literals
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/simple-switch.ini.html
	:og:locale: en


Simple Switch
-------------

A simple switch is a switch where all the cases are simple literals. This helps PHP optimize the command and finds the correct case immediately, instead of checking them one by one. 

.. code-block:: php
   
   <?php
   
   switch ($i) {
       case 0:
           echo "i equals 0";
           break;
       case 1:
           echo "i equals 1";
           break;
       case 2:
           echo "i equals 2";
           break;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.switch.php>`__

See also `PHP 7.2's 'switch' optimisations <https://derickrethans.nl/php7.2-switch.html>`_

Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`If Then Else <if-then>`, :ref:`Compact Array <compact-array>`

Added in PHP 4.0
