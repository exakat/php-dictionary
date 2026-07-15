.. _git-hook:
.. _githook:
.. meta::
	:description:
		Git Hook: Git hooks are scripts that Git executes automatically at specific points in the version-control workflow.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Git Hook
	:twitter:description: Git Hook: Git hooks are scripts that Git executes automatically at specific points in the version-control workflow
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Git Hook
	:og:type: article
	:og:description: Git hooks are scripts that Git executes automatically at specific points in the version-control workflow
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/git-hook.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/git-hook.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/git-hook.ini.html","name":"Git Hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:43:46 +0000","dateModified":"Fri, 03 Jul 2026 07:43:46 +0000","description":"Git hooks are scripts that Git executes automatically at specific points in the version-control workflow","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Git Hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Git Hook
--------

Git hooks are scripts that Git executes automatically at specific points in the version-control workflow. They live in the ``.git/hooks/`` directory of a repository and are triggered by operations such as committing, merging, pushing, or checking out.

Common hooks used in projects:

+ ``pre-commit`` runs before a commit is recorded. It is the standard place to invoke code-quality tools: static analysis or unit test suites to block commits that would introduce errors or style violations
+ ``commit-msg`` validates the commit message format, for example enforcing a conventional-commits pattern
+ ``pre-push`` runs before ``git push`` sends data to a remote. It is a last line of defence for running the full test suite
+ ``post-checkout`` and ``post-merge`` can automate ``composer install`` after switching branches or pulling changes

Because ``.git/hooks/`` is not tracked by version control, teams share hook scripts through tools such as ``captainhook/captainhook``, ``brainmaestro/composer-git-hooks``, or ``husky``, for JavaScript-adjacent stacks. These tools install hooks from a committed configuration file, ensuring every contributor runs the same checks.

.. code-block:: php
   
   #!/bin/sh
   # .git/hooks/pre-commit
   # Block commit if PHP syntax errors are found
   git diff --cached --name-only --diff-filter=ACM | grep '\.php$' | while read file; do
       php -l "$file" || exit 1
   done


`Documentation <https://git-scm.com/book/en/v2/Customizing-Git-Git-Hooks>`__

See also `CaptainHook <https://github.com/captainhookphp/captainhook>`_ and `composer-git-hooks <https://github.com/BrainMaestro/composer-git-hooks>`_.

Related : :ref:`Hook <hook>`, :ref:`git <git>`, :ref:`Version Control System (VCS) <vcs>`, :ref:`Continuous Integration (CI) <ci>`, :ref:`Commit <commit>`, :ref:`Linting <linting>`, :ref:`Code Review <code-review>`, :ref:`Composer <composer>`

Related packages : `captainhook/captainhook <https://packagist.org/packages/captainhook/captainhook>`_, `brainmaestro/composer-git-hooks <https://packagist.org/packages/brainmaestro/composer-git-hooks>`_
