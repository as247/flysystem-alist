# Flysystem Adapter for AList

[![Author](https://img.shields.io/badge/author-as247-orange)](http://as247.vui360.com/)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

## Installation

```bash
composer require as247/flysystem-alist:^1.0
```

## Usage

```php
use As247\Flysystem\AList\AListAdapter;
use League\Flysystem\Filesystem;
$adapter = new AListAdapter('https://your-alist-url.com', [
    'token'=>'your-token',
    'root'=>'/root_path'
]);

$filesystem = new Filesystem($adapter);

```
