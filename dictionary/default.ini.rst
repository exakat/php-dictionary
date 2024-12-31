.. _default:
.. meta::
	:description:
		Default: default is a PHP keyword, used with switch() and match() structures.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Default
	:twitter:description: Default: default is a PHP keyword, used with switch() and match() structures
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Default
	:og:type: article
	:og:description: default is a PHP keyword, used with switch() and match() structures
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/default.ini.html
	:og:locale: en


Default
-------

default is a PHP keyword, used with switch() and match() structures. It represents any case that was not already considered.

.. code-block:: php
   
   <?php
   
   switch ($i) {
       case 0:
           echo "i equals 0";
           break;
       case 1:
           echo "i equals 1";
           break;
       default 2:
           echo "i is not 0 nor 1";
           break;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.switch.php>`__

Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Case <case>`
