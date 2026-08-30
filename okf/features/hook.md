---
type: "concept"
title: "Hook"
description: "A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system."
tags: ["concept", "disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Hook

A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system. Rather than modifying existing code directly, hooks let external logic react to or alter behaviour at extension points.

Hooks appear in several distinct forms during development:

+ ``Property hooks``: they are the ``get`` and ``set`` accessors, attached directly to a class property, replacing the need for explicit getter and setter methods.
+ ``Webhooks``: they are HTTP callbacks where a remote server pushes event notifications to a registered URL. The receiving application exposes an endpoint and reacts to the incoming payload.
+ ``Git hooks``: they are shell scripts that Git executes automatically at specific points in the version-control workflow, such as before a commit or after a push. They are widely used to enforce code-quality checks in projects.

In plugin and framework architectures, hooks are often called ``filters`` or ``actions`` in WordPress, ``events`` in Symfony and Laravel, or simply ``listeners``.

## See Also
- [Hooking](https://en.wikipedia.org/wiki/Hooking)

## Related
- [Property Hook](/features/property-hook.md)
- [Webhook](/features/webhook.md)
- [Git Hook](/features/git-hook.md)
- [Event Driven](/features/event-driven.md)
- [Observer Pattern](/features/observer-pattern.md)
- [Callbacks](/features/callback.md)
- [Plugin](/features/plugin.md)
- [Listener](/features/listener.md)

