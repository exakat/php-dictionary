.. _return:
.. meta::
	:description:
		Return: ``return`` ends the current method, and sends back a produced value to the calling module.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return
	:twitter:description: Return: ``return`` ends the current method, and sends back a produced value to the calling module
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Return
	:og:type: article
	:og:description: ``return`` ends the current method, and sends back a produced value to the calling module
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/return.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/return.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/return.ini.html","name":"Return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``return`` ends the current method, and sends back a produced value to the calling module","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Return
------

``return`` ends the current method, and sends back a produced value to the calling module. Execution resumes at the expression following the called module's invocation.

``return`` may be typed: the returned value is then checked against that type, by static analysis or by the PHP engine, at execution time. 

The ``return`` type may not always be returned: this is the case for ``never``, which indicates that the method will not return. 

``return`` types are covariant: one may return a more precise type, aka a child class, than typed, but not more general, aka a parent class.

``return`` is optional: when omitted, PHP returns automatically ``null``. The returned value of ``return`` is also optional: in that case, PHP returns ``null``, but it also returns a distinct value when the method is typed with the return type ``void``.

``return`` does not prevent ``finally`` from being executed, when the ``return`` command is in a ``try`` block.

``return`` is considered a jump, as it stops the current sequential execution, and move the pointer to another part of the code. This is similar to ``if-then``, ``goto``, ``for``, ``yield``, etc.


.. code-block:: php
   
   <?php
   
       function foo() {
           if (rand(0, 1)) {
               return 'tail';
           }
           
           return 'face';
       }
       echo foo();
       
       interface X {
           function m(Y $z): X;
       }
   
       interface Y extends X {
         function m(X $z): Y;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.return.php>`__

See also `PHP return Keyword <https://zetcode.com/php/return-keyword/>`_.

Related : :ref:`Functions <function>`, :ref:`Method <method>`, :ref:`Closure <closure>`, :ref:`Control Flow <control-flow>`, :ref:`Impure Function <impure-function>`, :ref:`Jump <jump>`, :ref:`Pure Function <pure-function>`, :ref:`Return Type <return-type>`, :ref:`Covariance <type-covariance>`
