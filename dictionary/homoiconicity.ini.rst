.. _homoiconicity:
.. _homoiconic:
.. meta::
	:description:
		Homoiconicity: Homoiconicity is a property of a programming language in which code and data share the same representation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Homoiconicity
	:twitter:description: Homoiconicity: Homoiconicity is a property of a programming language in which code and data share the same representation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Homoiconicity
	:og:type: article
	:og:description: Homoiconicity is a property of a programming language in which code and data share the same representation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/homoiconicity.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/homoiconicity.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/homoiconicity.ini.html","name":"Homoiconicity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:39:32 +0000","dateModified":"Thu, 09 Jul 2026 08:39:32 +0000","description":"Homoiconicity is a property of a programming language in which code and data share the same representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Homoiconicity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Homoiconicity
-------------

Homoiconicity is a property of a programming language in which code and data share the same representation. A homoiconic language can treat its own programs as data structures that may be inspected, transformed, and generated at runtime using the language itself. Lisp is the canonical example. Lisp programs are lists, and lists are native Lisp data.

PHP is not homoiconic in the classical sense: the source code is text, not a native PHP data structure. However, PHP provides several mechanisms that approximate homoiconic behaviour:

+ ``token_get_all()``: tokenises a PHP source string into an array of token arrays, exposing the lexical structure of code as PHP data.
+ ``eval()``: executes an arbitrary PHP string as code, allowing dynamically constructed programs to run.
+ The Reflection API, with ``ReflectionClass``, ``ReflectionFunction``, etc.: introspects the live structure of classes and functions at runtime.
+ The ``ast`` extension: parses PHP source into an abstract syntax tree represented as native ``ast\Node`` objects, enabling full read access to code structure.
+ ``nikic/php-parser``, a userland library: provides a complete AST with read and write access, making it possible to parse, modify, and regenerate PHP code from PHP itself.

These tools are the foundation of static analysers, code generators, template engines, and macro-like systems built into PHP.

.. code-block:: php
   
   <?php
   
      // Tokenise PHP source as a PHP array
      $tokens = token_get_all('<?php echo 42; ?>');
      foreach ($tokens as $token) {
          if (is_array($token)) {
              echo token_name($token[0]) . ': ' . $token[1] . "\n";
          }
      }
   
      // Reflect on a function's structure at runtime
      $ref = new ReflectionFunction('array_map');
      echo $ref->getName() . ' accepts ' . $ref->getNumberOfParameters() . " parameters\n";
   
      // Build and execute code from data
      $op = '+';
      $result = eval("return 6 {$op} 7;");
      echo $result; // 13
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Homoiconicity>`__

See also `token_get_all() <https://www.php.net/manual/en/function.token-get-all.php>`_, `PHP Reflection API <https://www.php.net/manual/en/book.reflection.php>`_, `nikic/php-parser <https://github.com/nikic/PHP-Parser>`_ and `ast extension <https://github.com/nikic/php-ast>`_.

Related : :ref:`Eval() <eval>`, :ref:`Reflection <reflection>`, :ref:`Metaprogramming <metaprogramming>`, :ref:`Token <token>`, :ref:`Abstract Syntactic Tree (AST) <ast>`, :ref:`Macro <macro>`, :ref:`Closure <closure>`, :ref:`Code Generation <code-generation>`
