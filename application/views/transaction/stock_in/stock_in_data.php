<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transaction</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
              <li class="breadcrumb-item active">Stock-In</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">
        <?php $this->view('messages')?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Stock-In Data</h3>

                <div class="float-right">
                    <a href="<?=site_url('stock/in/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Create
                    </a>
                </div>
            </div>

            <div class="card-body table-responsive">

            <table class="table table-bordered" id="table1">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Barcode</th>
                        <th class="text-center">Product Item</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row as $key => $data) {?>
                    <tr>
                        <td style="width:5%;"><?=$no++;?>.</td>
                        <td><?=$data->barcode?></td>
                        <td><?=$data->item_name?></td>
                        <td class="text-center"><?=$data->qty?></td>
                        <td class="text-center"><?=indo_date($data->date)?></td>
                        <td class="text-center" width="160px">
                            <a class="btn btn-default btn-xs">
                                <i class="fa fa-eye"></i> Detail
                            </a>
                            <a href="<?=site_url('stock/in/del/'. $data->stock_id)?>" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>

            </div>
        </div>
</section>