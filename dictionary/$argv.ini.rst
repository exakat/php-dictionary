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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$argv","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"$argv is a PHP variable that contains an array of the arguments passed to the PHP script, in command line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$argv.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
