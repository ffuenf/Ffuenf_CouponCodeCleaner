<a href="http://www.ffuenf.de" title="ffuenf - code • design • e-commerce"><img src="https://github.com/ffuenf/Ffuenf_Common/blob/master/skin/adminhtml/default/default/ffuenf/ffuenf.png" alt="ffuenf - code • design • e-commerce" /></a>

Ffuenf_CouponCodeCleaner
========================
[![GitHub tag](https://img.shields.io/github/tag/ffuenf/Ffuenf_CouponCodeCleaner.svg)][tag]
[![Build Status](https://img.shields.io/travis/ffuenf/Ffuenf_CouponCodeCleaner.svg)][travis]
[![Code Quality](https://scrutinizer-ci.com/g/ffuenf/Ffuenf_CouponCodeCleaner/badges/quality-score.png)][code_quality]
[![Code Coverage](https://scrutinizer-ci.com/g/ffuenf/Ffuenf_CouponCodeCleaner/badges/coverage.png)][code_coverage]
[![Code Climate](https://codeclimate.com/github/ffuenf/Ffuenf_CouponCodeCleaner/badges/gpa.svg)][codeclimate_gpa]
[tag]: https://github.com/ffuenf/Ffuenf_CouponCodeCleaner
[travis]: https://travis-ci.org/ffuenf/Ffuenf_CouponCodeCleaner
[code_quality]: https://scrutinizer-ci.com/g/ffuenf/Ffuenf_CouponCodeCleaner
[code_coverage]: https://scrutinizer-ci.com/g/ffuenf/Ffuenf_CouponCodeCleaner
[codeclimate_gpa]: https://codeclimate.com/github/ffuenf/Ffuenf_CouponCodeCleaner

This is a extension for Magento Community Edition that allows you to clean up expired sales rules (coupon codes) in a scheduler task.

Platform
--------

The following versions are supported and tested:

* Magento Community Edition 1.9.2.2
* Magento Community Edition 1.9.1.1
* Magento Community Edition 1.8.1.0
* Magento Community Edition 1.7.0.2
* Magento Community Edition 1.6.2.0

Other versions are assumed to work.

Requirements
------------

|                                                                     | PHP 5.4        | PHP 5.5           | PHP 5.6       | PHP 7.0       |
| ------------------------------------------------------------------- | -------------- | ----------------- | ------------- | ------------- |
| [EOL](https://secure.php.net/supported-versions.php) / STABLE / RC  | EOL            | STABLE            | **STABLE**    | STABLE        |
| automated tests on [travis]                                         | allow failure  | **required pass** | allow failure | allow failure |

Magento Community Edition officially supports PHP 5.4 and PHP 5.5.

Non-official compatibility to PHP 5.6 may be reached by following the tips on [Use of iconv.internal_encoding is deprecated](https://magento.stackexchange.com/questions/34015/magento-1-9-php-5-6-use-of-iconv-internal-encoding-is-deprecated).
Non-official compatibility to PHP 7.0 may be reached by using [Inchoo_PHP7](https://github.com/Inchoo/Inchoo_PHP7).

Installation
------------

Use [modman](https://github.com/colinmollenhour/modman) to install:
```
modman init
modman clone https://github.com/ffuenf/Ffuenf_Common
modman clone https://github.com/ffuenf/Ffuenf_CouponCodeCleaner
```

Deinstallation
--------------

Use [modman](https://github.com/colinmollenhour/modman) to clear all files and symlinks:
```
modman clean Ffuenf_CouponCodeCleaner
```
see `uninstall.sql` to clear all entries of this extension from your database.

Development
-----------
1. Fork the repository from GitHub.
2. Clone your fork to your local machine:

        $ git clone https://github.com/USER/Ffuenf_CouponCodeCleaner

3. Create a git branch

        $ git checkout -b my_bug_fix

4. Make your changes/patches/fixes, committing appropriately
5. Push your changes to GitHub
6. Open a Pull Request

License and Author
------------------

- Author:: Achim Rosenhagen (<a.rosenhagen@ffuenf.de>)
- Copyright:: 2015, ffuenf

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.