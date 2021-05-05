<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Barcode Product <?=$row->barcode ?></title>
            <body>
            <div class="card-body">
                <p class="text-center"><?php
                $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '" style="width: 300px">';
                ?>
                <br>
                <?=$row->barcode?></p>
                <br><br>
            </div>

            <!-- <div class="card-body">
            <p class="text-center"><?php
                $qrCode = new Endroid\QrCode\QrCode($row->barcode);
                // $qrCode->writeFile('uploads/qrcode/item-'.$row->item_id.'.png');
                ?>
            <img src="<?=base_url('uploads/qrcode/item-'.$row->item_id.'.png') ?>">
            <br>
            <?=$row->barcode?></p>

            <br><br>
            </div> -->
            </body>
    </head>
</html>