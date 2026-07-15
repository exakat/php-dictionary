.. _haru:
.. _libharu:
.. _pdf-haru:
.. meta::
	:description:
		Haru (PDF): ``Haru`` is a PECL extension that wraps libharu, a free, cross-platform C library for generating PDF documents from scratch.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Haru (PDF)
	:twitter:description: Haru (PDF): ``Haru`` is a PECL extension that wraps libharu, a free, cross-platform C library for generating PDF documents from scratch
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Haru (PDF)
	:og:type: article
	:og:description: ``Haru`` is a PECL extension that wraps libharu, a free, cross-platform C library for generating PDF documents from scratch
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/haru.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/haru.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/haru.ini.html","name":"Haru (PDF)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:30:35 +0000","dateModified":"Sat, 11 Jul 2026 09:30:35 +0000","description":"``Haru`` is a PECL extension that wraps libharu, a free, cross-platform C library for generating PDF documents from scratch","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Haru (PDF).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Haru (PDF)
----------

``Haru`` is a PECL extension that wraps libharu, a free, cross-platform C library for generating PDF documents from scratch. It exposes classes such as ``HaruDoc`` and ``HaruPage`` that build a document page by page: adding text with a chosen font and size, drawing lines and shapes, embedding images, and setting document metadata.

Unlike libraries that convert HTML or templates into PDF, Haru works at a lower level, closer to the PDF drawing model itself, giving precise control over layout and placement at the cost of more verbose code. It has no dependency on an external binary or headless browser, which makes it lightweight to deploy.

Haru is less commonly used today than pure-PHP, Composer-installable alternatives such as ``dompdf``, ``mPDF``, or the FPDF family, which most projects prefer for ease of installation and HTML-based templating.

.. code-block:: php
   
   <?php
   
       $pdf = new HaruDoc();
       $pdf->addPage();
   
       $page = $pdf->getCurrentPage();
       $page->setSize(HaruPage::SIZE_A4, HaruPage::PORTRAIT);
   
       $font = $pdf->getFont('Helvetica');
       $page->setFontAndSize($font, 24);
       $page->beginText();
       $page->textOut(50, 750, 'Hello, PDF!');
       $page->endText();
   
       $pdf->save('/tmp/hello.pdf');
   
   ?>


`Documentation <https://www.php.net/manual/en/book.haru.php>`__

See also `libharu <http://libharu.org/>`_.

Related : :ref:`Graphic Draw (GD) <gd>`, :ref:`imagick <imagick>`

Related packages : `dompdf/dompdf <https://packagist.org/packages/dompdf/dompdf>`_, `mpdf/mpdf <https://packagist.org/packages/mpdf/mpdf>`_
