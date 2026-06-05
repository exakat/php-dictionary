.. _pay-as-you-go:
.. _payg:
.. _consumption-based-pricing:
.. meta::
	:description:
		Pay-as-you-go: Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pay-as-you-go
	:twitter:description: Pay-as-you-go: Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pay-as-you-go
	:og:type: article
	:og:description: Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pay-as-you-go.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Pay-as-you-go","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:44:39 +0000","dateModified":"Fri, 05 Jun 2026 08:44:39 +0000","description":"Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pay-as-you-go.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pay-as-you-go
-------------

Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity.

In practice this means: compute time, counted with CPU-seconds or request count, memory, measured by Gb per hours, storage measured by Gb per month, and outgoing traffic on the network are all billed in small, incremental units. When usage is zero, the cost is zero.

This model is dominant in serverless and function-as-a-service platforms, where PHP code can be deployed as individual functions. It contrasts with reserved or on-demand instance pricing, where a virtual machine runs continuously whether or not it handles traffic.

For PHP applications, pay-as-you-go infrastructure influences architecture decisions: short-lived, stateless PHP processes fit well, while long-running workers or persistent database connections may require different strategies.

Pay-as-you-go pricing is also offered by SaaS products and APIs where cost scales directly with usage.

`Documentation <https://en.wikipedia.org/wiki/Cloud_computing#Pay-as-you-go>`__

See also `Bref — Serverless PHP <https://bref.sh/>`_ and `Cloud pricing models explained <https://cloud.google.com/pricing>`_.

Related : :ref:`Software-as-a-Service (SAAS) <saas>`, :ref:`PaaS <paas>`, :ref:`IaaS <iaas>`, :ref:`Cloud <cloud>`, :ref:`Stateless <stateless>`, :ref:`Serverless <serverless>`
