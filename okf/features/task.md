---
type: "PHP Feature"
title: "Task"
description: "A task is simply a unit of work: something that needs to be done."
resource: "https://en.wikipedia.org/wiki/Task_(computing)"
tags: ["architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Task

A task is simply a unit of work: something that needs to be done.

A task usually as a well defined algorithm or method, and parameter and signature. It depends on little external information, and may be run at an arbitrary moment: although, it is expected to be run as soon as possible.

It is usually expected to take some time to complete.

Task are handled by a task manager, or a job queue. One process insert the tasks, secondary servers process the tasks and finally, one last process make the result of the task known.

## Documentation
- [https://en.wikipedia.org/wiki/Task_(computing)](https://en.wikipedia.org/wiki/Task_(computing))

## See Also
- [Gearman](https://gearman.org/)

## Related
- [Jobqueue](/features/jobqueue.md)
- [Cron](/features/cron.md)
- [Workflow](/features/workflow.md)

## Details
- Packagist: [php-task/php-task](https://packagist.org/packages/php-task/php-task)

