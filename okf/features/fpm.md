---
type: "acronym"
title: "FastCGI Process Manager (FPM)"
description: "FPM stands for FastCGI Process Manager."
resource: "https://www.php.net/manual/en/install.fpm.php"
tags: ["acronym", "architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# FastCGI Process Manager (FPM)

FPM stands for FastCGI Process Manager. It is a PHP FastCGI implementation.

Instead of nesting PHP in the web server, php-fpm makes PHP a server by itself. The web server then delegates the work to the PHP server. The advantage is to lower the memory footprint of PHP and the web server, and the whole of them both. It helps with stability, by keeping the two processes separated.

## Documentation
- [https://www.php.net/manual/en/install.fpm.php](https://www.php.net/manual/en/install.fpm.php)

## See Also
- [Why Do You Need PHP FastCGI Process Manager?](https://www.plesk.com/blog/various/why-do-you-need-php-fpm/)
- [How to Configure PHP-FPM with NGINX](https://www.digitalocean.com/community/tutorials/php-fpm-nginx)
- [PHP FastCGI Process Manager - PHP-FPM](https://docs.cpanel.net/knowledge-base/php-fpm/php-fastcgi-process-manager-php-fpm/)
- [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related
- [Common Gateway Interface (CGI)](/features/cgi.md)
- [FastCGI](/features/fastcgi.md)
- [Attack Surface](/features/attack-surface.md)
- [Concurrency](/features/concurrency.md)
- [OPcache Preloading](/features/opcache-preloading.md)
- [Throughput](/features/throughput.md)

