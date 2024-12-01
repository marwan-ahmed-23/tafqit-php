# Tafqit-PHP

**Tafqit-PHP** is a PHP library for converting numbers into text in multiple languages, including Arabic and English. 

## Features
- Converts numbers (including Arabic numerals) to text.
- Supports multiple locales using `NumberFormatter`.

## Usage

### Installation
Simply include the `Tafqit.php` file in your project.

## Directory Structure
tafqit-php/

├── src/

│   └── Tafqit.php

├── examples/

│   └── example.php

├── tests/

│   └── TafqitTest.php

├── .gitignore

└── README.md

### Example
```php
require_once 'src/Tafqit.php';

$tafqit = new Tafqit();
echo $tafqit->numberToText("٢٣٤٥", 'ar'); // Outputs: ألفان وثلاثمائة وخمسة وأربعون


