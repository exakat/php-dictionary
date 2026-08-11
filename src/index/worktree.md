# Worktree
A worktree is a Git feature that allows multiple working directories to be linked to a single repository. With ``git worktree add``, a developer can check out a different branch into a separate directory without disturbing the current working directory.

This is useful when:

+ Working on a hotfix while keeping the main feature branch open
+ Running tests or builds on a different branch simultaneously
+ Comparing the current implementation against another branch side by side
+ CI/CD pipelines needing isolated checkouts from the same repository

Each linked worktree has its own index and HEAD but shares the object store with the main repository, avoiding duplication.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worktree.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worktree.html","name":"Worktree","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 09:03:45 +0000","dateModified":"Thu, 02 Jul 2026 09:03:45 +0000","description":"A worktree is a Git feature that allows multiple working directories to be linked to a single repository","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Worktree.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"worktree"}]}]}</script>
**[Documentation](https://git-scm.com/docs/git-worktree)**
## See Also

+ [A practical guide to git worktrees](https://opensource.com/article/21/4/git-worktree)

## Related

+ [git](git.html)
+ [Branch](branch.html)
+ [Version Control System (VCS)](vcs.html)
+ [Commit](commit.html)
+ [Timing Attack](timing-attack.html)
+ [VCS Commit](vcs-commit.html)
