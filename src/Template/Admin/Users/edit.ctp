<section class="content-header">
    <h1>
        Edit User
        <small>- <?= Configure::read('APP_NAME'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= Configure::read('ADMIN_URL');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= Configure::read('ADMIN_URL');?>/users"><i class="fa fa-folder"></i> Users</a></li>
        <li class="active"> Edit User</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit User</h3>
                </div><!-- /.box-header -->

                <?= $this->Form->create($user, array('role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <div class="box-body">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <!-- Nome -->
                            <div class="form-group">
		                        <?= $this->Form->input('name', ['class' =>  'form-control', 'type' => 'text', 'Placeholder' => 'Full Name']) ?>
		                    </div><!-- .form-group -->
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <!-- Email -->
                            <div class="form-group">
                                <?= $this->Form->input('email', array('class' => 'form-control', 'label' => 'Email')); ?>
                            </div><!-- .form-group -->
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <?= $this->Form->input('password', array('class' => 'form-control', 'label' => 'Password', 'value' => false)); ?>
                            </div><!-- .form-group -->
                        </div>

                        <!--Prfil -->
		                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
		                    <div class="form-group">
		                        <?php
		                        echo $this->Form->input('role_id', [
		                            'class' => 'form-control',
		                            'label' => 'Profile',
		                            'empty' => 'Choose a Profile'
		                        ],
		                            [ 'options' => $roles]
		                        ); ?>
		                    </div><!-- .form-group -->
		                </div>


		                <!--Status -->
		                <div class="col-md-1">
		                    <div class="form-group">
		                        <label>Active</label>
		                        <br>
		                        <?= $this->Form->checkbox('status', [
		                            'type' => 'checkbox',
		                            'default' => 1
		                        ]); ?>
		                    </div>
		                </div>


                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Save'), ['class' => 'btn btn-flat btn-primary btn-lg']) ?>
                    <?= $this->Form->end() ?>
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </div><!-- col-md-9 -->

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
            <!-- Application buttons -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Actions</h3>
                </div>

                <div class="box-body">
                    <a href="<?= Configure::read('ADMIN_URL');?>/users" class="btn btn-app btn-flat"><i class="fa fa-folder"></i> Lists</a>
                    <a href="<?= Configure::read('ADMIN_URL');?>/users" class="btn btn-app bg-maroon btn-flat"><i class="fa fa-exclamation"></i> Cancel</a>
                </div><!-- /.box-body -->
            </div><!-- /.box /.box-info -->
        </div><!-- col-md-3 -->
    </div><!-- row -->

</section><!-- /.content -->