.. _dot-dot-directory:
.. meta::
	:description:
		Dot-dot Directory ..: The ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dot-dot Directory ..
	:twitter:description: Dot-dot Directory ..: The ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dot-dot Directory ..
	:og:type: article
	:og:description: The ``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dot-dot-directory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dot-dot Directory ..","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"The ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dot-dot Directory ...html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dot-dot Directory ..
--------------------

The ``..`` directory represents the parent directory of the current one. This directory always exists, at the root directory, aka ``/`` is also its own parent.

.. code-block:: php
   
   <?php
   
       // lists of the files in the parent directory
       $files = glob('../*.php');
   
   ?>


See also `Dot and dot-dot directories <https://www.qnx.com/developers/docs/8.0/com.qnx.doc.neutrino.user_guide/topic/files_Dot.html>`_.

Related : :ref:`Path <path>`, :ref:`\. Directory <dot-directory>`
