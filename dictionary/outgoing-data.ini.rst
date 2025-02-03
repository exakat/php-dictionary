.. _outgoing-data:
.. meta::
	:description:
		Outgoing Data: Outgoing data are data submitted by PHP to an external user.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Outgoing Data
	:twitter:description: Outgoing Data: Outgoing data are data submitted by PHP to an external user
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Outgoing Data
	:og:type: article
	:og:description: Outgoing data are data submitted by PHP to an external user
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/outgoing-data.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Outgoing Data","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Outgoing data are data submitted by PHP to an external user","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Outgoing Data.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Outgoing Data
-------------

Outgoing data are data submitted by PHP to an external user. The default may be the user's browser, and the usual formats may be HTML, or JSON. Yet, there are many other destinations, such as databases, files, API, other process and formats, such as CSV, text, PDF, etc.  

Outgoing data should always be formatted with the target technology. For example, text should use HTML entities for HTML output, or be provided as prepared statement with a database. Each target has its own system of protection.

The encoding of the incoming data are controlled with the `default_charset` directive.



.. code-block:: php
   
   
   <?php
   
   // raw text, for the browser
   echo "Hello world.";
   
   ?>
   


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.default-charset>`__

Related : :ref:`Incoming Data <incoming-data>`
