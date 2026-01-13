.. _exit:
.. _die:
.. meta::
	:description:
		Exit: Exit and dies terminates the current process.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exit
	:twitter:description: Exit: Exit and dies terminates the current process
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Exit
	:og:type: article
	:og:description: Exit and dies terminates the current process
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exit.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Exit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Exit and dies terminates the current process","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Exit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Exit
----

Exit and dies terminates the current process. 

exit is a language construct. 

shutdown functions and constructor are still executed after a call to exit.


.. code-block:: php
   
   <?php
   
   class x {
       final const X = 1;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

See also `PHP | exit( ) Function <https://www.geeksforgeeks.org/php-exit-function/>`_

Related : :ref:`Language Construct <language-construct>`, :ref:`Shutdown Function <shutdown-function>`, :ref:`Destructor <destructor>`

Added in PHP 8.1
