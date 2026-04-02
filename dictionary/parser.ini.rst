.. _parser:
.. _php-parser:
.. meta::
	:description:
		Parser: The PHP parser is a piece of software that process a piece of text and extract tokens, with their PHP meanings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parser
	:twitter:description: Parser: The PHP parser is a piece of software that process a piece of text and extract tokens, with their PHP meanings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Parser
	:og:type: article
	:og:description: The PHP parser is a piece of software that process a piece of text and extract tokens, with their PHP meanings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parser.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Parser","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Apr 2026 08:30:44 +0000","dateModified":"Wed, 01 Apr 2026 08:30:44 +0000","description":"The PHP parser is a piece of software that process a piece of text and extract tokens, with their PHP meanings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Parser.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Parser
------

The PHP parser is a piece of software that process a piece of text and extract tokens, with their PHP meanings. The tokens are atomic pieces of information, that are grouped later to build a larger message.

PHP includes an internal parser, that reads the source code, and produces the PHP tokens, the AST and later, the opcodes.

.. code-block:: php
   
   <?php
   
       if (!json_validate($json)) {
           throw new Exception('invalid JSON data');
       }
       
       $object = json_decode($json);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Parsing#Parser>`__

See also https://lexi-lambda.github.io/blog/2019/11/05/parse-don-t-validate/

Related : :ref:`Sanitation <sanitation>`, :ref:`Validation <validation>`, :ref:`Parse <parse>`, :ref:`ParseError <parseerror>`

Related packages : `https://github.com/nikic/PHP-Parser <https://packagist.org/packages/https://github.com/nikic/PHP-Parser>`_
