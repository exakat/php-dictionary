# Pay-as-you-go
Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity.

In practice this means: compute time, counted with CPU-seconds or request count, memory, measured by Gb per hours, storage measured by Gb per month, and outgoing traffic on the network are all billed in small, incremental units. When usage is zero, the cost is zero.

This model is dominant in serverless and function-as-a-service platforms, where PHP code can be deployed as individual functions. It contrasts with reserved or on-demand instance pricing, where a virtual machine runs continuously whether or not it handles traffic.

For PHP applications, pay-as-you-go infrastructure influences architecture decisions: short-lived, stateless PHP processes fit well, while long-running workers or persistent database connections may require different strategies.

Pay-as-you-go pricing is also offered by SaaS products and APIs where cost scales directly with usage.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pay-as-you-go.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pay-as-you-go.html","name":"Pay-as-you-go","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pay-as-you-go.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pay-as-you-go"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Cloud_computing#Pay-as-you-go)**
## See Also

+ [Bref — Serverless PHP](https://bref.sh/)
+ [Cloud pricing models explained](https://cloud.google.com/pricing)

## Related

+ [Software-as-a-Service (SAAS)](saas.html)
+ [PaaS](paas.html)
+ [IaaS](iaas.html)
+ [Cloud](cloud.html)
+ [Stateless](stateless.html)
+ [Serverless](serverless.html)
