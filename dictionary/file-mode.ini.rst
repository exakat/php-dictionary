.. _file-mode:
.. meta::
	:description:
		File Mode: The file mode is the configuration of the pointer when accessing to the file.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File Mode
	:twitter:description: File Mode: The file mode is the configuration of the pointer when accessing to the file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: File Mode
	:og:type: article
	:og:description: The file mode is the configuration of the pointer when accessing to the file
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/file-mode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"File Mode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 21 Jan 2025 08:40:17 +0000","dateModified":"Tue, 21 Jan 2025 08:40:17 +0000","description":"The file mode is the configuration of the pointer when accessing to the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/File Mode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


File Mode
---------

The file mode is the configuration of the pointer when accessing to the file. 

In the example above, ``w+`` indicates that the file is open for writing and reading, and place the pointer at the beginning of the file.

There are several valid modes: 'r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e'. Check docs for details about them.


.. code-block:: php
   
   <?php
   
   $fp = fopen($file, 'w+');
   
   ?>


`Documentation <https://www.php.net/manual/fr/function.fopen.php>`__

See also https://www.php.net/manual/en/function.fopen.php
