<?php

use ChurchCRM\dto\SystemConfig;
use ChurchCRM\dto\SystemURLs;

if (SystemConfig::debugEnabled()) {
  require_once 'Header-Security.php';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= SystemURLs::getRootPath() ?>/Images/standlogo.png" type="image/x-icon" class="brand-image img-circle elevation-3" style="opacity: .8">

  <!-- Custom ChurchCRM styles -->
  <link rel="stylesheet" href="<?= SystemURLs::getRootPath() ?>/skin/churchcrm.min.css">
  <link rel="stylesheet" href="<?= SystemURLs::getRootPath() ?>/skin/external/fontawesome/css/all.css">

  <!-- jQuery JS -->
  <script src="<?= SystemURLs::getRootPath() ?>/skin/external/jquery/jquery.min.js"></script>

  <title>PCEA St.AndrewsCRM: <?= $sPageTitle ?></title>

</head>

<body class="hold-transition login-page">

  <script nonce="<?= SystemURLs::getCSPNonce() ?>">
    window.CRM = {
      root: "<?= SystemURLs::getRootPath() ?>",
      churchWebSite: "<?= SystemConfig::getValue('sChurchWebSite') ?>"
    };
  </script>