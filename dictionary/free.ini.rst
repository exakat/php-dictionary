.. _free:
.. _libre:
.. meta::
	:description:
		Free: "Free" in a software context has two distinct meanings that are often conflated:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Free
	:twitter:description: Free: "Free" in a software context has two distinct meanings that are often conflated:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Free
	:og:type: article
	:og:description: "Free" in a software context has two distinct meanings that are often conflated:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/free.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Free","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"\"Free\" in a software context has two distinct meanings that are often conflated:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Free.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Free
----

"Free" in a software context has two distinct meanings that are often conflated:

+ Free as in freedom (libre): the user has the right to run, study, modify, and redistribute the software. This is the definition used by the Free Software Foundation (FSF) and the GNU project. A free-as-in-freedom licence grants these four essential freedoms
+ Free as in gratis: the software has no monetary cost. This says nothing about the rights granted to the user
+ Free as in release memory: the action of releasing hold on a resource, such as memory, file handler, etc. PHP implicitly frees resources when leaving a context, or finishing execution

PHP itself is free in both senses: it has no cost and its source code is open and modifiable. However, PHP applications can be distributed under any licence, including proprietary ones.

The distinction matters when evaluating dependencies: a library that is free-of-charge but does not allow redistribution or modification is not free software. Open source licences generally grant both freedoms, though GPL is copyleft and imposes conditions on derived works.

`Documentation <https://www.gnu.org/philosophy/free-sw.html>`__

See also `What is Free Software? — GNU <https://www.gnu.org/philosophy/free-sw.html>`_ and `Free as in Freedom vs Free as in Beer <https://en.wikipedia.org/wiki/Gratis_versus_libre>`_.

Related : :ref:`Open Source <open-source>`, :ref:`Licence <licence>`, :ref:`Proprietary Source <proprietary-source>`, :ref:`Community <community>`, :ref:`Memory <memory>`
