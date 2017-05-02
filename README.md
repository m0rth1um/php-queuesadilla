[![Build Status](https://img.shields.io/travis/m0rth1um/php-queuesadilla/master.svg?style=flat-square)](https://travis-ci.org/m0rth1um/php-queuesadilla)
[![Coverage Status](https://img.shields.io/coveralls/m0rth1um/php-queuesadilla/master.svg?style=flat-square)](https://coveralls.io/r/m0rth1um/php-queuesadilla?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/m0rth1um/queuesadilla.svg?style=flat-square)](https://packagist.org/packages/m0rth1um/queuesadilla)
[![Latest Stable Version](https://img.shields.io/packagist/v/m0rth1um/queuesadilla.svg?style=flat-square)](https://packagist.org/packages/m0rth1um/queuesadilla)
[![Gratipay](https://img.shields.io/gratipay/m0rth1um.svg?style=flat-square)](https://gratipay.com/~m0rth1um/)

# Queuesadilla

A job/worker system built to support various queuing systems.

## Requirements

- PHP 5.5+

## Installation

_[Using [Composer](http://getcomposer.org/)]_

Add the plugin to your project's `composer.json` - something like this:

```composer
{
  "require": {
    "m0rth1um/queuesadilla": "dev-master"
  }
}
```

## Usage

- [Installation](/docs/installation.md)
- [Supported Systems](/docs/supported-systems.md)
- [Simple Usage](/docs/simple-usage.md)
- [Defining Jobs](/docs/defining-jobs.md)
- [Job Options](/docs/job-options.md)
- [Available Callbacks](/docs/callbacks.md)

## Tests

Tests are run via `phpunit` and depend upon multiple datastores. You may also run tests using the included `Dockerfile`:

```shell
docker build .
```
