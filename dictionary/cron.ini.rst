.. _cron:
.. meta::
	:description:
		Cron: A cron job is a scheduled task that runs PHP code automatically at specified times or intervals, without a web request.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cron
	:twitter:description: Cron: A cron job is a scheduled task that runs PHP code automatically at specified times or intervals, without a web request
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cron
	:og:type: article
	:og:description: A cron job is a scheduled task that runs PHP code automatically at specified times or intervals, without a web request
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cron.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cron","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:22 +0000","dateModified":"Sun, 25 Jan 2026 20:46:22 +0000","description":"A cron job is a scheduled task that runs PHP code automatically at specified times or intervals, without a web request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cron.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cron
----

A cron job is a scheduled task that runs PHP code automatically at specified times or intervals, without a web request.

It’s usually handled by the operating system (Linux/Unix cron daemon), not by PHP itself. 

There are many cron alternatives, like systemd timers, framework schedulers (Laravel, Yii...), components schedulers (symfony,), Windows Task Scheduler, Kubernetes CronJobs, cloud-native schedulers, database-backed schedulers, HTTP-based scheduling (external pings), and workflow schedulers.

`Documentation <https://en.wikipedia.org/wiki/Cron>`__

Related : :ref:`Jobqueue <jobqueue>`

Related packages : `symfony/scheduler <https://packagist.org/packages/symfony/scheduler>`_, `peppeocchi/php-cron-scheduler <https://packagist.org/packages/peppeocchi/php-cron-scheduler>`_, `crunzphp/crunz <https://packagist.org/packages/crunzphp/crunz>`_, `woocommerce/action-scheduler <https://packagist.org/packages/woocommerce/action-scheduler>`_
