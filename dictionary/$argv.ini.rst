.. _$argv:
.. meta::
	:description:
		$argv: $argv is a PHP variable that contains an array of the arguments passed to the PHP script, in command line.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $argv
	:twitter:description: $argv: $argv is a PHP variable that contains an array of the arguments passed to the PHP script, in command line
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $argv
	:og:type: article
	:og:description: $argv is a PHP variable that contains an array of the arguments passed to the PHP script, in command line
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$argv.ini.html
	:og:locale: en


$argv
-----

$argv is a PHP variable that contains an array of the arguments passed to the PHP script, in command line. $argv is not defined when PHP is run in a webserver.

$argv is not a super global : it has to be imported in a non-global scope with the global keyword.



.. code-block:: php
   
   <?php
   
   print_r($argv);
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.argv.php>`__

See also https://code.tutsplus.com/get-command-line-arguments-with-php-argv-or-getopt--cms-39201t

Related : :ref:`$argc <$argc>`, :ref:`PHP Variables <php-variable>`
