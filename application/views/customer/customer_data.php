<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customers</h1>
            <small>Pelanggan</small>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
              <li class="breadcrumb-item active">Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Customers Data</h3>

                <div class="float-right">
                    <a href="<?=site_url('customer/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Create
                    </a>
                </div>
            </div>

            <div class="card-body table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) {?>
                    <tr>
                        <td style="width:5%;"><?=$no++;?>.</td>
                        <td><?=$data->name?></td>
                        <td class="text-center" width="160px"><?=$data->gender?></td>
                        <td><?=$data->phone?></td>
                        <td><?=$data->address?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('customer/del/'. $data->customer_id)?>" onclick="return confirm('You sure want to delete this customer?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                            <a href="<?=site_url('customer/edit/'. $data->customer_id)?>" class="btn btn-success btn-xs">
                                <i class="fa fa-pencil-alt"></i> Edit
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>

            </div>
        </div>
</section>