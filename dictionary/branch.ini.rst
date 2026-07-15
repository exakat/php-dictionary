.. _branch:
.. meta::
	:description:
		Branch: A branch is one of the two alternative in a if then expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Branch
	:twitter:description: Branch: A branch is one of the two alternative in a if then expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Branch
	:og:type: article
	:og:description: A branch is one of the two alternative in a if then expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/branch.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/branch.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/branch.ini.html","name":"Branch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 15:10:53 +0000","dateModified":"Sat, 11 Jul 2026 15:10:53 +0000","description":"A branch is one of the two alternative in a if then expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Branch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Branch
------

A branch is one of the two alternative in a if then expression. There is the ``then`` branch, and the ``else`` branch. There are usually two meanings associated with PHP code:

+ Control-flow branch: the path taken by execution when a condition is evaluated, as in ``if``/``else``, ``match()`` arms, or ``switch`` cases
+ VCS branch: a parallel, independent line of development in a version control system such as git, created to work on a feature or fix without disturbing the main line, and later reintegrated through a pull request or a merge commit.

.. code-block:: php
   
   <?php
   
       // a match with 2 arm, including the default
       if ($a) {
           $branch = 'then';
       } else {
           $branch = 'else';
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.if.php>`__

Related : :ref:`Arm <arm>`, :ref:`If Then Else <if-then>`, :ref:`Pull Request (PR) <pr>`, :ref:`VCS Commit <vcs-commit>`, :ref:`Worktree <worktree>`
