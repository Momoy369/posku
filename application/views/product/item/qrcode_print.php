<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>QRCode Product <?=$row->barcode ?></title>
            <body>
            <div class="card-body">
                <p class="text-center">
                    <img src="<?=base_url()?>uploads/qrcode/item-<?=$row->item_id ?>.png" style="width: 300px" >
                </p>
                <br><br>
            </div>
            
            </body>
    </head>
</html>