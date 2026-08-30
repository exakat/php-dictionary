---
type: "PHP Feature"
title: "Worktree"
description: "A worktree is a Git feature that allows multiple working directories to be linked to a single repository."
resource: "https://git-scm.com/docs/git-worktree"
tags: ["vcs", "tooling"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Worktree

A worktree is a Git feature that allows multiple working directories to be linked to a single repository. With ``git worktree add``, a developer can check out a different branch into a separate directory without disturbing the current working directory.

This is useful when:

+ Working on a hotfix while keeping the main feature branch open
+ Running tests or builds on a different branch simultaneously
+ Comparing the current implementation against another branch side by side
+ CI/CD pipelines needing isolated checkouts from the same repository

Each linked worktree has its own index and HEAD but shares the object store with the main repository, avoiding duplication.

## Documentation
- [https://git-scm.com/docs/git-worktree](https://git-scm.com/docs/git-worktree)

## See Also
- [A practical guide to git worktrees](https://opensource.com/article/21/4/git-worktree)

## Related
- [git](/features/git.md)
- [Branch](/features/branch.md)
- [Version Control System (VCS)](/features/vcs.md)
- [Commit](/features/commit.md)
- [Timing Attack](/features/timing-attack.md)
- [VCS Commit](/features/vcs-commit.md)

