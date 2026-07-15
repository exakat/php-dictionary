.. _antlr4:
.. _antlr:
.. meta::
	:description:
		ANTLR4: ANTLR, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ANTLR4
	:twitter:description: ANTLR4: ANTLR, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ANTLR4
	:og:type: article
	:og:description: ANTLR, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/antlr4.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/antlr4.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/antlr4.ini.html","name":"ANTLR4","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:12:41 +0000","dateModified":"Thu, 09 Jul 2026 10:12:41 +0000","description":"ANTLR, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ANTLR4.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ANTLR4
------

ANTLR, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript. There is no first-class PHP target, though community-maintained backends exist.

ANTLR4 grammars are ``LL(*)``-based and produce a parse tree, which can then be walked with a generated Listener or Visitor. It is widely used to build DSLs, configuration-file parsers, and reimplementations of existing languages, including some PHP parsers used by third-party tooling.

Exakat, like most PHP static analyzers, does not rely on ANTLR: it uses PHP's own tokenizer, then builds its own AST directly, tailored to the needs of static analysis, rather than going through a generic, grammar-driven parser.

`Documentation <https://www.antlr.org/>`__

See also `ANTLR <https://www.antlr.org/>`_ and `ANTLR4 grammars repository <https://github.com/antlr/grammars-v4>`_.

Related : :ref:`Parser <parser>`, :ref:`Abstract Syntactic Tree (AST) <ast>`, :ref:`Tokenizer <tokenizer>`
