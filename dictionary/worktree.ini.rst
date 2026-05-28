.. _worktree:
.. _git worktree:
.. meta::
	:description:
		Worktree: A worktree is a Git feature that allows multiple working directories to be linked to a single repository.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Worktree
	:twitter:description: Worktree: A worktree is a Git feature that allows multiple working directories to be linked to a single repository
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Worktree
	:og:type: article
	:og:description: A worktree is a Git feature that allows multiple working directories to be linked to a single repository
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/worktree.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Worktree","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:55 +0000","dateModified":"Thu, 28 May 2026 06:09:55 +0000","description":"A worktree is a Git feature that allows multiple working directories to be linked to a single repository","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Worktree.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Worktree
--------

A worktree is a Git feature that allows multiple working directories to be linked to a single repository. With ``git worktree add``, a developer can check out a different branch into a separate directory without disturbing the current working directory.

This is useful when:

+ Working on a hotfix while keeping the main feature branch open
+ Running tests or builds on a different branch simultaneously
+ Comparing the current implementation against another branch side by side
+ CI/CD pipelines needing isolated checkouts from the same repository

Each linked worktree has its own index and HEAD but shares the object store with the main repository, avoiding duplication.

`Documentation <https://git-scm.com/docs/git-worktree>`__

See also `git-worktree documentation <https://git-scm.com/docs/git-worktree>`_ and `A practical guide to git worktrees <https://opensource.com/article/21/4/git-worktree>`_.

Related : :ref:`git <git>`, :ref:`Branch <branch>`, :ref:`VCS <vcs>`, :ref:`Commit <commit>`
