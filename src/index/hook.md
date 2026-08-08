# Hook
A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system. Rather than modifying existing code directly, hooks let external logic react to or alter behaviour at extension points.

Hooks appear in several distinct forms during development:

+ ``Property hooks``: they are the ``get`` and ``set`` accessors, attached directly to a class property, replacing the need for explicit getter and setter methods.
+ ``Webhooks``: they are HTTP callbacks where a remote server pushes event notifications to a registered URL. The receiving application exposes an endpoint and reacts to the incoming payload.
+ ``Git hooks``: they are shell scripts that Git executes automatically at specific points in the version-control workflow, such as before a commit or after a push. They are widely used to enforce code-quality checks in projects.

In plugin and framework architectures, hooks are often called ``filters`` or ``actions`` in WordPress, ``events`` in Symfony and Laravel, or simply ``listeners``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hook.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hook.html","name":"Hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:39 +0000","dateModified":"Thu, 06 Aug 2026 05:50:39 +0000","description":"A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Hook"}]}]}</script>
## See Also

+ [Hooking](https://en.wikipedia.org/wiki/Hooking)

## Related

+ [Property Hook](property-hook.html)
+ [Webhook](webhook.html)
+ [Git Hook](git-hook.html)
+ [Event Driven](event-driven.html)
+ [Observer Pattern](observer-pattern.html)
+ [Callbacks](callback.html)
+ [Plugin](plugin.html)
+ [Listener](listener.html)
