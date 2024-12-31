.. _php-tag:
.. meta::
	:description:
		PHP Tags: When PHP parses a file, it looks for opening and closing tags, which are <.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Tags
	:twitter:description: PHP Tags: When PHP parses a file, it looks for opening and closing tags, which are <
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Tags
	:og:type: article
	:og:description: When PHP parses a file, it looks for opening and closing tags, which are <
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-tag.ini.html
	:og:locale: en


PHP Tags
--------

When PHP parses a file, it looks for opening and closing tags, which are <?php and ?> which tell PHP to start and stop interpreting the code between them. 

The classic PHP tag is ``<?php``, and it also has a short version, for better serving xml tags : `<?`. This one relies on the ``short_open_tag`` directive.

Previously, PHP supported also Javascript-style and ASP-style tags, though these are now unsupported.


.. code-block:: php
   
   
   <?php
     // This is the classic PHP tag
   
   ?>
   <?
     // This is the short PHP tag
   
   ?><?= "Hello world";
     // This is the short echo PHP tag
   
   ?>


`Documentation <https://www.php.net/manual/en/language.basic-syntax.phptags.php>`__

Related : :ref:`Short Tags <short-tag>`, :ref:`Short Tags <short-open-tag>`
