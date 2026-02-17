.. _incoming-data:
.. meta::
	:description:
		Incoming Data: Incoming data are data submitted to PHP by the user.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Incoming Data
	:twitter:description: Incoming Data: Incoming data are data submitted to PHP by the user
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Incoming Data
	:og:type: article
	:og:description: Incoming data are data submitted to PHP by the user
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/incoming-data.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Incoming Data","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Feb 2026 21:26:36 +0000","dateModified":"Mon, 16 Feb 2026 21:26:36 +0000","description":"Incoming data are data submitted to PHP by the user","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Incoming Data.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Incoming Data
-------------

Incoming data are data submitted to PHP by the user. They may come in different way : GET, POST, cookies or files; and, by extension, $_REQUEST. 

Incoming data should always be checked before usage. Their value may have been modified by the author of the source, and carry some malicious payload.

The encoding of the incoming data are controlled with the ``default_charset`` directive.

By extension, incoming data may be used to every source of data that is not PHP itself : files, databases, API, etc. Then, they should be treated the same way, with checks on format and value before usage.

.. code-block:: php
   
   <?php
   
   if ($_GET['x'] === '1') {
   	print "You provided a one digit. Thanks!";
   } else {
   	print "No processable data was provided".;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.default-charset>`__

Related : :ref:`$_REQUEST <$_request>`, :ref:`$_POST <$_post>`, :ref:`$_FILES <$_files>`, :ref:`$_GET <$_get>`, :ref:`Outgoing Data <outgoing-data>`, 
