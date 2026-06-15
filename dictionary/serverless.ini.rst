.. _serverless:
.. meta::
	:description:
		Serverless: Serverless computing is an execution model where a cloud provider allocates compute resources on demand, scaling to zero when idle.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Serverless
	:twitter:description: Serverless: Serverless computing is an execution model where a cloud provider allocates compute resources on demand, scaling to zero when idle
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Serverless
	:og:type: article
	:og:description: Serverless computing is an execution model where a cloud provider allocates compute resources on demand, scaling to zero when idle
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/serverless.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Serverless","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Serverless computing is an execution model where a cloud provider allocates compute resources on demand, scaling to zero when idle","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Serverless.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Serverless
----------

Serverless computing is an execution model where a cloud provider allocates compute resources on demand, scaling to zero when idle. Developers deploy functions or entire applications without managing servers.

PHP runs serverlessly via AWS Lambda (using Bref), Google Cloud Functions, Azure Functions, or Vercel. The ``bref`` package is the most common bridge, wrapping PHP applications for Lambda execution.

See also `Bref — Serverless PHP <https://bref.sh/>`_ and `AWS Lambda with PHP <https://bref.sh/docs/runtimes/>`_.

Related : :ref:`Cloud <cloud>`, :ref:`IaaS <iaas>`, :ref:`PaaS <paas>`, :ref:`Software-as-a-Service (SAAS) <saas>`, :ref:`Architecture <architecture>`, :ref:`Pay-as-you-go <pay-as-you-go>`, :ref:`SplSubject <splsubject>`

Related packages : `bref/bref <https://packagist.org/packages/bref/bref>`_
