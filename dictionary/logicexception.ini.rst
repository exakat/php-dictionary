.. _logicexception:
.. meta::
	:description:
		LogicException: Exception that represents error in the program logic.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: LogicException
	:twitter:description: LogicException: Exception that represents error in the program logic
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: LogicException
	:og:type: article
	:og:description: Exception that represents error in the program logic
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/logicexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/logicexception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/logicexception.ini.html","name":"LogicException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:09:43 +0000","dateModified":"Thu, 16 Jul 2026 08:09:43 +0000","description":"Exception that represents error in the program logic","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/LogicException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


LogicException
--------------

Exception that represents error in the program logic. This kind of exception should lead directly to a fix in your code.

``LogicException`` is part of the SPL exception hierarchy introduced in version 5.1, extending the base ``Exception`` class. It signals a fault that could, in principle, be detected before runtime by inspecting the code, a violated precondition, an unreachable code path, or a contract broken by the caller, as opposed to ``RuntimeException``, whose sibling hierarchy covers errors that can only be detected while the script is executing, such as I/O failures or unexpected external data.

PHP never throws a bare ``LogicException`` itself; it serves as the common base for more specific SPL exceptions: ``BadFunctionCallException``, and its child ``BadMethodCallException``, for calling an undefined function or method, ``DomainException`` for a value outside a defined set of valid values, ``InvalidArgumentException`` for an argument of the wrong type, ``LengthException`` for a value of invalid length, and ``OutOfRangeException`` for an illegal index requested outside of iteration. Catching ``LogicException`` lets code handle all of these programmer-error cases with a single ``catch`` block.

.. code-block:: php
   
   <?php
   
       // No direct exemples. Use the children classes.
   
   ?>


`Documentation <https://www.php.net/manual/en/class.logicexception.php>`__

Related : :ref:`BadFunctioncallException <badfunctioncallexception>`, :ref:`DomainException <domainexception>`, :ref:`LengthException <lengthexception>`, :ref:`OutOfRangeException <outofrangeexception>`, :ref:`InvalidArgumentException <invalidargumentexception>`
