<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="nav-icon fas fa-tachometer-alt"></i></a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<section class="content-header">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add User</h3>

                <div class="float-right">
                    <a href="<?=site_url('users')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i>Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" name="fullname" value="<?=set_value('fullname') ?>" class="form-control <?=form_error('fullname') ? 'is-invalid' : null?>">
                                <?=form_error('fullname')?>
                            </div>
                    </div>
                    
                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" name="username" value="<?=set_value('username') ?>" class="form-control <?=form_error('username') ? 'is-invalid' : null?>">
                                <?=form_error('username')?>
                            </div>
                    </div>

                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="password" name="password" value="<?=set_value('password') ?>" class="form-control <?=form_error('password') ? 'is-invalid' : null?>">
                                <?=form_error('password')?>
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Password Confirmation *</label>
                                <input type="password" name="passconf" value="<?=set_value('passconf') ?>" class="form-control <?=form_error('passconf') ? 'is-invalid' : null?>">
                                <?=form_error('passconf')?>
                            </div>
                    </div>

                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Address *</label>
                                <textarea name="address" class="form-control <?=form_error('address') ? 'is-invalid' : null?>"><?=set_value('address') ?></textarea>
                                <?=form_error('address')?>
                            </div>
                    </div>

                    <div class="col-md-4">
                            <div class="form-group">
                                <label>Level *</label>
                                <select name="level" class="form-control <?=form_error('level') ? 'is-invalid' : null?>">
                                    <option value="">Pilih</option>
                                    <option value="1" <?=set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                    <option value="2" <?=set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                                </select>
                                <?=form_error('level')?>
                            </div>
                    </div>
                
                </div>

                    <div class="col-md-4">
                            <div clas="form-group">
                                <button type="submit" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save</button>
                                <button type="reset" class="btn btn-flat">
                                    <i class="fa fa-undo"></i> Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
</section>