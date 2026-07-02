.. _makefile:
.. _make:
.. meta::
	:description:
		Makefile: A Makefile is a configuration file used by the ``make`` build automation tool.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Makefile
	:twitter:description: Makefile: A Makefile is a configuration file used by the ``make`` build automation tool
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Makefile
	:og:type: article
	:og:description: A Makefile is a configuration file used by the ``make`` build automation tool
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/makefile.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Makefile","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:20:04 +0000","dateModified":"Tue, 30 Jun 2026 15:20:04 +0000","description":"A Makefile is a configuration file used by the ``make`` build automation tool","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Makefile.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Makefile
--------

A Makefile is a configuration file used by the ``make`` build automation tool. It defines targets, their dependencies, and the shell commands to run when a target is built. Targets declared with ``.PHONY`` are always executed regardless of any file with the same name.

In PHP projects, Makefiles act as task runners that group common developer operations: installing dependencies, running tests, checking code style, running static analysis, or deploying.

.. code-block:: php
   
   # Makefile
   .PHONY: install test lint fix deploy
   
   install:
   \tcomposer install
   
   test:
   \tvendor/bin/phpunit
   
   lint:
   \tvendor/bin/phpstan analyse src/
   \tvendor/bin/php-cs-fixer check src/
   
   fix:
   \tvendor/bin/php-cs-fixer fix src/
   
   deploy: test
   \trsync -avz src/ user@server:/var/www/app/


`Documentation <https://en.wikipedia.org/wiki/Make_(software)>`__

See also `GNU make manual <https://www.gnu.org/software/make/manual/make.html>`_.

Related : :ref:`Continuous Integration (CI) <ci>`, :ref:`Task Runner <task-runner>`, :ref:`Deployment <deploy>`, :ref:`Composer <composer>`, :ref:`Build <build>`
