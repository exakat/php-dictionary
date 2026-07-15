.. _build:
.. _build-process:
.. _build-tool:
.. meta::
	:description:
		Build: A build is the automated process of transforming source code into a deployable artifact.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Build
	:twitter:description: Build: A build is the automated process of transforming source code into a deployable artifact
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Build
	:og:type: article
	:og:description: A build is the automated process of transforming source code into a deployable artifact
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/build.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/build.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/build.ini.html","name":"Build","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:19:44 +0000","dateModified":"Sun, 28 Jun 2026 10:19:44 +0000","description":"A build is the automated process of transforming source code into a deployable artifact","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Build.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Build
-----

A build is the automated process of transforming source code into a deployable artifact. Build steps typically include: installing dependencies, running static analysis, executing tests, generating assets, and packaging the application.

Build processes are commonly driven by tools such as Make, Phing, Composer scripts, or shell scripts, and are integrated into a Continuous Integration pipeline.

A reproducible build produces the same artifact from the same source code, which is essential for reliable deployments.

.. code-block:: php
   
   <?php
   
       // composer.json scripts section acts as a simple build runner
       // { "scripts": { "build": ["@lint", "@test", "@analyse"] } }
       
       // Phing build.xml target example:
       // <target name="build" depends="lint,test,package"/>
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Software_build>`__

See also `Phing — PHP build tool <https://www.phing.info/>`_, `Composer scripts <https://getcomposer.org/doc/articles/scripts.md>`_ and `Deployer — PHP deployment tool <https://deployer.org/>`_.

Related : :ref:`Continuous Integration (CI) <ci>`, :ref:`DevOps <devops>`, :ref:`Composer <composer>`, :ref:`Deployment <deploy>`, :ref:`Test <test>`, :ref:`Makefile <makefile>`

Related packages : `phing/phing <https://packagist.org/packages/phing/phing>`_, `deployer/deployer <https://packagist.org/packages/deployer/deployer>`_
