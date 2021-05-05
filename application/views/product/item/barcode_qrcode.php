<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Items</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
              <li class="breadcrumb-item active">Item</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">
        <?php $this->view('messages')?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Barcode Generator 
                <i class="fa fa-barcode"> </i></h3>

                <div class="float-right">
                    <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>

            <div class="card-body">
            <p class="text-center"><?php
            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
            echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '" style="width: 300px">';
            ?>
            <br>
            <?=$row->barcode?></p>
            <br><br>
            <a href="<?=site_url('item/barcode_print/'.$row->item_id)?>" target="_blank" class="btn btn-default btn-xs">
                <i class="fa fa-print"></i> Print
            </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">QR Code Generator
                
                <i class="fa fa-qrcode"> </i></h3>
            </div>

            <div class="card-body">
            <p class="text-center"><?php
                $qrCode = new Endroid\QrCode\QrCode($row->barcode);
                $qrCode->writeFile('uploads/qrcode/item-'.$row->item_id.'.png');
                ?>
            <img src="<?=base_url('uploads/qrcode/item-'.$row->item_id.'.png') ?>">
            <br>
            <?=$row->barcode?></p>

            <br><br>
            <a href="<?=site_url('item/barcode_print/'.$row->item_id)?>" target="_blank" class="btn btn-default btn-xs">
                <i class="fa fa-print"></i> Print
            </a>
            </div>
        </div>
</section>