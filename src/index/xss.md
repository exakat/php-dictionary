# Cross Site Scripting (XSS)
It's a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers.

XSS happens when a Web application accepts user input, fails to validate it property. That input is used in the resulting web page, and it executes there, either as HTML or javascript or any other available resource.

XSS is dangerous as it allows the attacker to steal important information such as cookies, impersonate the usage, read or modify the page content.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html","name":"Cross Site Scripting (XSS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:10 +0000","dateModified":"Wed, 05 Aug 2026 08:17:10 +0000","description":"It's a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cross Site Scripting (XSS).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"xss"}]}]}</script>
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
