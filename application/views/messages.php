<?php if($this->session->has_userdata('success')) { ?>
<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"> Congrats!</i></h4>
            <?=$this->session->flashdata('success')?>
        </div>
<?php }?>

<?php if($this->session->has_userdata('failed')) { ?>
<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"> Oops!</i></h4>
            <?=$this->session->flashdata('failed')?>
        </div>
<?php }?>