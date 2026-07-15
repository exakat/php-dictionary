.. _token:
.. meta::
	:description:
		Token: A PHP token is the smallest unit of code that has meaning in the language.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Token
	:twitter:description: Token: A PHP token is the smallest unit of code that has meaning in the language
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Token
	:og:type: article
	:og:description: A PHP token is the smallest unit of code that has meaning in the language
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/token.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/token.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/token.ini.html","name":"Token","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:06:35 +0000","dateModified":"Mon, 06 Jul 2026 10:06:35 +0000","description":"A PHP token is the smallest unit of code that has meaning in the language","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Token.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Token
-----

A PHP token is the smallest unit of code that has meaning in the language. When the source code is parsed, it is broken down into tokens before being executed. Tokens include keywords, variables, constants, operators, and other syntactic elements.

Tokens of a specific code are accessible via the function ``token_get_all()``.


.. code-block:: php
   
   <?php
   
   print_r(token_get_all("<?php phpinfo()"));
   
   /**
   Array
   (
       [0] => Array
           (
               [0] => 389
               [1] => <?php 
               [2] => 1
           )
   
       [1] => Array
           (
               [0] => 262
               [1] => phpinfo
               [2] => 1
           )
   
       [2] => (
       [3] => )
   )
   */
   
   ?>


`Documentation <https://www.php.net/manual/en/book.tokenizer.php>`__

See also `token_get_all <https://www.php.net/token_get_all>`_ and `List of Parser Tokens <https://www.php.net/manual/en/tokens.php>`_.

Related : :ref:`Abstract Syntactic Tree (AST) <ast>`, :ref:`Curly Brackets <curly-bracket>`, :ref:`Single Sign On (SSO) <sso>`, :ref:`Tokenizer <tokenizer>`, :ref:`Whitespace <whitespace>`, :ref:`JSON Web Token (JWT) <jwt>`, :ref:`OAuth <oauth>`, :ref:`Homoiconicity <homoiconicity>`, :ref:`Hygienic Macro <hygienic-macro>`, :ref:`Lexical Analysis <lexical-analysis>`, :ref:`Macro <macro>`
