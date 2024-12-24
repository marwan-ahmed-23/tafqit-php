# Tafqit (PHP): Number to Text Conversion for Multiple Languages

Tafqit-PHP is a PHP-based service designed to convert numerical values into readable text. Supporting both Arabic and English, this lightweight and modular solution can be easily extended to accommodate additional languages.

---

## 🚀 Features

- Converts numbers into text in Arabic and English.
- Handles large numbers with precision.
- Supports customization for currency and subunit formatting.
- Lightweight and easy to integrate into any PHP project.

## Requirements

- PHP 7.0 or higher.
- Multibyte string extension (enabled by default in PHP).

## 🔧 Installation

1. Clone or download the repository.
2. Include the `src/Tafqit.php` file in your project:
  
    ```bash
    require_once 'path-to-src/Tafqit.php';
    ```

## 📖 Usage

Here's an example of how to use `Tafqit-PHP` to convert numbers to text:

```bash
<?php
require_once 'src/Tafqit.php';

$tafqit = new Tafqit();
echo $tafqit->numberToText("٢٣٤٥", 'ar'); // Outputs: ألفان وثلاثمائة وخمسة وأربعون
```

### Usage with English Numbers

```bash
<?php
require_once 'src/Tafqit.php';

$tafqit = new Tafqit();
echo $tafqit->numberToText("2345", 'en'); // Outputs: Two thousand three hundred forty-five
```

## Currency Example

You can customize it to include currency and subunit formatting for specific languages.

## 📂 Folder Structure
```plaintext
tafqit-php/
├── src/
│   └── Tafqit.php
├── examples/
│   └── example.php
├── tests/
│   └── TafqitTest.php
├── .gitignore
└── README.md
```

## Tests

Run the tests using PHPUnit:

```bash
phpunit tests/TafqitTest.php
```

## 🛠️ Contributing

We welcome contributions! Follow these steps to contribute:

1. Fork the repository.
2. Create a new branch:
  
    ```bash
    git checkout -b feature-branch
    ```
    
3. Make your changes and commit them:
  
    ```bash
    git commit -m "Add new feature"
    ```

4. Push to your branch:

    ```bash
    git push origin feature-branch
    ```

5. Open a Pull Request.

## 🌟 Show Your Support
If you found this project helpful, please consider giving it a ⭐ on GitHub. Your support means the world to us!
