[![Build Status](https://img.shields.io/travis/m0rth1um/php-queuesadilla/master.svg?style=flat-square)](https://travis-ci.org/m0rth1um/php-queuesadilla)
[![Coverage Status](https://img.shields.io/coveralls/m0rth1um/php-queuesadilla/master.svg?style=flat-square)](https://coveralls.io/r/m0rth1um/php-queuesadilla?branch=master)
[![Gratipay](https://img.shields.io/gratipay/m0rth1um.svg?style=flat-square)](https://gratipay.com/~m0rth1um/)

# Queuesadilla

A job/worker system built to support various queuing systems.

This fork catches CTRL-C and defined process signals with `pcntl_signal` and finishes a running job before exiting.

## Requirements

- PHP 5.6+

## Installation

_[Using [Composer](http://getcomposer.org/)]_

Add the plugin to your project's `composer.json` - something like this:

```composer
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/m0rth1um/queuesadilla"
    }
  ],
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
