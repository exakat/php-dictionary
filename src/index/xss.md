# Cross Site Scripting (XSS)
XSS is a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers.

XSS happens when a Web application accepts user input, and fails to validate it properly. That input is used in the resulting web page, and it executes there, either as HTML or JavaScript or any other available resource.

XSS is dangerous as it allows the attacker to steal important information such as cookies, impersonate the user, read or modify the page content.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html","name":"Cross Site Scripting (XSS)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:41:07 +0000","dateModified":"Mon, 24 Aug 2026 07:41:07 +0000","description":"XSS is a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"]}],"keywords":["acronym","vulnerability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csrf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html_entity_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlspecialchars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session-highjacking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anchor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/css.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stored-xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-character.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/link.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html-entity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/image-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/twig.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blade.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlpurifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/write-context.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/attacks\/xss\/"},{"@type":"CreativeWork","name":"PHP Security 3: XSS and Password Storage","url":"https:\/\/www.acunetix.com\/websitesecurity\/php-security-3\/"},{"@type":"CreativeWork","name":"What is cross-site scripting (XSS) and how to prevent it?","url":"https:\/\/portswigger.net\/web-security\/cross-site-scripting"},{"@type":"CreativeWork","name":"The Quiet Shift Reshaping PHP Security","url":"https:\/\/www.linkedin.com\/pulse\/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc\/"},{"@type":"CreativeWork","name":"XSS Prevention in Laravel \u2014 Why {!! !!} Is the Line Between Safe and Hacked","url":"https:\/\/medium.com\/@jnchiminyi\/xss-prevention-in-laravel-why-is-the-line-between-safe-and-hacked-352101b9243a"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"xss"}]}]}</script>
**[Documentation](https://owasp.org/www-community/attacks/xss/)**
## See Also

+ [PHP Security 3: XSS and Password Storage](https://www.acunetix.com/websitesecurity/php-security-3/)
+ [What is cross-site scripting (XSS) and how to prevent it?](https://portswigger.net/web-security/cross-site-scripting)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)
+ [XSS Prevention in Laravel — Why {!! !!} Is the Line Between Safe and Hacked](https://medium.com/@jnchiminyi/xss-prevention-in-laravel-why-is-the-line-between-safe-and-hacked-352101b9243a)

## Related

+ [Cross Site Request Forgery (CSRF)](csrf.html)
+ [html\_entity\_decode](html_entity_decode.html)
+ [htmlspecialchars](htmlspecialchars.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Session Hijacking](session-highjacking.html)
+ [Vulnerability](vulnerability.html)
+ [Anchor](anchor.html)
+ [CSS](css.html)
+ [Stored XSS](stored-xss.html)
+ [Escape Character](escape-character.html)
+ [Link](link.html)
+ [HTML Entity](html-entity.html)
+ [CRLF Injection](crlf-injection.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Image Injection](image-injection.html)
+ [Twig](twig.html)
+ [Blade](blade.html)
+ [Content Security Policy (CSP)](csp.html)
+ [HTMLPurifier](htmlpurifier.html)
+ [Write Context](write-context.html)
