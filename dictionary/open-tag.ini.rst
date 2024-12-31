.. _open-tag:
.. meta::
	:description:
		Open Tag: PHP commands are placed between the PHP tags : ``<.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Open Tag
	:twitter:description: Open Tag: PHP commands are placed between the PHP tags : ``<
	:twitter:creator: @exakat
	:og:title: Open Tag
	:og:type: article
	:og:description: PHP commands are placed between the PHP tags : ``<
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/open-tag.ini.html
	:og:locale: en


Open Tag
--------

PHP commands are placed between the PHP tags : ``<?php`` and ``?>``.  The first tag is called the open tag. 

The open tag is mandatory for PHP to execute the code. Anything before the open tag is output as is, without modification.

There is another open tag, called `echo tag`. ``<?=`` starts PHP execution, and outputs the first command. 


.. code-block:: php
   
   <?php
   // here, PHP code
   
   // the closing tag
   ?>Here, raw text, always displayed
   <?php
   // more PHP code
   
   // No final closing tag
   


`Documentation <https://www.php.net/manual/en/language.basic-syntax.phptags.php>`__

Related : :ref:`Echo Tag <echo-tag>`, :ref:`Short Tags <short-tag>`
