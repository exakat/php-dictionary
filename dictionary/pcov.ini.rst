.. _pcov:
.. meta::
	:description:
		PCOV: ``PCOV`` is a PIE extension dedicated to code coverage collection.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PCOV
	:twitter:description: PCOV: ``PCOV`` is a PIE extension dedicated to code coverage collection
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PCOV
	:og:type: article
	:og:description: ``PCOV`` is a PIE extension dedicated to code coverage collection
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pcov.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pcov.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pcov.ini.html","name":"PCOV","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:33:32 +0000","dateModified":"Tue, 14 Jul 2026 05:33:32 +0000","description":"``PCOV`` is a PIE extension dedicated to code coverage collection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PCOV.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PCOV
----

``PCOV`` is a PIE extension dedicated to code coverage collection. It records which lines of code were executed during a test run, the same job Xdebug can do, but PCOV does only that, with none of Xdebug's step debugging, profiling, or tracing machinery, which makes it substantially faster.

Code coverage is used to measure how much of a codebase is exercised by a test suite, typically reported as a percentage of lines, branches, or functions covered. Test runners such as PHPUnit can drive PCOV directly through its API to produce coverage reports, for example in Clover XML or HTML.

Because it has a single purpose, PCOV is the preferred choice for coverage collection in CI pipelines where Xdebug would otherwise slow the run down considerably; Xdebug remains preferable when interactive step debugging is also needed.

.. code-block:: php
   
   <?php
   
       // PHPUnit driven with PCOV as the coverage driver:
       // vendor/bin/phpunit --coverage-html coverage/
       // (PHPUnit auto-detects and prefers PCOV over Xdebug when both are loaded.)
   
       // Low-level API, rarely called directly by application code.
       pcov\start();
   
       require 'code-under-test.php';
   
       $waiting = pcov\collect(pcov\inclusive, [__DIR__ . '/code-under-test.php']);
       pcov\clear();
   
       print_r($waiting);
   
   ?>


`Documentation <https://packagist.org/packages/pecl/pcov>`__

See also `PCOV on github <https://github.com/krakjoe/pcov>`_.

Related : :ref:`Xdebug <xdebug>`, :ref:`PHPunit <phpunit>`, :ref:`Testable <testable>`, :ref:`Green <green>`
