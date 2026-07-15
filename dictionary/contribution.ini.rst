.. _contribution:
.. _open-source-contribution:
.. meta::
	:description:
		Contribution: A contribution is a change submitted to a software project, typically in the form of a pull request or patch.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Contribution
	:twitter:description: Contribution: A contribution is a change submitted to a software project, typically in the form of a pull request or patch
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Contribution
	:og:type: article
	:og:description: A contribution is a change submitted to a software project, typically in the form of a pull request or patch
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/contribution.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/contribution.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/contribution.ini.html","name":"Contribution","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:26:57 +0000","dateModified":"Tue, 16 Jun 2026 15:26:57 +0000","description":"A contribution is a change submitted to a software project, typically in the form of a pull request or patch","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Contribution.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Contribution
------------

A contribution is a change submitted to a software project, typically in the form of a pull request or patch. Contributing to open-source projects is a core part of the PHP ecosystem: the language itself, its extensions, and the majority of popular frameworks and libraries are developed collaboratively.

Contributions can take many forms:

+ Bug reports and reproducible test cases
+ Code fixes, new features, and refactoring
+ Documentation improvements
+ Test coverage additions
+ Translations and localization

Many Open Source projects provide a ``CONTRIBUTING.md`` file that describes coding standards, testing requirements, and the review process.

PHP's own development process goes through RFCs voted on by internals contributors.


.. code-block:: php
   
   <?php
   
   // Example: typical open-source contribution workflow (shell commands)
   // git clone https://github.com/vendor/project
   // cd project
   // git checkout -b fix/issue-123
   // # Make changes
   // git add .
   // git commit -m 'Fix: description of the change'
   // git push origin fix/issue-123
   // # Open a pull request on GitHub
   
   ?>


`Documentation <https://docs.github.com/en/get-started/exploring-projects-on-github/contributing-to-a-project>`__

See also `Contributing to open source - GitHub Docs <https://docs.github.com/en/get-started/exploring-projects-on-github/contributing-to-open-source>`_ and `PHP Internals <https://www.php.net/get-involved.php>`_.

Related : :ref:`Open Source <open-source>`, :ref:`git <git>`, :ref:`Pull Request (PR) <pr>`, :ref:`PHP RFC <php-rfc>`, :ref:`Community <community>`
