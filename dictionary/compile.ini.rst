.. _compile:
.. _compiled:
.. _compiling:
.. _compilation:
.. meta::
	:description:
		Compile: To compile, or compilation, is the process to turn the source code into machine code for direct execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Compile
	:twitter:description: Compile: To compile, or compilation, is the process to turn the source code into machine code for direct execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Compile
	:og:type: article
	:og:description: To compile, or compilation, is the process to turn the source code into machine code for direct execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compile.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Compile","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Apr 2026 15:29:31 +0000","dateModified":"Tue, 14 Apr 2026 15:29:31 +0000","description":"To compile, or compilation, is the process to turn the source code into machine code for direct execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Compile.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Compile
-------

To compile, or compilation, is the process to turn the source code into machine code for direct execution. 

Generally speaking, PHP is interpreted, so its code is directly run by the PHP engine. It is initially linted, for syntax correctedness, then converted into opcodes, which are run by the engine.

Some tools convert PHP directly a binary, such as kphp. 

There are tools to convert PHP into a binary file, such as static-php-cli or roadrunner. These solutions merge the PHP engine with the target code. 

Other tools transpile PHP code to another language, such as Rust or .NET, and then, compile it to a binary file. These are not common approaches.

`Documentation <https://en.wikipedia.org/wiki/Lint_(software)>`__

See also https://vkcom.github.io/kphp/, https://github.com/crazywhalecc/static-php-cli, https://roadrunner.dev/

Related : :ref:`Linting <linting>`, 
