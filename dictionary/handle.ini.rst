.. _handle:
.. meta::
	:description:
		Handle: A handle, in PHP jargon, represents a datastructure that has established a link with an independant resource.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Handle
	:twitter:description: Handle: A handle, in PHP jargon, represents a datastructure that has established a link with an independant resource
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Handle
	:og:type: article
	:og:description: A handle, in PHP jargon, represents a datastructure that has established a link with an independant resource
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/handle.ini.html
	:og:locale: en


Handle
------

A handle, in PHP jargon, represents a datastructure that has established a link with an independant resource. There are handles for files, for database connexion, for http connexions, etc.

The content of the handle is usually opaque: there is no need to know what is inside, except that this handle must be provided to every function call.

Handles are often build with the type ``resource``, and they are evolving toward objects. The content is still opaque, but the objects carry the dataset between method calls.

.. code-block:: php
   
   <?php
   
   $handle = fopen(c:\\folder\\resource.txt, r);
   $string = fread($handle);
   fclose($handle);
   
   ?>

