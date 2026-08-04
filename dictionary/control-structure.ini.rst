.. _control-structure:
.. meta::
	:description:
		Control Structures: Control structures are PHP statements that control the flow of execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Control Structures
	:twitter:description: Control Structures: Control structures are PHP statements that control the flow of execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Control Structures
	:og:type: article
	:og:description: Control structures are PHP statements that control the flow of execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/control-structure.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/control-structure.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/control-structure.ini.html","name":"Control Structures","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:15:34 +0000","dateModified":"Tue, 04 Aug 2026 11:15:34 +0000","description":"Control structures are PHP statements that control the flow of execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Control Structures.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Control Structures
------------------

Control structures are PHP statements that control the flow of execution. 

+ if / elseif / else if
+ while
+ do-while
+ for
+ foreach
+ break
+ continue
+ switch
+ match
+ declare
+ return
+ ``require()``
+ ``include()``
+ ``require_once()``
+ ``include_once()``
+ goto

Usually, instructions and commands are executed one after each other. With control structures, this flow is changed and the execution will go to another part of the code for its next step. For example, inside a loop, when PHP encounters a break command, it will then execute the next command after the loop, instead of the next command sequentially.

PHP offers each control structure in a curly-brace form and, for use inside templates mixed with HTML, an alternative syntax that replaces braces with a colon and a matching ``end...;`` keyword ``endif``, ``endwhile``, ``endfor``, ``endforeach``, ``endswitch``. Both forms are functionally equivalent; the alternative syntax is mostly a readability choice when PHP blocks are interleaved with markup.

Control structures cannot be assigned to variables, passed as callbacks, or invoked dynamically the way functions can: their names are reserved keywords parsed directly by the engine, which is what allows them to alter the normal top-to-bottom execution order in the first place.

.. code-block:: php
   
   <?php
   
       if (rand(0, 1) > 0) {
           print 'Hello, world.';
       } else {
           print 'World : hello!';
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.control-structures.php>`__

See also `PHP. Control Structures <https://alishoff.com/blog/500>`_.

Related : :ref:`foreach() <foreach>`, :ref:`For <for>`, :ref:`declare() <declare>`, :ref:`Match <match>`, :ref:`Alternative Syntax <alternative-syntax>`, :ref:`Coding Conventions <coding-convention>`
