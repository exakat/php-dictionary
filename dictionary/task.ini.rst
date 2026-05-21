.. _task:
.. _job:
.. meta::
	:description:
		Task: A task is simply a unit of work: something that needs to be done.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Task
	:twitter:description: Task: A task is simply a unit of work: something that needs to be done
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Task
	:og:type: article
	:og:description: A task is simply a unit of work: something that needs to be done
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/task.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Task","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Apr 2026 08:01:07 +0000","dateModified":"Mon, 20 Apr 2026 08:01:07 +0000","description":"A task is simply a unit of work: something that needs to be done","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Task.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Task
----

A task is simply a unit of work: something that needs to be done.

A task usually as a well defined algorithm or method, and parameter and signature. It depends on little external information, and may be run at an arbitrary moment: although, it is expected to be run as soon as possible.

It is usually expected to take some time to complete.

Task are handled by a task manager, or a job queue. One process insert the tasks, seconduray servers process the tasks and finally, one last process make the result of the task known.


`Documentation <https://en.wikipedia.org/wiki/Task_(computing)>`__

See also `Gearman <https://gearman.org/>`_.

Related : :ref:`Jobqueue <jobqueue>`, :ref:`Cron <cron>`

Related packages : `php-task/php-task <https://packagist.org/packages/php-task/php-task>`_
