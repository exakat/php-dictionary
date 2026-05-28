.. _exit:
.. _die:
.. meta::
	:description:
		Exit: ``exit()`` and ``die()`` terminates the current execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exit
	:twitter:description: Exit: ``exit()`` and ``die()`` terminates the current execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Exit
	:og:type: article
	:og:description: ``exit()`` and ``die()`` terminates the current execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exit.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Exit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"``exit()`` and ``die()`` terminates the current execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Exit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Exit
----

``exit()`` and ``die()`` terminates the current execution.

``exit()`` is a language construct, and since PHP 8.4, it is also a function too. 

After the end of execution, the registered shutdown functions and destructors are executed. ``finally`` blocks are  not executed.

They do not have access to the output stream ``php://output`` anymore, so ``echo`` doesn't work; but it may still write in files or database, if the connection is still open.

``exit()`` uses its argument to return its execution status. It is transmitted to the original caller of the application. When the argument is a string, it is displayed before ending the process.

.. code-block:: php
   
   <?php
   
       $total = 0;
       for($i = 0; $i < 10; ++$i) {
           $total += $i;
           
           if ($i == 5) {
               exit($total);
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

See also `PHP | exit( ) Function <https://www.geeksforgeeks.org/php-exit-function/>`_ and `PHP | die() & sleep() functions <https://medium.com/@dominic_55284/php-die-sleep-functions-7e766f9900e4>`_.

Related : :ref:`Language Construct <language-construct>`, :ref:`Shutdown Function <shutdown-function>`, :ref:`Destructor <destructor>`, :ref:`Finally <finally>`, :ref:`Propagation <propagation>`, :ref:`Return Value <return-value>`, :ref:`set_error_handler() <set_error_handler>`, :ref:`Testable <testable>`

Added in PHP 8.1
