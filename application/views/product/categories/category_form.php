<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categoriess</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
              <li class="breadcrumb-item active">Categoriess</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">
    <?php $this->view('messages')?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?=ucfirst($page)?> Category</h3>

                <div class="float-right">
                    <a href="<?=site_url('categories')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i>Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?=site_url('categories/process') ?>" method="post">
                            <div class="form-group">
                                <label>Category Name *</label>
                                <input type="hidden" name="id" value="<?=$row->category_id?>">
                                <input type="text" name="categories_name" value="<?=$row->name?>" class="form-control" required>
                            </div>
                            
                            <div clas="form-group">
                                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save</button>
                                <button type="reset" class="btn btn-flat">
                                    <i class="fa fa-undo"></i> Reset</button>
                            </div>
                        </form>
                </div>
            </div>

            
</section>