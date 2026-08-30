---
type: "PHP Feature"
title: "Process"
description: "A process is an instance of a running program managed by the operating system."
resource: "https://en.wikipedia.org/wiki/Process"
tags: ["system"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Process

A process is an instance of a running program managed by the operating system. A process is executed by the web server, the operating system directly, or a worker, such as in a job queue.

A process has its own memory space, process identifier, and share nothing with other processes. It requires interprocess communications channels, such as files or sockets.

A process may spawn other processes, which may be fully independent, or act as a child process. It may also have threads, which act as child processes, though share memory with the parent process.

PHP manage processes with the pcntl extension, and some shell native functions, ``shell_exec()``, ``shell()``, back-ticks. It may also be managed directly by other process, such as web server or job queues.

A process may also be a consistent way for a team to work. For example, PHP development, bug processing, feature implementation, release. This is a human organization term.

## Documentation
- [https://en.wikipedia.org/wiki/Process](https://en.wikipedia.org/wiki/Process)

## See Also

## Related
- [Jobqueue](/features/jobqueue.md)
- [Thread](/features/thread.md)
- [pcntl_signal()](/features/pcntl_signal.md)
- [Concurrency](/features/concurrency.md)
- [execve()](/features/execve.md)
- [Shared-Nothing Architecture](/features/shared-nothing.md)
- [Worker](/features/worker.md)

## Details
- Extension: ext-pcntl

