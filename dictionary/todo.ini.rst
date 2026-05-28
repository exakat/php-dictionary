.. _todo:
.. _FIXME:
.. _HACK:
.. _XXX:
.. meta::
	:description:
		TODO: ``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: TODO
	:twitter:description: TODO: ``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: TODO
	:og:type: article
	:og:description: ``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/todo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"TODO","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:55 +0000","dateModified":"Thu, 28 May 2026 06:09:55 +0000","description":"``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/TODO.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


TODO
----

``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements. It is not a PHP language feature, but a widely adopted convention recognized by IDEs, static analyzers, and code-review tools.

Common variants include ``FIXME``, for broken code that must be repaired, ``HACK``, for a workaround that should be replaced, and ``XXX``, a warning that the code is dangerous or unclear.

Static analyzers can locate TODO comments in a codebase and report them as technical debt. Leaving TODO comments in production code is generally discouraged unless they are tied to a tracked issue.

.. code-block:: php
   
   <?php
   
       // TODO: replace this with a proper caching layer
       function getUser(int $id): array
       {
           // FIXME: this query is missing an index on user_id
           return $pdo->query("SELECT * FROM users WHERE id = $id")->fetch();
       }
   
       // HACK: upstream library does not handle null — remove after upgrading to v3
       $value = $result ?? '';
   
       // XXX: this block mutates global state; refactor before next release
       global $config;
       $config['debug'] = true;
   
   ?>


See also `Exakat: TodoInCode <https://exakat.readthedocs.io/en/latest/Rules.html#todo-in-code>`_.

Related : :ref:`Comments <comment>`
