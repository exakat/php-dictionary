.. _execution-path:
.. meta::
	:description:
		Execution Path: The execution path refers to the sequence in which the PHP interpreter processes and executes the code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Execution Path
	:twitter:description: Execution Path: The execution path refers to the sequence in which the PHP interpreter processes and executes the code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Execution Path
	:og:type: article
	:og:description: The execution path refers to the sequence in which the PHP interpreter processes and executes the code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/execution-path.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Execution Path","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Apr 2026 17:56:16 +0000","dateModified":"Thu, 09 Apr 2026 17:56:16 +0000","description":"The execution path refers to the sequence in which the PHP interpreter processes and executes the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Execution Path.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Execution Path
--------------

The execution path refers to the sequence in which the PHP interpreter processes and executes the code. By default, expressions are executed one after the other, and the execution path has many possible path:

+ Code Entry Point, such as the called file, but also controllers, in mvc frameworks
+ Sequential Execution, where expressions are processed one after the other
+ Includes and Requires, which stop the execution in the current file and move to another file
+ Function and Method Calls, which stop the execution in the current file and move it to another part of the code
+ Control Structures, like ``goto``, ``foreach``, ``ifthen``, which choose a path or another with the current file
+ Error Handling, with error triggers and exceptions, and unhandled issues
+ Exit and Die, or simply the end of the file.


Related : 
