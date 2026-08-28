# Direct Output
Direct output is the characteristics of a function or method to write data directly to the output stream. 

A good practice is to passe the output data to the calling context, for it to decide how to handle it. 

Errors, exceptions, and debug often use direct output. Specific functions, such as ``echo``, ``print_r``, ``debug_print_backtrace()`` output directly on purpose.

Direct output is the root for the infamous ``Headers already sent`` error.

The alternative is to output to logs, or return the results.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/direct-output.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/direct-output.html","name":"Direct Output","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:18 +0000","dateModified":"Fri, 19 Jun 2026 21:24:18 +0000","description":"Direct output is the characteristics of a function or method to write data directly to the output stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/direct-output.html"]}],"keywords":["code architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relay-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rigidity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/testable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.ob-start.php"},{"@type":"CreativeWork","name":"PHP: The Flexibility that can Make or Break your Team Project","url":"https:\/\/www.linkedin.com\/pulse\/php-flexibility-can-make-break-your-team-project-gerrit-vermeulen"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"direct-output"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/function.ob-start.php)**
## See Also

+ [PHP: The Flexibility that can Make or Break your Team Project](https://www.linkedin.com/pulse/php-flexibility-can-make-break-your-team-project-gerrit-vermeulen)

## Related

+ [Interface](interface.html)
+ [Proxy Class](proxy-class.html)
+ [Relay Function](relay-function.html)
+ [Rigidity](rigidity.html)
+ [Testable](testable.html)
