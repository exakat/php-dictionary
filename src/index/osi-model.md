# OSI Model
The OSI Model, Open Systems Interconnection Model, is a conceptual framework that standardizes how computer systems communicate over a network, by splitting communication into seven abstract layers.

+ Layer 7, Application: protocols used directly by applications, such as HTTP, FTP, DNS
+ Layer 6, Presentation: data formatting, encryption, and compression, such as TLS, character encoding
+ Layer 5, Session: establishes, manages, and terminates connections between applications
+ Layer 4, Transport: end-to-end delivery, such as TCP and UDP, including reliability and flow control
+ Layer 3, Network: routing of packets across networks, such as IP
+ Layer 2, Data Link: node-to-node delivery within the same local network, such as Ethernet and MAC addresses
+ Layer 1, Physical: the actual transmission of raw bits over a physical medium, such as cables or radio waves

PHP applications mostly operate at the Application layer: a script sending an HTTP request or reading from a socket does not deal with the layers below, as they are handled by the operating system and the network stack. Understanding the model is still useful to reason about where a problem happens, whether it is a DNS resolution failure, a TCP handshake issue, a TLS certificate problem, or an application-level bug.

The modern internet does not strictly follow the OSI model; it more closely follows the simpler, four-layer TCP/IP suite, but the OSI model remains a common reference for troubleshooting and teaching networking concepts.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/osi-model.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/osi-model.html","name":"OSI Model","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:21:24 +0000","dateModified":"Wed, 19 Aug 2026 08:21:24 +0000","description":"The OSI Model, Open Systems Interconnection Model, is a conceptual framework that standardizes how computer systems communicate over a network, by splitting communication into seven abstract layers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/osi-model.html"]}],"alternateName":["open-systems-interconnection-model"],"keywords":["network","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tcp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/udp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/network.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/layered-architecture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstraction-layer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/OSI_model"},{"@type":"CreativeWork","name":"What Is the OSI Model?","url":"https:\/\/www.cloudflare.com\/learning\/ddos\/glossary\/open-systems-interconnection-model-osi\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"osi-model"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/OSI_model)**
## See Also

+ [What Is the OSI Model?](https://www.cloudflare.com/learning/ddos/glossary/open-systems-interconnection-model-osi/)

## Related

+ [TCP](tcp.html)
+ [User Datagram Protocol (UDP)](udp.html)
+ [Internet Protocol (IP)](ip.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Socket](socket.html)
+ [Network](network.html)
+ [Layered Architecture](layered-architecture.html)
+ [Abstraction Layer](abstraction-layer.html)
