---
type: "concept"
title: "Execution Path"
description: "The execution path refers to the sequence in which the PHP interpreter processes and executes the code."
resource: "https://en.wikipedia.org/wiki/Control_flow"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Execution Path

The execution path refers to the sequence in which the PHP interpreter processes and executes the code. By default, expressions are executed one after the other, and the execution path has many possible paths:

+ Code Entry Point, such as the called file, but also controllers, in mvc frameworks
+ Sequential Execution, where expressions are processed one after the other
+ Includes and Requires, which stop the execution in the current file and move to another file
+ Function and Method Calls, which stop the execution in the current file and move it to another part of the code
+ Control Structures, like ``goto``, ``foreach``, ``ifthen``, which choose a path or another with the current file
+ Error Handling, with error triggers and exceptions, and unhandled issues
+ Exit and Die, or simply the end of the file.

## Documentation
- [https://en.wikipedia.org/wiki/Control_flow](https://en.wikipedia.org/wiki/Control_flow)

## See Also
- [Control Structures](https://www.php.net/manual/en/language.control-structures.php)
- [goto](https://www.php.net/manual/en/control-structures.goto.php)

## Related
- [Call Graph](/features/call-graph.md)

