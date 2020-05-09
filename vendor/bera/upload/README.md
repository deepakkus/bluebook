# Bera Upload

easy file upload for php

## Installation

Use composer to install Bera Upload.

```bash
composer require bera/upload
```

## Usage

```php
require 'vendor/autoload.php';
$new_upload = new \Bera\Upload\Upload($_FILES['data']);
$new_upload->setUploadConditon( [
    'file_size' => '20M',
    'allowed_extension' => ['dll','png','jpeg','jpg','pdf']
]);
$new_upload->setUploadDir(__DIR__ . '/upload');
try {
    if($new_upload->upload()) {
        echo 'upload done!';
    } else {
        echo 'upload failed';
    }
}catch ( \Bera\Upload\Exception\FileTypeNotSupprotExectpion $e) {
    echo $e->getMessage();
}catch ( \Bera\Upload\Exception\UplodMaxSizeException $e) {
    echo $e->getMessage();
}
```

## License
MIT Licence