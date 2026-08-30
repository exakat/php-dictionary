# Branch
A branch is one of the two alternative in a if then expression. There is the ``then`` branch, and the ``else`` branch. There are usually two meanings associated with PHP code:

+ Control-flow branch: the path taken by execution when a condition is evaluated, as in ``if``/``else``, ``match()`` arms, or ``switch`` cases
+ VCS branch: a parallel, independent line of development in a version control system such as git, created to work on a feature or fix without disturbing the main line, and later reintegrated through a pull request or a merge commit.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/branch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/branch.html","name":"Branch","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"A branch is one of the two alternative in a if then expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/branch.html"]}],"keywords":["syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/if-then.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pr.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vcs-commit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worktree.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.if.php"},{"@type":"CreativeWork","name":"How to Create a Branch in Git? | Atlassian Git Tutorial","url":"https:\/\/www.atlassian.com\/git\/tutorials\/using-branches"},{"@type":"CreativeWork","name":"Git Branch: Creating, Managing, and Merging Branches","url":"https:\/\/www.datacamp.com\/tutorial\/git-branch"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"branch"}]}]}</script>
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
## See Also

+ [How to Create a Branch in Git? | Atlassian Git Tutorial](https://www.atlassian.com/git/tutorials/using-branches)
+ [Git Branch: Creating, Managing, and Merging Branches](https://www.datacamp.com/tutorial/git-branch)

## Related

+ [Arm](arm.html)
+ [If Then Else](if-then.html)
+ [Pull Request (PR)](pr.html)
+ [VCS Commit](vcs-commit.html)
+ [Worktree](worktree.html)
