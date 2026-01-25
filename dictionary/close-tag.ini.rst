.. _close-tag:
.. meta::
	:description:
		Close Tag: PHP commands are placed between the PHP tags : ``<.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Close Tag
	:twitter:description: Close Tag: PHP commands are placed between the PHP tags : ``<
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Close Tag
	:og:type: article
	:og:description: PHP commands are placed between the PHP tags : ``<
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/close-tag.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Close Tag","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:15 +0000","dateModified":"Sun, 25 Jan 2026 20:46:15 +0000","description":"PHP commands are placed between the PHP tags : ``<","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Close Tag.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Close Tag
---------

PHP commands are placed between the PHP tags : ``<?php`` and ``?>``.  The second tag is called the closing tag. 

Closing tag allow to finish a PHP tag, and switch back to non-interpreted code. The text following the closing tag is then display raw, until the next PHP tag. 

When a file online contains PHP code, the closing tag is not necessary. Its absence even prevents the accidental adding of white space, which create output errors.

.. code-block:: php
   
   <?php
   // here, PHP code
   
   // the closing tag
   ?>Here, raw text, always displayed
   <?php
   // more PHP code
   
   // No final closing tag


`Documentation <https://www.php.net/manual/en/language.basic-syntax.phptags.php>`__

See also https://www.youtube.com/watch?v=mXzUwcDBtkA, https://www.sitepoint.com/closing-php-tags-debate/

Related : :ref:`Open Tag <open-tag>`, :ref:`Short Tags <short-tag>`
