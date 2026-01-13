.. _parse:
.. _parsing:
.. meta::
	:description:
		Parse: To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parse
	:twitter:description: Parse: To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Parse
	:og:type: article
	:og:description: To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parse.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Parse","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 12 Jan 2026 09:49:44 +0000","dateModified":"Mon, 12 Jan 2026 09:49:44 +0000","description":"To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Parse.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Parse
-----

To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information. 

PHP has a phase of parsing: it is handled by the tokenizer, a part of the PHP engine, that reads the text file with the source code, and outputs the atomic blocks it understood, or a Fatal error. 

Parsing is commonly used when working with data formats like XML, JSON, HTML, YAML, or even custom text formats. It involves breaking down a string into its individual components or tokens to understand its underlying structure.

The simplest usage of parsing is to identify errors in the structure, leading to an early aborting of the processing.

.. code-block:: php
   
   <?php
   
   if (!json_validate($json)) {
   	throw new Exception('invalid JSON data');
   }
   
   $object = json_decode($json);
   
   ?>


See also `Parse, don’t validate <https://lexi-lambda.github.io/blog/2019/11/05/parse-don-t-validate/>`_

Related : :ref:`Sanitation <sanitation>`, :ref:`Validation <validation>`
