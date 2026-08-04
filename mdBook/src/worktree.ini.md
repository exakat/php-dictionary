# Worktree
A worktree is a Git feature that allows multiple working directories to be linked to a single repository. With ``git worktree add``, a developer can check out a different branch into a separate directory without disturbing the current working directory.

This is useful when:

+ Working on a hotfix while keeping the main feature branch open
+ Running tests or builds on a different branch simultaneously
+ Comparing the current implementation against another branch side by side
+ CI/CD pipelines needing isolated checkouts from the same repository

Each linked worktree has its own index and HEAD but shares the object store with the main repository, avoiding duplication.
## See Also

+ [A practical guide to git worktrees](https://opensource.com/article/21/4/git-worktree)

Related : [git](git), [Branch](Branch), [Version Control System (VCS)](Version Control System (VCS)), [Commit](Commit), [Timing Attack](Timing Attack), [VCS Commit](VCS Commit)
