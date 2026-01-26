.. _noscream:
.. _@:
.. meta::
	:description:
		@, No Scream Operator: The ``@`` operator prevent error reports in specific expressions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: @, No Scream Operator
	:twitter:description: @, No Scream Operator: The ``@`` operator prevent error reports in specific expressions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: @, No Scream Operator
	:og:type: article
	:og:description: The ``@`` operator prevent error reports in specific expressions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/noscream.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A non-numeric value encountered.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A non-numeric value encountered.html","name":"@, No Scream Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:21:26 +0000","dateModified":"Tue, 20 Jan 2026 07:21:26 +0000","description":"The ``@`` operator prevent error reports in specific expressions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/@, No Scream Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


@, No Scream Operator
---------------------

The ``@`` operator prevent error reports in specific expressions. 

The operator must be added before the expression it protect. The execution proceeds and no warning is emitted, if ever one is encountered. Fatal errors, on the other hand, are still displayed as necessary. For example, a call to a non-existing function is still reported, even with the operator set in place.

The operator ``@`` set the context at the expression level: any error happening during the processing of the expression is suppressed. This applies to all expressions inside a method, or even all the code inside an include.

The operator is called the ``no scream`` operator.

.. code-block:: php
   
   <?php
   
   echo @$a; // no error
   
   $all = [];
   foreach(someArray() as $value) {
       @$all[$value]++;  // slow initialisation and incrementation 
   }
   
   // Fatal error, in any case
   @foo(); 
   
   @bar();
   function bar() {
       // This error won't show up
       trigger_error('a', E_USER_WARNING);
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.errorcontrol.php>`__

See also https://www.exakat.io/i-scream-you-scream-we-all-scream-for/

Related : :ref:`trigger_error() <trigger_error>`, :ref:`Error Reporting <error-reporting>`
