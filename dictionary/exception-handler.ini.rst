.. _exception-handler:
.. meta::
	:description:
		Exception Handler: The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exception Handler
	:twitter:description: Exception Handler: The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Exception Handler
	:og:type: article
	:og:description: The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exception-handler.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Exception Handler","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 18:29:07 +0000","dateModified":"Fri, 16 Jan 2026 18:29:07 +0000","description":"The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Exception Handler.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Exception Handler
-----------------

The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks.

The execution stops once the handler has been called : as such, it is possible to log or display information related to debugging. 

The exception handler is different from the try/catch block : the latter allows the execution to carry on, when the exception is processed.

.. code-block:: php
   
   <?php
   function exception_handler(Throwable $exception) {
     echo \Uncaught exception: \ , $exception->getMessage(), \\\n\;
   }
   
   set_exception_handler('exception_handler');
   
   throw new Exception('Uncaught Exception');
   echo \Not Executed\\n\;
   ?>


`Documentation <https://www.php.net/manual/en/function.set-exception-handler.php>`__

Related : :ref:`Try-catch <try-catch>`
