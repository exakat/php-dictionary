.. _basename:
.. meta::
	:description:
		basename(): Basename is a PHP native function that returns the name of a file, extracted from a full path.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: basename()
	:twitter:description: basename(): Basename is a PHP native function that returns the name of a file, extracted from a full path
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: basename()
	:og:type: article
	:og:description: Basename is a PHP native function that returns the name of a file, extracted from a full path
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/basename.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/basename.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/basename.ini.html","name":"basename()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:27:05 +0000","dateModified":"Fri, 17 Jul 2026 09:27:05 +0000","description":"Basename is a PHP native function that returns the name of a file, extracted from a full path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/basename().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


basename()
----------

Basename is a PHP native function that returns the name of a file, extracted from a full path. 

When passed a second parameter, basename use it as the file extension and removes it. The file extension is then a string, and includes the dot. It is not possible to provide multiple file extensions.

``basenane()`` is locale aware, so it has to match the locale of the filesystem to find and remove the extension in multiple bytes encoding.


.. code-block:: php
   
   <?php
   
       $path = '/var/www/index.php';
       
       print basename($path); // index.php
       print basename($path, '.php'); // index 
       print basename($path, '.PHP'); // index.php
       print basename($path, 'php'); // index.
   
   ?>


`Documentation <https://www.php.net/manual/en/function.basename.php>`__

Related : :ref:`dirname <dirname>`
