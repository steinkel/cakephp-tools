# CakePHP Tools Plugin
[![Build Status](https://api.travis-ci.org/dereuromark/cakephp-tools.svg)](https://travis-ci.org/dereuromark/cakephp-tools)
[![Coverage Status](https://codecov.io/github/dereuromark/cakephp-tools/coverage.svg?branch=master)](https://codecov.io/github/dereuromark/cakephp-tools?branch=master)
[![Minimum PHP Version](http://img.shields.io/badge/php-%3E%3D%205.4-8892BF.svg)](https://php.net/)
[![License](https://poser.pugx.org/dereuromark/cakephp-tools/license.svg)](https://packagist.org/packages/dereuromark/cakephp-tools)
[![Total Downloads](https://poser.pugx.org/dereuromark/cakephp-tools/d/total.svg)](https://packagist.org/packages/dereuromark/cakephp-tools)
[![Coding Standards](https://img.shields.io/badge/cs-PSR--2--R-yellow.svg)](https://github.com/php-fig-rectified/fig-rectified-standards)

A CakePHP 3.x Plugin containing several useful tools that can be used in many projects.

## Version notice

This cake3 branch only works for **CakePHP3.x** - please use the master branch for CakePHP 2.x!
**It is still dev** (no stable release yet), please be careful with using it.

## What is this plugin for?

### Enhancing the core
- Auto-trim on POST (to make - not only notEmpty - validation working properly).
- Disable cache also works for older IE versions.
- With $this->Flash->message() you can have colorful (success, warning, error, ...) flash messages.
  They also can stack up (multiple messages per type) which the core currently doesn't support.
- Provide enum support as "static enums"
- Default settings for Paginator, ... can be set using Configure.
- Provided a less error-prone inArray() method when using Utility class.

### Additional features
- The Passwordable behavior allows easy to use password functionality for frontend and backend.
- Tree helper for working with (complex) trees and their output.
- Ajax Views for better responses (Ajax also comes with an optional component).
- Slugged and Reset behavior
- The Text, Time, Number libs and helpers etc provide extended functionality if desired.
- AuthUser, Timeline, Typography, etc provide additional helper functionality.
- Email as a wrapper for core's Email adding some more usefulness and making debugging/testing easier.

### Providing 2.x shims
This plugin for the Cake 3 version also contains some 2.x shims to ease migration of existing applications from 2.x to 3.x:
- See Shim plugin for details on most of the provided shims.
- Cut down version of JsHelper and a few more things.

## Installation & Docs

- [Documentation](docs/README.md)

### TODOs

* Move more 2.x stuff to 3.x
