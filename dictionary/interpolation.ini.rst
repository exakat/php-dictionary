.. _interpolation:
.. meta::
	:description:
		Interpolation: Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interpolation
	:twitter:description: Interpolation: Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax
	:twitter:creator: @exakat
	:og:title: Interpolation
	:og:type: article
	:og:description: Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/interpolation.ini.html
	:og:locale: en


Interpolation
-------------

Interpolation is the PHP feature that automatically replaces variables and public properties by their value in double-quoted strings and Heredoc syntax.

.. code-block:: php
   
   <?php
   $string = "world";
   echo "Hello $string"; 
   // displays Hello world
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`__

See also `How to Use String Interpolation in PHP <https://www.phpflow.com/php/how-to-use-string-interpolation-in-php/>`_

Related : :ref:`String <string>`, :ref:`Concatenation <concatenation>`, :ref:`Heredocs <heredoc>`, :ref:`Variables <variable>`
