<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transaction</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
              <li class="breadcrumb-item active">Stock</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">
    <?php $this->view('messages')?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Stock Out</h3>

                <div class="float-right">
                    <a href="<?=site_url('stock/out')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i>Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?=site_url('stock/process_stock_out') ?>" method="post">
                            <div class="form-group">
                                <label>Date *</label>
                                <input type="hidden" name="id" value="">
                                <input type="date" name="date" value="<?=date('Y-m-d') ?>" class="form-control" required>
                            </div>
                    </div>

                        <div class="col-md-6">
                            <div>
                                <label for="barcode">Barcode *</label>
                            </div>

                        <div class=" form-group input-group">
                            <input type="hidden" name="item_id" id="item_id">
                            <input type="text" name="barcode" id="barcode" class="form-control" required autofocus>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="item_name">Item Name *</label>
                                <input type="hidden" name="id" value="">
                                <input type="text" name="item_name" id="item_name" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="unit_name">Item Unit</label>
                                        <input type="text" name="unit_name" id="unit_name" value="-" class="form-control" readonly>
                                    </div>

                                </div>
                            </div>
                        
                        </div>

                            <div class="col-md-3">
                                <label for="stock">Initial Stock</label>
                                <input type="text" name="stock" id="stock" value="-" class="form-control" readonly>
                            </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Info *</label>
                                    <input type="hidden" name="id" value="">
                                    <input type="text" name="detail" class="form-control" placeholder="Add info" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Supplier *</label>
                                    <input type="hidden" name="id" value="">
                                    <select name="supplier" class="form-control">
                                        <option value="">Pilih</option>
                                        <?php foreach($supplier as $i => $data) {
                                            echo '<option value="'.$data->supplier_id.'">'.$data->name.'</option>';
                                        }?>
                                    </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Qty *</label>
                                    <input type="text" name="qty" class="form-control" required>
                            </div>
                        </div>
                            
                        <div class="col-md-8">
                            <div clas="form-group">
                                <button type="submit" name="out_add" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save</button>
                                <button type="reset" class="btn btn-flat">
                                    <i class="fa fa-undo"></i> Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</section>

<div class="modal fade" id="modal-item">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Select Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($item as $i => $data) { ?>
                        <tr>
                            <td><?=$data->barcode ?></td>
                            <td><?=$data->name ?></td>
                            <td><?=$data->unit_name ?></td>
                            <td><?=indo_currency($data->price)?></td>
                            <td><?=$data->stock ?></td>
                            <td>
                                <button class="btn btn-xs btn-info"
                                id="select" data-id="<?=$data->item_id?>"
                                            data-barcode="<?=$data->barcode?>"
                                            data-name="<?=$data->name?>"
                                            data-unit="<?=$data->unit_name?>"
                                            data-stock="<?=$data->stock?>">
                                    <i class="fa fa-check"></i> Select
                                </button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click', '#select', function(){
            var item_id = $(this).data('id');
            var barcode = $(this).data('barcode');
            var name = $(this).data('name');
            var unit_name = $(this).data('unit');
            var stock = $(this).data('stock');

            $('#item_id').val(item_id);
            $('#barcode').val(barcode);
            $('#item_name').val(name);
            $('#unit_name').val(unit_name);
            $('#stock').val(stock);
            $('#modal-item').modal('hide');
        })
    })
</script>