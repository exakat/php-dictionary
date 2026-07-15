.. _implicit-state:
.. meta::
	:description:
		Implicit State: Implicit state is state that a function or method relies on without declaring it as a parameter or return value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicit State
	:twitter:description: Implicit State: Implicit state is state that a function or method relies on without declaring it as a parameter or return value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Implicit State
	:og:type: article
	:og:description: Implicit state is state that a function or method relies on without declaring it as a parameter or return value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/implicit-state.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/implicit-state.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/implicit-state.ini.html","name":"Implicit State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:21 +0000","dateModified":"Fri, 19 Jun 2026 21:24:21 +0000","description":"Implicit state is state that a function or method relies on without declaring it as a parameter or return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Implicit State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Implicit State
--------------

Implicit state is state that a function or method relies on without declaring it as a parameter or return value. It exists outside the explicit flow of data through the code.

Implicit state includes: global variables, e.g. ``$GLOBALS``, superglobals like ``$_SESSION``, ``$_GET``, static class properties modified as side effects, the current error state, locale settings, timezone, and active database connections.

Implicit state makes code harder to test: they requires careful setup of global state or a clean and reset operation before each test, they are harder to reason about as behavior depends on invisible context, and prone to subtle bugs when state leaks between different parts of the application or across requests.

Prefer explicit state: pass values as parameters and return new state as return values.

.. code-block:: php
   
   <?php
   
       // Implicit state: function behavior depends on global timezone setting
       date_default_timezone_set('UTC');
       echo date('H:i'); // depends on global timezone, not a parameter
       
       // Explicit alternative: pass timezone explicitly
       echo (new DateTimeImmutable('now', new DateTimeZone('UTC')))->format('H:i');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/State_(computer_science)>`__

Related : :ref:`State <state>`, :ref:`Implicit <implicit>`, :ref:`Hidden State <hidden-state>`, :ref:`Global Variables <global-variable>`, :ref:`Stateful <stateful>`, :ref:`$GLOBALS <globals>`, :ref:`Distributed State <distributed-state>`
