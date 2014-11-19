
<div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-btns">
                <a href="#" class="panel-close">×</a>
                <a href="#" class="minimize">−</a>
              </div>
              <h4 class="panel-title">Wizard With Progress Bar</h4>
              <p>Same with basic wizard setup but with progress bar.</p>
            </div>
            <div class="panel-body panel-body-nopadding">
              
              <!-- BASIC WIZARD -->
              <div id="progressWizard" class="basic-wizard">
                
                <ul class="nav nav-pills nav-justified">
                  <li class="active"><a href="#ptab1" data-toggle="tab"><span>Step 1:</span> Basic Info</a></li>
                  <li><a href="#ptab2" data-toggle="tab"><span>Step 2:</span> Product Info</a></li>
                  <li><a href="#ptab3" data-toggle="tab"><span>Step 3:</span> Payment</a></li>
                </ul>
                  
                <div class="tab-content">
                  
                  <div class="progress progress-striped">
                    <div style="width: 33.3333%;" class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  
                  <div class="tab-pane active" id="ptab1">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Firstname</label>
                        <div class="col-sm-8">
                          <input name="firstname" class="form-control" type="text">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4">Lastname</label>
                        <div class="col-sm-8">
                          <input name="lastname" class="form-control" type="text">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4">Gender</label>
                        <div class="col-sm-8">
                          <div class="rdio rdio-primary">
                            <input checked="checked" id="male2" value="m" name="radio" type="radio">
                            <label for="male2">Male</label>
                          </div>
                          <div class="rdio rdio-primary">
                            <input value="f" id="female2" name="radio" type="radio">
                            <label for="female2">Female</label>
                          </div>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                  <div class="tab-pane" id="ptab2">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Product ID</label>
                        <div class="col-sm-5">
                          <input name="product_id" class="form-control" type="text">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4">Product Name</label>
                        <div class="col-sm-8">
                          <input name="product_name" class="form-control" type="text">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4">Category</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Choose One</option>
                            <option value="">3D Animation</option>
                            <option value="">Web Design</option>
                            <option value="">Software Engineering</option>
                          </select>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                  <div class="tab-pane" id="ptab3">
                    <form class="form">
                      <div class="form-group">
                        <label class="col-sm-4">Card No</label>
                        <div class="col-sm-8">
                          <input name="cardno" class="form-control" type="text">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4">Expiration</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">...</option>
                          </select>
                        </div>
                        
                        <div class="col-sm-4">
                          <select class="form-control">
                            <option value="">Year</option>
                            <option value="">2013</option>
                            <option value="">2014</option>
                            <option value="">2015</option>
                            <option value="">...</option>
                          </select>
                        </div>
                        
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4">CSV</label>
                        <div class="col-sm-4">
                          <input name="csv" class="form-control" type="text">
                        </div>
                      </div>
                      
                    </form>
                  </div>
                  
                  
                </div><!-- tab-content -->
                
                <ul class="pager wizard">
                    <li class="previous disabled"><a href="javascript:void(0)">Previous</a></li>
                    <li class="next"><a href="javascript:void(0)">Next</a></li>
                  </ul>
                
              </div><!-- #basicWizard -->
              
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div>
        
<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('picture');
		echo $this->Form->input('user');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
	</ul>
</div>
