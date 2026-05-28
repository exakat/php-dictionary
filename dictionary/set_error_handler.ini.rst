.. _set_error_handler:
.. _restore_error_handler:
.. meta::
	:description:
		set_error_handler(): ``set_error_handler()`` is a native PHP function, which replaces the default error handler from PHP with a custom one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: set_error_handler()
	:twitter:description: set_error_handler(): ``set_error_handler()`` is a native PHP function, which replaces the default error handler from PHP with a custom one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: set_error_handler()
	:og:type: article
	:og:description: ``set_error_handler()`` is a native PHP function, which replaces the default error handler from PHP with a custom one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/set_error_handler.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"set_error_handler()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"``set_error_handler()`` is a native PHP function, which replaces the default error handler from PHP with a custom one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/set_error_handler().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


set_error_handler()
-------------------

``set_error_handler()`` is a native PHP function, which replaces the default error handler from PHP with a custom one.

``set_error_handler()`` is often used for custom logging, user-friendly or user-facing error messages, and debugging with extra details.

``set_error_handler()`` takes a custom function, or closure, that is called upon encountering a triggered error: such errors are raised by code execution, or trigger manually with ``trigger_error()``. 

``set_error_handler()`` takes list of handled type of errors: for example, ``E_WARNING`` configures the custom handler to be called only for warnings. All other errors will be passed to the PHP default handler. In other words, each successive call of ``set_error_handler()`` replaces the preceding one.

The callback in ``set_error_handler()`` must terminate the script, with ``exit``, if needed. When that callback returns, the code execution continues.

The callback in ``set_error_handler()`` returns a boolean. When it returns ``true``, the warning is supposed to be handled, and PHP won't process it further. When it returns ``false``, the warning is also processed by PHP, on top of the custom handler: in particular, the error message will be displayed, according to configuration. 

``set_error_handler()`` does not handle ``Error``, such as fatal error: they must be execution errors. 

``set_error_handler()`` does not handle ``Exception``, which are handled by ``try-catch-finally`` structures. 

``set_error_handler()`` may be reverted to default with ``restore_error_handler()``.


.. code-block:: php
   
   <?php
   
       function myHandler(
           int $errno,
           string $errstr,
           string $errfile = '',
           int $errline = 0,
           array $errcontext = array()
       ): bool {
           print 'A warning was detected: '.$errstr;
           
           return true;
       }
       
       set_error_handler(myHandler(...), E_USER_WARNING);
       
       trigger_error('hello!', E_USER_WARNING);
       
       // PHP only
       trigger_error('World!', E_USER_NOTICE);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.set-error-handler.php>`__

Related : :ref:`Try-catch <try>`, :ref:`trigger_error() <trigger_error>`, :ref:`Exception <exception>`, :ref:`PHP Handlers <handler>`, :ref:`Exit <exit>`, :ref:`display_errors <display_errors>`, :ref:`Error Reporting <error_reporting>`
