---
type: "concept"
title: "Stateful"
description: "Stateful refers to the retaining and managing the state or information about a user or a process across multiple requests."
resource: "https://www.php.net/manual/en/book.session.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Stateful

Stateful refers to the retaining and managing the state or information about a user or a process across multiple requests. PHP, by default, is stateless, meaning that each HTTP request is independent, and the server doesn't inherently maintain information about previous requests from the same user.

Stateful behavior is often required when the application needs to keep track of user data or the progress of a process over multiple page loads or requests. There are various mechanisms to implement statefulness with PHP, and some common methods include: cookies, session, hidden form fields.

## Documentation
- [https://www.php.net/manual/en/book.session.php](https://www.php.net/manual/en/book.session.php)

## See Also
- [Stateful vs. Stateless: Understanding the Key Differences](https://www.spiceworks.com/tech/cloud/articles/stateful-vs-stateless/)

## Related
- [Stateless](/features/stateless.md)
- [Distributed State](/features/distributed-state.md)
- [Hidden State](/features/hidden-state.md)
- [Implicit State](/features/implicit-state.md)
- [State](/features/state.md)

