---
type: "concept"
title: "Persistence"
description: "Persistence is related to the life cycle of a resource."
resource: "https://en.wikipedia.org/wiki/Persistence_(computer_science)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Persistence

Persistence is related to the life cycle of a resource. A piece of data is said to be persistent when it exceeds the duration of the current process.

In particular, databases, sessions, shared memory, file system or cache allows for persistent storage: the current process may store data there, and retrieve it later, provided it has transmitted an identifier. 

Persistence also applies to database connection, where the connection is not closed at the end of the current process, but stays open for the next to reuse it, saving some overhead, but keeping a connection open even if not busy.

Persistent storage may also be called permanent storage.

## Documentation
- [https://en.wikipedia.org/wiki/Persistence_(computer_science)](https://en.wikipedia.org/wiki/Persistence_(computer_science))

## See Also
- [What is Data Persistence? A Complete Guide](https://rivery.io/data-learning-center/data-persistence/)
- [What Is an In-Memory Database? - AWS](https://aws.amazon.com/nosql/in-memory/)

## Related
- [Object Persistence](/features/object-persistence.md)
- [Connection Persistence](/features/connexion-persistence.md)
- [Session](/features/session.md)

