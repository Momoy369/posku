<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customers</h1>
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
                <h3 class="card-title"><?=ucfirst($page)?> Customer</h3>

                <div class="float-right">
                    <a href="<?=site_url('customer')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i>Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?=site_url('customer/process') ?>" method="post">
                            <div class="form-group">
                                <label>Customer Name *</label>
                                <input type="hidden" name="id" value="<?=$row->customer_id?>">
                                <input type="text" name="customer_name" value="<?=$row->name?>" class="form-control" required>
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender *</label>
                            <select name="gender" value="<?=$row->gender?>" class="form-control" required>
                                <option value="">Pilih</option>
                                <option value="L" <?=$row->gender == 'L' ? 'selected' : ''?>>Laki-laki</option>
                                <option value="P" <?=$row->gender == 'P' ? 'selected' : ''?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="number" name="phone" value="<?=$row->phone ?>" class="form-control" required>
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Customer Address *</label>
                            <textarea name="addr" class="form-control" required><?=$row->address ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                            <div clas="form-group">
                                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save</button>
                                <button type="reset" class="btn btn-flat">
                                    <i class="fa fa-undo"></i> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
</section>