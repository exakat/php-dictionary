.. _linting:
.. _lint:
.. meta::
	:description:
		Linting: Linting is the process to turn the Text file that holds the source code, into tokens.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Linting
	:twitter:description: Linting: Linting is the process to turn the Text file that holds the source code, into tokens
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Linting
	:og:type: article
	:og:description: Linting is the process to turn the Text file that holds the source code, into tokens
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/linting.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Linting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 15 Feb 2026 21:41:59 +0000","dateModified":"Sun, 15 Feb 2026 21:41:59 +0000","description":"Linting is the process to turn the Text file that holds the source code, into tokens","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Linting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Linting
-------

Linting is the process to turn the Text file that holds the source code, into tokens. During this first phase, PHP applies some checks, and report anything that makes no sense.

After linting, the code is processed further before reaching the status of opcode, where it can be executed. 

Linting is an option of the PHP CLI: ``-l``. 

Linting is sometimes mistaken with ``compiling``: linting is a part of a compilation. Since, it is the only step available in PHP between the code and the execution (with ``eval()`` or the PHP CLI), linting is often considered as compiling.

`Documentation <https://en.wikipedia.org/wiki/Lint_(software)>`__
