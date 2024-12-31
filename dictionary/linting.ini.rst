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
	:og:title: Linting
	:og:type: article
	:og:description: Linting is the process to turn the Text file that holds the source code, into tokens
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/linting.ini.html
	:og:locale: en


Linting
-------

Linting is the process to turn the Text file that holds the source code, into tokens. During this first phase, PHP applies some checks, and report anything that makes no sense.

After linting, the code is processed further before reaching the status of opcode, where it can be executed. 

Linting is an option of the PHP CLI : `-l`. 

Linting is sometimes mistaken with 'compiling' : linting is a part of a compilation. Since, it is the only step available in PHP between the code and the execution (with eval() or the PHP CLI), linting is often considered as compiling. 


