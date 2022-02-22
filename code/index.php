<?php

require_once 'config/config.php';
require_once 'modules/hg-api.php';

$hg = new HG_API(HG_API_KEY);
$dollar = $hg->dollar_quotation();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dollar Quotation</title>
</head>
<body>
    <p>Dollar Quotation</p>
    <?php if($hg->is_error() == false): ?>
        <p>USD <span><?php echo($dollar['buy']); ?> </span></p>
    <?php else: ?>
        <p>Unvailable</p>
    <?php endif; ?>
</body>
</html>
