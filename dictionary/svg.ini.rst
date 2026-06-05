.. _svg:
.. meta::
	:description:
		Scalable Vector Graphics (SVG): SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Scalable Vector Graphics (SVG)
	:twitter:description: Scalable Vector Graphics (SVG): SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Scalable Vector Graphics (SVG)
	:og:type: article
	:og:description: SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/svg.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Scalable Vector Graphics (SVG)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:53:49 +0000","dateModified":"Fri, 05 Jun 2026 08:53:49 +0000","description":"SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Scalable Vector Graphics (SVG).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Scalable Vector Graphics (SVG)
------------------------------

SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics. Unlike raster formats, like PNG, JPEG, SVG graphics scale to any size without loss of quality because they are described mathematically rather than as a grid of pixels.

SVG files can be embedded directly in HTML, served as standalone files, or generated programmatically. PHP can produce SVG output by writing XML strings or by using the DOM extension to build the SVG document tree.

SVG is widely used for icons, charts, diagrams, logos, and any graphic that must look sharp on high-density screens.

.. code-block:: php
   
   <?php
   
       header('Content-Type: image/svg+xml');
   
       echo '<?xml version="1.0" encoding="UTF-8"?>';
       echo '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100">';
       echo '<circle cx="50" cy="50" r="40" fill="steelblue" />';
       echo '</svg>';
   
   ?>


`Documentation <https://developer.mozilla.org/en-US/docs/Web/SVG>`__

See also `SVG Tutorial <https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial>`_, `SVG specification <https://www.w3.org/TR/SVG2/>`_ and `Beware SVG! It’s not just a scalable graphic <https://medium.com/sse-blog/beware-svg-its-not-just-a-scalable-graphic-9a2e9f3df6ef>`_.

Related : :ref:`Extensible Markup Language (XML) <xml>`, :ref:`HyperText Markup Language (HTML) <html>`, :ref:`Document Object Model (DOM) <dom>`, :ref:`Image <image>`, :ref:`Injection <injection>`
