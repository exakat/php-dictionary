# Branch
A branch is one of the two alternative in a if then expression. There is the ``then`` branch, and the ``else`` branch. There are usually two meanings associated with PHP code:

+ Control-flow branch: the path taken by execution when a condition is evaluated, as in ``if``/``else``, ``match()`` arms, or ``switch`` cases
+ VCS branch: a parallel, independent line of development in a version control system such as git, created to work on a feature or fix without disturbing the main line, and later reintegrated through a pull request or a merge commit.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/branch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/branch.html","name":"Branch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 15:10:53 +0000","dateModified":"Sat, 11 Jul 2026 15:10:53 +0000","description":"A branch is one of the two alternative in a if then expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Branch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Branch"}]}]}</script>
```php
<?php

    // a match with 2 arm, including the default
    if ($a) {
        $branch = 'then';
    } else {
        $branch = 'else';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.if.php)**
## Related

+ [Arm](arm.html)
+ [If Then Else](if-then.html)
+ [Pull Request (PR)](pr.html)
+ [VCS Commit](vcs-commit.html)
+ [Worktree](worktree.html)
