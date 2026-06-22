.. _distributed-state:
.. meta::
	:description:
		Distributed State: Distributed state refers to application state that is scattered across multiple, loosely-connected locations rather than being owned by a single, well-defined component.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Distributed State
	:twitter:description: Distributed State: Distributed state refers to application state that is scattered across multiple, loosely-connected locations rather than being owned by a single, well-defined component
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Distributed State
	:og:type: article
	:og:description: Distributed state refers to application state that is scattered across multiple, loosely-connected locations rather than being owned by a single, well-defined component
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/distributed-state.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Distributed State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 20:35:58 +0000","dateModified":"Fri, 19 Jun 2026 21:24:22 +0000","description":"Distributed state refers to application state that is scattered across multiple, loosely-connected locations rather than being owned by a single, well-defined component","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Distributed State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Distributed State
-----------------

Distributed state refers to application state that is scattered across multiple, loosely-connected locations rather than being owned by a single, well-defined component.

Distributed state creates several detectable problems:

+ Implicit coupling: changing state in one file silently breaks another
+ Unpredictable execution order: the value depends on when code runs, not just what it does
+ Untestable code: a function cannot be tested in isolation if it reads global state
+ Hidden dependencies: the function signature lies. It looks pure but reads from $_SESSION or a static.


.. code-block:: php
   
   <?php
   
     //Global variables spread across files:
     $config = [];  // set in bootstrap.php
     // ... modified in module1.php, module2.php, read everywhere
     
     Static class properties shared across classes:
     class Auth { public static $user = null; }
     class Logger { /* reads Auth::$user */ }
     class Cart   { /* also reads Auth::$user */ }
     
     Superglobals ($_SESSION, $_COOKIE, $_SERVER) accessed everywhere:
     // session key 'cart' written in CartController, read in CheckoutController,
     // cleared in OrderController — no single owner
     $_SESSION['cart'][] = $item;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Distributed_computing>`__

Related : :ref:`State <state>`, :ref:`Implicit State <implicit-state>`, :ref:`Hidden State <hidden-state>`, :ref:`Implicit <implicit>`, :ref:`Stateful <stateful>`, :ref:`Global Variables <global-variable>`, :ref:`$GLOBALS <globals>`, :ref:`Appeasement Pattern <appeasement-pattern>`, :ref:`Load Balancer <load-balancer>`
