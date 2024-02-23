<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
    <title><?php echo option('business_name') .' | '.$title.' '; ?></title>
    <link rel="stylesheet" href="<?php  echo url('user/css/bootstrap.min.css') ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url('user/css/all.min.css') ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
    <link rel="stylesheet" href="<?php echo url('user/js/plugin/toaster/toaster.css') ?>"/>
    <link rel="stylesheet" href="<?php echo url('user/css/style.css') ?>"/>
    <link rel="stylesheet" href="<?php echo url('user/css/responsive.css') ?>"/>
</head>
<body class="body_move">
