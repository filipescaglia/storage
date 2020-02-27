<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Storage</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />
</head>
<body>

<?php require_once 'header.php'; ?>

<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<?php require_once 'footer.html'; ?>

<script src="<?php echo BASE_URL; ?>assets/js/vue.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/axios.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>

</body>
</html>