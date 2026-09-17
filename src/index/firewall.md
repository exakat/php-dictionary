# Firewall
A firewall, in a web application, is a layer that inspects incoming requests and decides which ones are allowed to reach the application, before any business logic runs. The term covers two related but distinct things in the PHP ecosystem.

At the infrastructure level, a ``WAF``, Web Application Firewall, sits in front of the application, at the network or reverse-proxy layer, filtering requests based on patterns: blocking SQL injection attempts, known bad IP ranges, or malformed requests, entirely outside of PHP.

At the application level, frameworks such as Symfony use ``firewall`` to name a configured authentication pipeline: each firewall matches a set of URL patterns and defines how users are identified, login form, API token, ``JWT``, for the requests that fall under it. A request that fails to authenticate against its firewall is rejected before reaching any controller, exactly like a network firewall rejects a packet before it reaches a service.

Both meanings share the same idea: a firewall is a checkpoint that lets legitimate traffic through and stops the rest as early as possible, minimising the amount of code that has to defend itself against malicious input.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/firewall.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/firewall.html","name":"Firewall","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 17 Sep 2026 07:54:35 +0000","dateModified":"Thu, 17 Sep 2026 07:54:35 +0000","description":"A firewall, in a web application, is a layer that inspects incoming requests and decides which ones are allowed to reach the application, before any business logic runs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/firewall.html"]}],"keywords":["security","architecture","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authentication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/request.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/response.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/symfony.com\/doc\/current\/security.html#the-firewall"},{"@type":"CreativeWork","name":"Web application firewall","url":"https:\/\/en.wikipedia.org\/wiki\/Web_application_firewall"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.36","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"firewall"}]}]}</script>
```php
<?php

    // Application-level firewall: a minimal authentication gate in front of routes,
    // conceptually similar to Symfony's security firewalls.
    final class Firewall
    {
        /** @param array<string,string> $patterns URL pattern => required role */
        public function __construct(private array $patterns, private AuthChecker $auth) {}
    
        public function handle(string $path, ?string $token): void
        {
            foreach ($this->patterns as $pattern => $role) {
                if (!preg_match($pattern, $path)) {
                    continue; // this firewall segment doesn't cover the request
                }
    
                if (!$this->auth->isGranted($token, $role)) {
                    throw new UnauthorizedException("Access denied to $path");
                }
    
                return; // authenticated: request may proceed to the controller
            }
        }
    }
    
    $firewall = new Firewall(
        patterns: ['#^/admin#' => 'ROLE_ADMIN', '#^/api#' => 'ROLE_API'],
        auth: new AuthChecker(),
    );
    
    $firewall->handle('/admin/users', token: null); // rejected before reaching any controller

?>
```

**[Documentation](https://symfony.com/doc/current/security.html#the-firewall)**
## See Also

+ [Web application firewall](https://en.wikipedia.org/wiki/Web_application_firewall)

## Related

+ [Security](security.html)
+ [Authentication](authentication.html)
+ [Middleware Pattern](middleware.html)
+ [Rate Limiting](rate-limit.html)
+ [Request](request.html)
+ [Response](response.html)

## Related packages

+ [symfony/security-bundle](https://packagist.org/packages/symfony/security-bundle)
