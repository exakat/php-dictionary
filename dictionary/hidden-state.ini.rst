.. _hidden-state:
.. meta::
	:description:
		Hidden State: Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hidden State
	:twitter:description: Hidden State: Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hidden State
	:og:type: article
	:og:description: Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hidden-state.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Hidden State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:53:17 +0000","dateModified":"Fri, 03 Jul 2026 07:53:17 +0000","description":"Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hidden State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hidden State
------------

Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope.

Hidden state arises from: static properties of classes, as they persist for the lifetime of the request, modified anywhere; static variables; singleton instances; readonly properties; buffered output ``ob_start()``; the internal pointer of arrays; file handles; extension-level state, e.g., the last regex error from ``preg_last_error()``; and objects passed by reference that are mutated inside functions.

Hidden state is a common source of hard-to-reproduce bugs: the same function called twice with identical arguments may produce different results because some invisible state changed between the two calls. It also makes code difficult to test in isolation.

Unlike implicit state, which is about undeclared inputs, hidden state refers specifically to state that is not visible from the calling context.

.. code-block:: php
   
   <?php
   
       class Counter {
           private static int $count = 0; // hidden state: shared across all instances
       
           public static function increment(): void {
               self::$count++;
           }
       
           public static function get(): int {
               return self::$count;
           }
       }
       
       Counter::increment();
       // Somewhere else in the codebase...
       Counter::increment();
       
       echo Counter::get(); // 2 — but caller may not know it was called twice
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/State_(computer_science)>`__

See also `Avoiding Hidden State in PHP <https://phpunit.readthedocs.io/en/10.5/test-isolation.html>`_.

Related : :ref:`State <state>`, :ref:`Implicit State <implicit-state>`, :ref:`Implicit <implicit>`, :ref:`Stateful <stateful>`, :ref:`Global Variables <global-variable>`, :ref:`$GLOBALS <globals>`, :ref:`Appeasement Pattern <appeasement-pattern>`, :ref:`Distributed State <distributed-state>`
