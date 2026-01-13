.. _runtime-checks:
.. meta::
	:description:
		Runtime Checks: Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Runtime Checks
	:twitter:description: Runtime Checks: Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Runtime Checks
	:og:type: article
	:og:description: Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/runtime-checks.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A never-returning function must not return.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A never-returning function must not return.html","name":"Runtime Checks","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Runtime Checks.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Runtime Checks
--------------

Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script. These checks are performed dynamically while the script is running, as opposed to static checks which are done before the script is executed. Runtime checks help ensure that the program behaves as expected and can catch potential issues during execution.

.. code-block:: php
   
   <?php
   
   // string $string is a static check : it can be checked before running
   function foo(string $string, $argument) {
   	// This is a runtime check : it needs to run
   	if (is_string($argument)) {
   		// 
   	}
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Runtime_verification>`__
