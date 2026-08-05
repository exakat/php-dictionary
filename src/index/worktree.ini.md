# Worktree
A worktree is a Git feature that allows multiple working directories to be linked to a single repository. With ``git worktree add``, a developer can check out a different branch into a separate directory without disturbing the current working directory.

This is useful when:

+ Working on a hotfix while keeping the main feature branch open
+ Running tests or builds on a different branch simultaneously
+ Comparing the current implementation against another branch side by side
+ CI/CD pipelines needing isolated checkouts from the same repository

Each linked worktree has its own index and HEAD but shares the object store with the main repository, avoiding duplication.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/worktree.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/worktree.ini.html","name":"Worktree","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 09:03:45 +0000","dateModified":"Thu, 02 Jul 2026 09:03:45 +0000","description":"A worktree is a Git feature that allows multiple working directories to be linked to a single repository","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Worktree.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://git-scm.com/docs/git-worktree)**
## See Also

+ [A practical guide to git worktrees](https://opensource.com/article/21/4/git-worktree)

## Related

+ [git](git.ini.html)
+ [Branch](branch.ini.html)
+ [Version Control System (VCS)](vcs.ini.html)
+ [Commit](commit.ini.html)
+ [Timing Attack](timing-attack.ini.html)
+ [VCS Commit](vcs-commit.ini.html)
