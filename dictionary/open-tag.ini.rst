.. _open-tag:
.. meta::
	:description:
		Open Tag: PHP commands are placed between the PHP tags : ``<.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Open Tag
	:twitter:description: Open Tag: PHP commands are placed between the PHP tags : ``<
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Open Tag
	:og:type: article
	:og:description: PHP commands are placed between the PHP tags : ``<
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/open-tag.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Open Tag","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:22:11 +0000","dateModified":"Tue, 20 Jan 2026 07:22:11 +0000","description":"PHP commands are placed between the PHP tags : ``<","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Open Tag.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
