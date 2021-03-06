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
                <h3 class="card-title">Items Data</h3>

                <div class="float-right">
                    <a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">
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
                        <th class="text-center">Name</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Unit</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php $no = 1;
                    foreach($row->result() as $key => $data) {?>
                    <tr>
                        <td style="width:5%;"><?=$no++;?>.</td>
                        <td class="text-center">
                            <?=$data->barcode?>
                            <a href="<?=site_url('item/barcode_qrcode/'. $data->item_id)?>" onclick="return confirm('Generate barcode?')" class="btn btn-default btn-xs">
                                Generate <i class="fa fa-barcode"></i>
                            </a>
                        </td>
                        <td><?=$data->name?></td>
                        <td><?=$data->category_name?></td>
                        <td><?=$data->unit_name?></td>
                        <td><?=$data->price?></td>
                        <td><?=$data->stock?></td>
                        <td>
                            <?php if($data->image != null){?>
                            <img src="<?=base_url('uploads/product/'.$data->image)?>" style="width: 100px"/>
                        </td>
                        <?php }?>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('item/del/'. $data->item_id)?>" onclick="return confirm('You sure want to delete this item?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                            <a href="<?=site_url('item/edit/'. $data->item_id)?>" class="btn btn-success btn-xs">
                                <i class="fa fa-pencil-alt"></i> Edit
                            </a>
                        </td>
                    </tr>
                    <?php }?> -->
                </tbody>
            </table>

            </div>
        </div>
</section>

<script>
    $(document).ready(function(){
        $('#table1').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=site_url('item/get_ajax')?>",
                "type": "POST"
            
            },
            "columnDefs": [
                {
                "targets": [5, 6],
                "className": 'text-right'
            },
            {
                "targets": [7, -1],
                "className": 'text-center'
            },
            {
                "targets": [7, -1],
                "orderable": false
            },
            {
                "order": []
            }
        ]
        })
    })
</script>