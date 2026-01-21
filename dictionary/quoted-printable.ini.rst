.. _quoted-printable:
.. meta::
	:description:
		Quoted Printable: Quoted-printable is a content transfer encoding defined in RFC 2045 that's primarily used in email to ensure that message data remains intact when transmitted over protocols that are not 8-bit clean (such as SMTP).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Quoted Printable
	:twitter:description: Quoted Printable: Quoted-printable is a content transfer encoding defined in RFC 2045 that's primarily used in email to ensure that message data remains intact when transmitted over protocols that are not 8-bit clean (such as SMTP)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Quoted Printable
	:og:type: article
	:og:description: Quoted-printable is a content transfer encoding defined in RFC 2045 that's primarily used in email to ensure that message data remains intact when transmitted over protocols that are not 8-bit clean (such as SMTP)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/quoted-printable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Quoted Printable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:48:15 +0000","dateModified":"Wed, 21 Jan 2026 08:48:15 +0000","description":"Quoted-printable is a content transfer encoding defined in RFC 2045 that's primarily used in email to ensure that message data remains intact when transmitted over protocols that are not 8-bit clean (such as SMTP)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Quoted Printable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Quoted Printable
----------------

Quoted-printable is a content transfer encoding defined in RFC 2045 that's primarily used in email to ensure that message data remains intact when transmitted over protocols that are not 8-bit clean (such as SMTP).

.. code-block:: php
   
   <?php
   
   $headers  = MIME-Version: 1.0\r\n;
   $headers .= Content-Type: text/plain; charset=UTF-8\r\n;
   $headers .= Content-Transfer-Encoding: quoted-printable\r\n;
   
   $body = quoted_printable_encode(Café\nRésumé);
   
   mail(example@php.net, Some subject, $body, $headers);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.quoted-printable-encode.php>`__

See also https://datatracker.ietf.org/doc/html/rfc2045
