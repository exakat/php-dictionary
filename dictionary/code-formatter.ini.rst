.. _code-formatter:
.. meta::
	:description:
		Code Formatter: A code formatter is an automated tool that apply coding conventions to the source code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Code Formatter
	:twitter:description: Code Formatter: A code formatter is an automated tool that apply coding conventions to the source code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Code Formatter
	:og:type: article
	:og:description: A code formatter is an automated tool that apply coding conventions to the source code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/code-formatter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Code Formatter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"A code formatter is an automated tool that apply coding conventions to the source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Code Formatter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Code Formatter
--------------

A code formatter is an automated tool that apply coding conventions to the source code. 

It may, for example, move the opening bracket of a block on the name of the signature or below; it may add a space between a cast operator and its expression; etc.

Code formatters modifies the presentation of the code, and do not change the underlying execution of it: although, some of the coding conventions may cross that line. For example, rewriting ``!=`` clauses to ``==`` in ``ifthen`` usually leads to voluminous modifications.

Some code formatters only report specifications violations. Others apply corrections automatically.

Popular coding conventions are ``PSR-12``, or per framework, such as ``Symfony Coding Standard``, ``CakePHP``, ``CodeIgniter``, ``Wordpress``, etc.

.. code-block:: php
   
   <?php
   
   // two distinct coding conventions.
   function foo() { return 1; }
   
   function goo() 
   {
       return 2;
   }
   ?>


Related : :ref:`PHP Standards Recommendations (PSR) <psr>`

Related packages : `lkrms/pretty-php <https://packagist.org/packages/lkrms/pretty-php>`_, `friendsofphp/php-cs-fixer <https://packagist.org/packages/friendsofphp/php-cs-fixer>`_, `squizlabs/php_codesniffer <https://packagist.org/packages/squizlabs/php_codesniffer>`_
