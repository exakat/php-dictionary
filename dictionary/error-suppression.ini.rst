.. _error-suppression:
.. meta::
	:description:
		Error Suppression: Error suppression is achieved with the ``@`` operator placed before an expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Error Suppression
	:twitter:description: Error Suppression: Error suppression is achieved with the ``@`` operator placed before an expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Error Suppression
	:og:type: article
	:og:description: Error suppression is achieved with the ``@`` operator placed before an expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/error-suppression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/error-suppression.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/error-suppression.ini.html","name":"Error Suppression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:54:33 +0000","dateModified":"Wed, 15 Jul 2026 13:54:33 +0000","description":"Error suppression is achieved with the ``@`` operator placed before an expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Error Suppression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Error Suppression
-----------------

Error suppression is achieved with the ``@`` operator placed before an expression. It silences any error, warning, or notice that expression might produce.

Using ``@`` is widely considered bad practice: it hides bugs, degrades performance, and makes debugging harder. Better alternatives include proper validation, try/catch blocks, or a custom error handler.

The ``scream`` extension and ``scream.enabled`` ini directive can disable the ``@`` operator entirely.

.. code-block:: php
   
   <?php
   
       // Bad practice: silences errors
       $result = @file_get_contents('missing.txt');
       
       // Better: check first
       if (file_exists('missing.txt')) {
           $result = file_get_contents('missing.txt');
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.errorcontrol.php>`__

Related : :ref:`Error <error>`, :ref:`@, No Scream Operator <noscream>`, :ref:`Error Handling <error-handling>`, :ref:`Operators <operator>`, :ref:`Error Reporting <error-reporting>`, :ref:`Appeasement Pattern <appeasement-pattern>`, :ref:`SplSubject <splsubject>`
