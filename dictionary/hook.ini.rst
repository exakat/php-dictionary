.. _hook:
.. _callback-hook:
.. meta::
	:description:
		Hook: A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hook
	:twitter:description: Hook: A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hook
	:og:type: article
	:og:description: A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hook.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hook.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hook.ini.html","name":"Hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:52:41 +0000","dateModified":"Fri, 03 Jul 2026 07:52:41 +0000","description":"A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hook
----

A hook is a mechanism that allows custom code to be inserted at a predefined point in a process, framework, or system. Rather than modifying existing code directly, hooks let external logic react to or alter behaviour at extension points.

Hooks appear in several distinct forms during development:

+ ``Property hooks``: they are the ``get`` and ``set`` accessors, attached directly to a class property, replacing the need for explicit getter and setter methods.
+ ``Webhooks``: they are HTTP callbacks where a remote server pushes event notifications to a registered URL. The receiving application exposes an endpoint and reacts to the incoming payload.
+ ``Git hooks``: they are shell scripts that Git executes automatically at specific points in the version-control workflow, such as before a commit or after a push. They are widely used to enforce code-quality checks in projects.

In plugin and framework architectures, hooks are often called ``filters`` or ``actions`` in WordPress, ``events`` in Symfony and Laravel, or simply ``listeners``.

Related : :ref:`Property Hook <property-hook>`, :ref:`Webhook <webhook>`, :ref:`Git Hook <git-hook>`, :ref:`Event Driven <event-driven>`, :ref:`Observer Pattern <observer-pattern>`, :ref:`Callbacks <callback>`, :ref:`Plugin <plugin>`, :ref:`Listener <listener>`
