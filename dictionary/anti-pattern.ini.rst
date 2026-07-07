.. _anti-pattern:
.. _antipattern:
.. meta::
	:description:
		Anti-Pattern: An anti-pattern is a common but counterproductive solution to a recurring problem.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anti-Pattern
	:twitter:description: Anti-Pattern: An anti-pattern is a common but counterproductive solution to a recurring problem
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Anti-Pattern
	:og:type: article
	:og:description: An anti-pattern is a common but counterproductive solution to a recurring problem
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anti-pattern.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Anti-Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 08:15:07 +0000","dateModified":"Tue, 07 Jul 2026 08:15:07 +0000","description":"An anti-pattern is a common but counterproductive solution to a recurring problem","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Anti-Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Anti-Pattern
------------

An anti-pattern is a common but counterproductive solution to a recurring problem. Unlike a mistake made once, an anti-pattern is a response that appears reasonable or even familiar, is applied repeatedly, and systematically produces negative consequences: increased complexity, fragility, poor performance, or security vulnerabilities.

The term was coined in 1995 by Andrew Koenig and popularised by the 1998 book AntiPatterns by Brown, Malveau, McCormick, and Mowbray. It draws an explicit parallel with design patterns: where a design pattern documents a proven good solution, an anti-pattern documents a proven bad one, together with the root cause, the symptoms that reveal it, and the refactored solution that replaces it.

Anti-patterns appear at every level of software development:

+ Architectural anti-patterns: big ball of mud, god object, spaghetti code
+ Design anti-patterns: singleton overuse, service Locator, magic container
+ Coding anti-patterns: copy-paste programming, premature optimisation, magic numbers
+ PHP-specific anti-patterns: suppressing errors with ``@``, using ``eval()`` for configuration, ``register_globals``-era dynamic variable injection

Recognising anti-patterns is a key skill in code review and static analysis. Exakat detects a wide range of PHP anti-patterns through dedicated rules.

.. code-block:: php
   
   <?php
   
   // Anti-pattern: God Object — one class that knows and does everything
   class Application {
       public function connectDatabase() { /* ... */ }
       public function renderHtml() { /* ... */ }
       public function sendEmail() { /* ... */ }
       public function validateInput() { /* ... */ }
       public function logError() { /* ... */ }
       // ... dozens more methods
   }
   
   // Anti-pattern: error suppression hiding real problems
   $result = @file_get_contents('data.json'); // silences warnings instead of handling them
   
   // Anti-pattern: magic numbers with no explanation
   if ($status === 3) { // What does 3 mean?
       redirect();
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Anti-pattern>`__

See also `Anti-pattern — Wikipedia <https://en.wikipedia.org/wiki/Anti-pattern>`_ and `AntiPatterns book (Brown et al., 1998) <https://en.wikipedia.org/wiki/AntiPatterns>`_.

Related : :ref:`Pattern <pattern>`, :ref:`Fat Controller <fat-controller>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Analysis <analysis>`
