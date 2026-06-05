.. _appeasement-pattern:
.. _appeasement:
.. meta::
	:description:
		Appeasement Pattern: The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Appeasement Pattern
	:twitter:description: Appeasement Pattern: The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Appeasement Pattern
	:og:type: article
	:og:description: The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/appeasement-pattern.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Appeasement Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Appeasement Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Appeasement Pattern
-------------------

The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue.

Common PHP manifestations include: using the ``@`` error suppression operator to hide failures, loosening type checks to accept any input, adding special-case exceptions to a validator for a specific caller, or gradually degrading a strict check into a permissive one to avoid breakage.

The appeasement pattern also happens with static analysis: the tool may not support a particular syntax, lack helpful context or the code may simply be ambiguous. Appeasement pattern leads to more verbose or convoluted code, so as to allow extra configuration. 

The appeasement pattern leads to fragile code where hidden failures accumulate silently, security assumptions erode, and bugs become much harder to diagnose. The correct approach is to fix the root cause rather than appease the symptom.

.. code-block:: php
   
   <?php
   
       // Appeasement: silencing an error instead of fixing it
       $result = @file_get_contents($untrustedPath); // failure is hidden
       
       // Appeasement: loosening a type check to stop a caller from failing
       function process(mixed $value): void {
           // was: if (!is_int($value)) { throw new \InvalidArgumentException(); }
           // now silently coerces because one caller passes strings
           $value = (int) $value;
       }
       
       // SCA Appeasement: 
       // $url has already been checked for being a valid URL so this will always works
       /** @var array{0: string, 1: string} $r */
       preg_match(#(http)s?://#, $url, $r);
       echo $r[0];
   
   ?>


See also `Error suppression operator <https://www.php.net/manual/en/language.operators.errorcontrol.php>`_.

Related : :ref:`Error Suppression <error-suppression>`, :ref:`Security <security>`, :ref:`Code Smell <code-smell>`, :ref:`Implicit <implicit>`, :ref:`Hidden State <hidden-state>`, :ref:`Vulnerability <vulnerability>`, :ref:`Distributed State <distributed-state>`
