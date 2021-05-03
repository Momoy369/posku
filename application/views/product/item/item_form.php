<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Items</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
              <li class="breadcrumb-item active">Items</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">
    <?php $this->view('messages')?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?=ucfirst($page)?> Item</h3>

                <div class="float-right">
                    <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i>Back
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <form action="<?=site_url('item/process') ?>" method="post">
                            <div class="form-group">
                                <label>Item Barcode *</label>
                                <input type="hidden" name="id" value="<?=$row->item_id?>">
                                <input type="text" name="barcode" value="<?=$row->barcode ?>" class="form-control" required>
                            </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                <label>Product Name *</label>
                                <input type="text" name="product_name" id="product_name" value="<?=$row->name ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Product Price *</label>
                            <input type="number" name="price" value="<?=$row->price ?>" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Category *</label>
                                <select name="categories" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <?php foreach($categories->result() as $key => $data){ ?>
                                        <option value="<?=$data->category_id ?>" <?=$data->category_id == $row->category_id ? "selected" : null?>><?=$data->name?></option>
                                    <?php }?>
                                </select>
                            </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                                <label>Unit *</label>
                                <?php echo form_dropdown('unit', $unit, $selectedunit,
                                ['class' => 'form-control', 'required'])?>
                        </div>
                    </div>
                </div>

                    <div class="col-md-4">
                        <div clas="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-flat">
                                <i class="fa fa-undo"></i> Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>    
</section>