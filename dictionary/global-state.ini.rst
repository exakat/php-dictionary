.. _global-state:
.. meta::
	:description:
		Global State: Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Global State
	:twitter:description: Global State: Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Global State
	:og:type: article
	:og:description: Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/global-state.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/global-state.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/global-state.ini.html","name":"Global State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:16:30 +0000","dateModified":"Sun, 12 Jul 2026 20:16:30 +0000","description":"Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Global State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Global State
------------

Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties.

Global state is often considered an anti-pattern because it makes code harder to test, debug, and reason about. It creates hidden dependencies between components.

Common sources of global state include:
+ ``$GLOBALS`` superglobal
+ Static class properties
+ Constants defined with ``define()``
+ Files included with require/include
+ Environment variables

.. code-block:: php
   
   <?php
   
       // Global state via static property
       class Config {
           public static array $settings = [];
       }
       
       // Global state via $GLOBALS
       $GLOBALS['db_host'] = 'localhost';
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Global_state>`__

Related : :ref:`Global Variables <global-variable>`, :ref:`$GLOBALS <globals>`, :ref:`State <state>`, :ref:`Immutable <immutable>`, :ref:`Side Effect <side-effect>`, :ref:`Unit Test <unit-test>`
