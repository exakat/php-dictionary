.. _readline:
.. meta::
	:description:
		Readline: readline is the PHP extension to the GNU Readline library.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readline
	:twitter:description: Readline: readline is the PHP extension to the GNU Readline library
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Readline
	:og:type: article
	:og:description: readline is the PHP extension to the GNU Readline library
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/readline.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Readline","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 14:21:28 +0000","dateModified":"Fri, 04 Jul 2025 14:21:28 +0000","description":"readline is the PHP extension to the GNU Readline library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Readline.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Readline
--------

readline is the PHP extension to the GNU Readline library. This library provide features to interact with the command line, and its prompt.

.. code-block:: php
   
   <?php
   // read 3 commands from user
   for ($i=0; $i < 3; $i++) {
           $line = readline(Commande :);
           readline_add_history($line);
   }
   
   // list the command line history
   print_r(readline_list_history());
   
   ?>


`Documentation <https://www.php.net/manual/en/book.readline.php>`__

See also https://tiswww.case.edu/php/chet/readline/rltop.html, https://impactmillions.org/how-to-read-user-or-console-input-in-php/, https://www.geeksforgeeks.org/php/how-to-read-user-or-console-input-in-php/, https://www.talkerscode.com/howto/how-to-take-input-from-user-in-php-without-form.php
