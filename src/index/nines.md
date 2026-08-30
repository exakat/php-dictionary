# The Nines (Availability)
``The nines`` is a shorthand used to express an availability target as a count of the ``9`` digits in its percentage: 99% is ``two nines``, 99.9% is ``three nines``, 99.99% is ``four nines``, and 99.999% is ``five nines``. Each additional nine represents a tenfold reduction in the amount of downtime allowed over a given period.

+ Two nines, 99%: about 3.65 days of downtime per year
+ Three nines, 99.9%: about 8.76 hours of downtime per year
+ Four nines, 99.99%: about 52.6 minutes of downtime per year
+ Five nines, 99.999%: about 5.26 minutes of downtime per year

This notation is a common shorthand inside Service Level Agreements, expressed as a nine SLA, since ``99.99% uptime`` is easier to state as a commitment than the exact number of minutes of allowed downtime. It is also used as a target for infrastructure and application design, driving decisions on redundancy, failover, and monitoring.

Reaching a higher number of nines becomes exponentially more expensive: each extra nine typically requires additional redundancy, more aggressive monitoring and alerting, and a matured incident-response process.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nines.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nines.html","name":"The Nines (Availability)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 15:06:55 +0000","dateModified":"Sun, 30 Aug 2026 15:06:55 +0000","description":"The nines is a shorthand used to express an availability target as a count of the 9 digits in its percentage: 99% is two nines, 99","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nines.html"]}],"alternateName":["five-nines","four-nines","three-nines","nine-sla"],"keywords":["architecture","business"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sla.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/availability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/downtime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monitoring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reliability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Five_nines"},{"@type":"CreativeWork","name":"Nine nines - SLA & Downtime calculator","url":"https:\/\/hyperping.com\/nine-nines"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nines"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Five_nines)**
## See Also

+ [Nine nines - SLA & Downtime calculator](https://hyperping.com/nine-nines)

## Related

+ [Service Level Agreement (SLA)](sla.html)
+ [Availability](availability.html)
+ [Downtime](downtime.html)
+ [Monitoring](monitoring.html)
+ [Reliability](reliability.html)
