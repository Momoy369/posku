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
                        <th class="text-center">Detail</th>
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
                        <td class="text-center"><?=$data->detail?></td>
                        <td class="text-center"><?=$data->qty?></td>
                        <td class="text-center"><?=indo_date($data->date)?></td>
                        <td class="text-center" width="160px">
                            <a id="set_detail" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-detail"
                            data-barcode="<?=$data->barcode?>"
                            data-itemname="<?=$data->item_name?>"
                            data-detail="<?=$data->detail?>"
                            data-suppliername="<?=$data->supplier_name?>"
                            data-qty="<?=$data->qty?>"
                            data-date="<?=indo_date($data->date)?>">
                                <i class="fa fa-eye"></i> Details
                            </a>
                            <a href="<?=site_url('stock/in/del/'. $data->stock_id.'/'.$data->item_id)?>" class="btn btn-danger btn-xs">
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

<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Stock In Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="">
                                Barcode
                            </th>
                            <td><span id="barcode"></span></td>
                        </tr>
                        <tr>
                            <th style="">
                                Item Name
                            </th>
                            <td><span id="item_name"></span></td>
                        </tr>
                        <tr>
                            <th style="">
                                Detail
                            </th>
                            <td><span id="detail"></span></td>
                        </tr>
                        <tr>
                            <th style="">
                                Supplier Name
                            </th>
                            <td><span id="supplier_name"></span></td>
                        </tr>
                        <tr>
                            <th style="">
                                Qty
                            </th>
                            <td><span id="qty"></span></td>
                        </tr>
                        <tr>
                            <th style="">
                                Date
                            </th>
                            <td><span id="date"></span></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click', '#set_detail', function(){
            var barcode = $(this).data('barcode');
            var itemname = $(this).data('itemname');
            var detail = $(this).data('detail');
            var suppliername = $(this).data('suppliername');
            var qty = $(this).data('qty');
            var date = $(this).data('date');

            $('#barcode').text(barcode);
            $('#item_name').text(itemname);
            $('#detail').text(detail);
            $('#supplier_name').text(suppliername);
            $('#qty').text(qty);
            $('#date').text(date);
        })
    })
</script>