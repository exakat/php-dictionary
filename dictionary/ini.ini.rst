.. _ini:
.. meta::
	:description:
		INI: The INI format is a simple, human-readable file format used for configuration settings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: INI
	:twitter:description: INI: The INI format is a simple, human-readable file format used for configuration settings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: INI
	:og:type: article
	:og:description: The INI format is a simple, human-readable file format used for configuration settings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ini.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"INI","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Feb 2025 22:15:31 +0000","dateModified":"Fri, 14 Feb 2025 22:15:31 +0000","description":"The INI format is a simple, human-readable file format used for configuration settings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/INI.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


INI
---

The INI format is a simple, human-readable file format used for configuration settings. It consists of key-value pairs grouped into sections.

It is natively supported by PHP, and used internally for the ``php.ini`` file.

It is related to the TOML format.

.. code-block:: php
   
   <?php
   
   parse_ini_file('/path/to/php.ini');
   
   parse_ini_string(<<<INI
   ; This is a comment
   # Another comment
   
   [database]
   host = localhost
   username = root
   password = secret
   port = 3306
   INI);
   
   ?>


`Documentation <https://learn.microsoft.com/en-us/windows/win32/fileio/ini-files>`__

See also https://en.wikipedia.org/wiki/INI_file
