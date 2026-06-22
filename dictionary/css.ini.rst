.. _css:
.. _cascading-style-sheets:
.. meta::
	:description:
		CSS: CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: CSS
	:twitter:description: CSS: CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: CSS
	:og:type: article
	:og:description: CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/css.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"CSS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/CSS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


CSS
---

CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents. It controls layout, colours, fonts, spacing, animations, and responsiveness across devices.

While CSS itself is a client-side technology, PHP frequently interacts with it:

+ Generating dynamic CSS values for theming, user preferences, etc.
+ Injecting CSS variables from server-side configuration
+ Rendering HTML templates that include or link stylesheets
+ Parsing or minifying CSS on the server

When PHP outputs CSS content directly, care must be taken to escape values correctly to prevent CSS injection. It is a form of XSS where an attacker injects malicious CSS rules.

In modern PHP applications, CSS is typically bundled by a frontend build tool and linked from PHP templates.


.. code-block:: php
   
   <?php
   
       // Generating a dynamic CSS custom property from a user setting
       $primaryColor = '#3498db'; // from database / user preference
       $primaryColor = preg_replace('/[^#a-fA-F0-9]/', '', $primaryColor); // sanitize
       
       header('Content-Type: text/css');
       
       echo ":root {
           --primary-color: {$primaryColor};
       }
       ";
   
   ?>


`Documentation <https://developer.mozilla.org/en-US/docs/Web/CSS>`__

See also `CSS - MDN <https://developer.mozilla.org/en-US/docs/Web/CSS>`_ and `CSS Injection <https://docs.brightsec.com/docs/css-injection>`_.

Related : :ref:`HyperText Markup Language (HTML) <html>`, :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`Front-end <frontend>`, :ref:`World Wide Web (WWW) <web>`, :ref:`Javascript <javascript>`, :ref:`Asset <asset>`, :ref:`Template <template>`
