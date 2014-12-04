<div class="contentpanel">
     
      <!--<?php echo $this->Session->flash(); ?>-->
	<div class="panel panel-default">
      <div class="row">
        
       <div class="col-md-6">
                 <form novalidate="novalidate" id="basicForm" action="http://themepixels.com/demo/webpage/bracket/form-validation.html" class="form-horizontal">
                     <div class="panel-heading">
                       
                       <h4 class="panel-title">Dados de Conta</h4>
                       <p>Utilize esta página para editar os dados da sua conta.</p>
                     </div>
                     <div class="panel-body">
                       <div class="form-group">
                         <label class="col-sm-2 control-label">Primeiro Nome <span class="asterisk">*</span></label>
                         <div class="col-sm-9">
                           <input name="first_name" class="form-control" placeholder="Type your name..." required="" type="text">
                         </div>
                       </div>
                       
                       <div class="form-group">
                         <label class="col-sm-2 control-label">Apelido <span class="asterisk">*</span></label>
                         <div class="col-sm-9">
                           <input name="last_name" class="form-control" placeholder="Type your email..." required="" type="text">
                         </div>
                       </div>
                       
                       <div class="form-group">
                         <label class="col-sm-2 control-label">Utilizador <span class="asterisk">*</span></label>
                         <div class="col-sm-9">
                           <input name="username" class="form-control" type="text">
                         </div>
                       </div>


                       <div class="form-group">
                         <label class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
                         <div class="col-sm-9">
                           <input name="email" class="form-control" type="email">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="col-sm-2 control-label">Password <span class="asterisk">*</span></label>
                         <div class="col-sm-9">
                           <input name="password" class="form-control" type="password">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="col-sm-2 control-label">País</label>
                         <div class="col-sm-9">
                           <input name="username" class="form-control" type="text">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="col-sm-2 control-label">Título </label>
                         <div class="col-sm-9">
                           <input name="username" class="form-control" type="text">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="col-sm-2 control-label">Companhia</label>
                         <div class="col-sm-9">
                           <input name="username" class="form-control" type="text">
                         </div>
                       </div>

                       
                       <div class="form-group">
                         <label class="col-sm-2 control-label">Sobre mim </label>
                         <div class="col-sm-9">
                           <textarea rows="5" class="form-control" placeholder="Type your comment..." required=""></textarea>
                         </div>
                       </div>
                     </div><!-- panel-body -->
                     <div class="panel-footer">
                       <div class="row">
                         <div class="col-sm-9 col-sm-offset-3">
                           <button class="btn btn-primary">Guardar</button>
                           <button type="reset" class="btn btn-default">Limpar</button>
                         </div>
                       </div>
                     </div>
                   
              
               			<div class="panel-heading">
               			  
                       	  <h4 class="panel-title">Imagem de perfil</h4>
               			  <p>Escolha aqui a sua imagem de perfil.</p>
               			</div>

               			<div class="form-group">
               			              <label class="col-sm-2 control-label">File Upload</label>
               			              <div class="col-sm-6">
               			                <div class="fileupload fileupload-new" data-provides="fileupload">
               			                  <div class="input-append">
               			                    <div class="uneditable-input">
               			                      <i class="glyphicon glyphicon-file fileupload-exists"></i>
               			                      <span class="fileupload-preview"></span>
               			                    </div>
               			                    <span class="btn btn-default btn-file">
               			                      <span class="fileupload-new">Select file</span>
               			                      <span class="fileupload-exists">Change</span>
               			                      <input type="file">
               			                    </span>
               			                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
               			                  </div>
               			                </div>
               			              </div>
               			            </div>
               			<!--<img src="http://files.mendigo-blogueiro.webnode.com/system_preview_detail_200000002-b0851b27bc-public/desdentado%20mindigo.jpg"/>-->
                       


                       <div class="form-group">
                         <label class="col-sm-2 control-label">Telefone </label>
                         <div class="col-sm-9">
                           <input id="phone" name="username" class="form-control" type="text">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="col-sm-2 control-label">Website</label>
                         <div class="col-sm-9">
                           <input name="username" class="form-control" type="url">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="col-sm-2 control-label">Google</label>
                         <div class="col-sm-9">
                           <input name="username" class="form-control" type="url">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="col-sm-2 control-label">Facebook</label>
                         <div class="col-sm-9">
                           <input name="username" class="form-control" type="url">
                         </div>
                       </div>

                       <div class="form-group">
                         <label class="col-sm-2 control-label">Twitter</label>
                         <div class="col-sm-9">
                           <input name="username" class="form-control" type="url">
                         </div>
                       </div>
                         </form>
                         
                         
                       </div>
        
      </div><!-- row -->
	</div><!--panel-default-->
</div><!--contentpanel-->


<?php echo $this->Html->script('jquery.maskedinput.min'); ?>
<script>

	jQuery("#phone").mask("(999) 9999999");
</script>