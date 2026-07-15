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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ini.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ini.ini.html","name":"INI","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The INI format is a simple, human-readable file format used for configuration settings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/INI.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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


`Documentation <https://en.wikipedia.org/wiki/INI_file>`__

See also `INI configuration <http://linuxcnc.org/docs/html/config/ini-config.html>`_.

Related : :ref:`Format <format>`, :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Tom's Obvious Minimal Language (TOML) <toml>`

Related packages : `matomo/ini <https://packagist.org/packages/matomo/ini>`_
