# Tafqit (PHP)

Tafqit-PHP is a PHP library designed to convert numbers into readable text in multiple languages, including Arabic and English. This lightweight and modular library can be extended to support additional languages.

## Features

- Converts numbers into text in Arabic and English.
- Handles large numbers with precision.
- Supports customization for currency and subunit formatting.
- Lightweight and easy to integrate into any PHP project.

## Requirements

- PHP 7.0 or higher.
- Multibyte string extension (enabled by default in PHP).

## Installation

### Using Composer (Recommended)
```bash
composer require your-username/tafqit-php
```

## Manual Installation

- Clone or download the repository.
- Include the `src/Tafqit.php` file in your project:
  
  ```bash
  require_once 'path-to-src/Tafqit.php';
  ```

## Usage































# Tafqit-PHP

**Tafqit-PHP** is a PHP library for converting numbers into text in multiple languages, including Arabic and English. 

## Features
- Converts numbers (including Arabic numerals) to text.
- Supports multiple locales using `NumberFormatter`.

## Usage

## Folder Structure
tafqit-php/

├── src/

│   └── Tafqit.php

├── examples/

│   └── example.php

├── tests/

│   └── TafqitTest.php

├── .gitignore

└── README.md

### Installation
Simply include the `Tafqit.php` file in your project.

### Example
```php
require_once 'src/Tafqit.php';

$tafqit = new Tafqit();
echo $tafqit->numberToText("٢٣٤٥", 'ar'); // Outputs: ألفان وثلاثمائة وخمسة وأربعون


