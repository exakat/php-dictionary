.. _handle:
.. meta::
	:description:
		Handle: A handle, in PHP jargon, represents a datastructure that has established a link with an independent resource.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Handle
	:twitter:description: Handle: A handle, in PHP jargon, represents a datastructure that has established a link with an independent resource
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Handle
	:og:type: article
	:og:description: A handle, in PHP jargon, represents a datastructure that has established a link with an independent resource
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/handle.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Handle","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 27 Apr 2025 13:43:23 +0000","dateModified":"Sun, 27 Apr 2025 13:43:23 +0000","description":"A handle, in PHP jargon, represents a datastructure that has established a link with an independent resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Handle.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Handle
------

A handle, in PHP jargon, represents a datastructure that has established a link with an independent resource. There are handles for files, for database connection, for http connections, etc.

The content of the handle is usually opaque: there is no need to know what is inside, except that this handle must be provided to every function call.

Handles are often build with the type ``resource``, and they are evolving toward objects. The content is still opaque, but the objects carry the dataset between method calls.

.. code-block:: php
   
   <?php
   
   $handle = fopen(c:\\folder\\resource.txt, r);
   $string = fread($handle);
   fclose($handle);
   
   ?>

