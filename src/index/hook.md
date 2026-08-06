# Hook
A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system. Rather than modifying existing code directly, hooks let external logic react to or alter behaviour at extension points.

Hooks appear in several distinct forms during development:

+ ``Property hooks``: they are the ``get`` and ``set`` accessors, attached directly to a class property, replacing the need for explicit getter and setter methods.
+ ``Webhooks``: they are HTTP callbacks where a remote server pushes event notifications to a registered URL. The receiving application exposes an endpoint and reacts to the incoming payload.
+ ``Git hooks``: they are shell scripts that Git executes automatically at specific points in the version-control workflow, such as before a commit or after a push. They are widely used to enforce code-quality checks in projects.

In plugin and framework architectures, hooks are often called ``filters`` or ``actions`` in WordPress, ``events`` in Symfony and Laravel, or simply ``listeners``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hook.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hook.html","name":"Hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:39 +0000","dateModified":"Thu, 06 Aug 2026 05:50:39 +0000","description":"A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## See Also

+ [Hooking](https://en.wikipedia.org/wiki/Hooking)

## Related

+ [Property Hook](property-hook.ini.html)
+ [Webhook](webhook.ini.html)
+ [Git Hook](git-hook.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Observer Pattern](observer-pattern.ini.html)
+ [Callbacks](callback.ini.html)
+ [Plugin](plugin.ini.html)
+ [Listener](listener.ini.html)
