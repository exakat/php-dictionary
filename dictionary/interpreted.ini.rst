.. _interpreted:
.. meta::
	:description:
		Interpreted: An interpreted language is a programming language in which the source code is executed line by line by another program called an interpreter, rather than being converted directly into machine code by a compiler.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interpreted
	:twitter:description: Interpreted: An interpreted language is a programming language in which the source code is executed line by line by another program called an interpreter, rather than being converted directly into machine code by a compiler
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Interpreted
	:og:type: article
	:og:description: An interpreted language is a programming language in which the source code is executed line by line by another program called an interpreter, rather than being converted directly into machine code by a compiler
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/interpreted.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Interpreted","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:07:10 +0000","dateModified":"Sun, 12 Jul 2026 20:07:10 +0000","description":"An interpreted language is a programming language in which the source code is executed line by line by another program called an interpreter, rather than being converted directly into machine code by a compiler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Interpreted.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Interpreted
-----------

An interpreted language is a programming language in which the source code is executed line by line by another program called an interpreter, rather than being converted directly into machine code by a compiler.

An interpreted language has no compile phase, and runs immediately. It gives it a shorter cycle to update the code and test it. 

On the other hand, compiled languages take more time to review the code at compile time, and also add an optimisation phase: in the end, the result is often smaller and faster.

PHP is known to be an interpreted language. This is not strictly the case, as PHP make keep the code compiled in bytecode, or use JIT to compile the frequent code faster. 

There are also tools to compile PHP directly to binary code for compiled execution.

`Documentation <https://en.wikipedia.org/wiki/Interpreter_(computing)>`__

See also `Can You Compile PHP Code Into a Binary-Like File to Run via Bytecode Interpreter? Explained <https://www.codegenes.net/blog/can-you-compile-php-code-and-upload-a-binary-ish-file-which-will-just-be-run-by-the-byte-code-interpreter/>`_ and `Is PHP Compiled or Interpreted? The Truth About PHP Execution Explained <https://www.tutorialpedia.org/blog/is-php-compiled-or-interpreted/>`_.

Related : :ref:`Transpile <transpile>`, :ref:`Compile <compile>`, :ref:`Just In Time (JIT) <jit>`, :ref:`Opcode <bytecode>`, :ref:`Ahead Of Time <aot>`
