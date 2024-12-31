.. _inclusion:
.. meta::
	:description:
		Inclusions: Inclusion is the operation to add PHP code stored in an external file, into another PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inclusions
	:twitter:description: Inclusions: Inclusion is the operation to add PHP code stored in an external file, into another PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inclusions
	:og:type: article
	:og:description: Inclusion is the operation to add PHP code stored in an external file, into another PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inclusion.ini.html
	:og:locale: en


Inclusions
----------

Inclusion is the operation to add PHP code stored in an external file, into another PHP code. 

Inclusions rely on four native functions: ``include``, ``require``, ``include_once``, ``require_once``. 

Inclusions have application with templates, configurations, caches, function libraries. 

Inclusions have been superseded by autoload in recent PHP versions. Autoload relies on inclusion, though.

.. code-block:: php
   
   <?php
   
   echo "A $color $fruit"; // A
   
   include 'vars.php';
   
   echo "A $color $fruit"; // A green apple
   
   ?>


`Documentation <https://www.php.net/manual/en/function.include.php>`__

See also `PHP Include <https://www.phptutorial.net/php-tutorial/php-include-file/>`_, `PHP Include & Require : All about Include vs Require in PHP <https://www.simplilearn.com/tutorials/php-tutorial/include-in-php>`_

Related : :ref:`Class Autoloading <autoload>`

Added in PHP 8.0+
