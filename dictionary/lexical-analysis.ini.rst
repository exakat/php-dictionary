.. _lexical-analysis:
.. _tokenisation:
.. _tokenization:
.. _scanning:
.. meta::
	:description:
		Lexical Analysis: Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lexical Analysis
	:twitter:description: Lexical Analysis: Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lexical Analysis
	:og:type: article
	:og:description: Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lexical-analysis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lexical-analysis.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lexical-analysis.ini.html","name":"Lexical Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:05:40 +0000","dateModified":"Sat, 04 Jul 2026 08:05:40 +0000","description":"Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lexical Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lexical Analysis
----------------

Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser. It reads a stream of source characters and groups them into meaningful units called tokens.

Each token carries a type (keyword, identifier, operator, literal, comment, whitespace) and the text it was matched from. The lexer discards whitespace and comments, or classifies them as separate token types when they are relevant.

PHP provides ``token_get_all()`` to tokenise a PHP source string into the same tokens the PHP engine itself produces, using the constants defined in the ``T_*`` family (``T_ECHO``, ``T_VARIABLE``, ``T_STRING``, etc.). This is useful for static analysis tools, code formatters, and documentation generators.

Lexical analysis operates on the surface form of the code and has no notion of program structure or meaning. Those concerns belong to parsing and semantic analysis.

.. code-block:: php
   
   <?php
   
   $source = '<?php echo $greeting . "world"; ?>';
   $tokens = token_get_all($source);
   
   foreach ($tokens as $token) {
       if (is_array($token)) {
           [$id, $text, $line] = $token;
           echo token_name($id) . ': ' . var_export($text, true) . PHP_EOL;
       } else {
           echo 'SYMBOL: ' . var_export($token, true) . PHP_EOL;
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Lexical_analysis>`__

See also `token_get_all() <https://www.php.net/manual/en/function.token-get-all.php>`_.

Related : :ref:`Lexical Variable <lexical>`, :ref:`Analysis <analysis>`, :ref:`Abstract Syntactic Tree (AST) <ast>`, :ref:`Token <token>`, :ref:`Parse <parsing>`, :ref:`Semantic Analysis <semantic-analysis>`, :ref:`Control Flow Analysis <control-flow-analysis>`, :ref:`Data Flow Analysis (DFA) <data-flow-analysis>`, :ref:`Symbolic Analysis <symbolic-analysis>`, :ref:`Pattern-Based Analysis <pattern-based-analysis>`
