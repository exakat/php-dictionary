.. _fallthrough:
.. meta::
	:description:
		Switch Fallthrough: A fallthrough is the absence of break (or equivalent) at the end of a switch case.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Switch Fallthrough
	:twitter:description: Switch Fallthrough: A fallthrough is the absence of break (or equivalent) at the end of a switch case
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Switch Fallthrough
	:og:type: article
	:og:description: A fallthrough is the absence of break (or equivalent) at the end of a switch case
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fallthrough.ini.html
	:og:locale: en


Switch Fallthrough
------------------

A fallthrough is the absence of break (or equivalent) at the end of a switch case. That way, the execution continues on the next case. 

While this is an intended feature, and is useful to reduce code, it tends to surprise programmers, which expect the cases to always end. 



.. code-block:: php
   
   <?php
   
   switch ($a) {
       case 1:
           $a = 2 * $a;
           // fallthrough here : the execution continue
           
       case 2:
           $a = $a + 1;
           break;
   }
   
   ?>


`Documentation <https://www.learncpp.com/cpp-tutorial/switch-fallthrough-and-scoping/>`__

See also `PHP switch Statement <https://www.codeguage.com/courses/php/control-flow-switch>`_

Related : :ref:`Match <match>`
