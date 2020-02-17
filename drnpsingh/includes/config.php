<?php


ini_set('error_reporting', 0);

// DATABASE INFORMATION
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'vasuiuv9_np');
define('DATABASE_USER', 'vasuiuv9');
define('DATABASE_PASS', '8331to4477');

// COMPANY INFORMATION
define('COMPANY_LOGO_WIDTH', '356');
define('COMPANY_LOGO_HEIGHT', '95');
define('COMPANY_NAME','Dr NP Singh');
define('COMPANY_ADDRESS_1','Anand Hospital Meerut');
define('COMPANY_ADDRESS_2','Garh Road Clinic');
define('COMPANY_ADDRESS_3','Lokpriiya Hospital Meerut');
define('COMPANY_COUNTY','India');
define('COMPANY_POSTCODE','250001');

define('COMPANY_NUMBER','Company No: 01214056274'); // Company registration number

// EMAIL DETAILS
define('EMAIL_FROM', 'doctor@iamoncloud.com'); // Email address invoice emails will be sent from
define('EMAIL_NAME', 'Dr NP Singh'); // Email from address
define('EMAIL_SUBJECT', 'Your Prescription'); // Invoice email subject
define('EMAIL_BODY_INVOICE', 'Invoice body'); // Invoice email body
define('EMAIL_BODY_QUOTE', 'Invoice body'); // Invoice email body
define('EMAIL_BODY_RECEIPT', 'Invoice body'); // Invoice email body

// OTHER SETTINFS
define('INVOICE_PREFIX', 'IPD'); // Prefix at start of invoice - leave empty '' for no prefix
define('INVOICE_INITIAL_VALUE', '1000'); // Initial invoice order number (start of increment)
define('INVOICE_THEME', '#222222'); // Theme colour, this sets a colour theme for the PDF generate invoice
define('TIMEZONE', 'Uttar Pradesh/India'); // Timezone - See for list of Timezone's http://php.net/manual/en/function.date-default-timezone-set.php
define('DATE_FORMAT', 'DD/MM/YYYY'); // DD/MM/YYYY or MM/DD/YYYY
define('CURRENCY', 'Rs. '); // Currency symbol
define('ENABLE_VAT', true); // Enable TAX/VAT
define('VAT_INCLUDED', false); // Is VAT included or excluded?
define('VAT_RATE', '20'); // This is the percentage value

define('PAYMENT_DETAILS', 'Dr Np Singh<br>Sort Code: 00-00-00<br>Account Number: 12345678'); // Payment information
define('FOOTER_NOTE', 'http://www.iamoncloud.com/');

// CONNECT TO THE DATABASE
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

?>