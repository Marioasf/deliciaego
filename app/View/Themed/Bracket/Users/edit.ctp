<div class="contentpanel">
      <!--
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">×</a>
            <a href="#" class="minimize">−</a>
          </div>
          <h4 class="panel-title">Dados de Conta</h4>
          <p>Utilize esta página para editar os dados.</p>
        </div>
        
      </div>-->

      
      <?php echo $this->Session->flash(); ?>

      <div class="row">
        
        <div class="col-md-6">
          <div class="panel panel-default">
            <!--<div class="panel-heading">
              
              <h4 class="panel-title">No Label Form</h4>
              <p>This is an example of a form using a placeholder instead of label.</p>
            </div>-->
            <form>
            <div class="panel-body">
              <div class="row row-pad-5">
                <div class="col-lg-4">
                  <input name="first_name" placeholder="Primeiro nome" class="form-control" type="text">
                </div>
                <div class="col-lg-4">
                  <input name="last_name" placeholder="Apelido" class="form-control" type="text">
                </div>
                <div class="col-lg-4">
                  <input name="username" placeholder="Nome de utilizador" class="form-control" type="text">
                </div>
                <div class="col-lg-4">
                  <input name="email" placeholder="Email" class="form-control" type="email">
                </div>
                <div class="col-lg-4">
                  <input name="website" placeholder="Website" class="form-control" type="url">
                </div>
              </div><!-- row -->
              <textarea class="form-control" rows="5" placeholder="Message"></textarea>
            </div><!-- panel-body -->
            <div class="panel-footer">
              <button class="btn btn-primary">Add Comment</button>
            </div>
            </form>
          </div><!-- panel -->
        </div>
        <div class="col-md-6">
			Colocar aqui mugshot do utilizador
			<img src="http://files.mendigo-blogueiro.webnode.com/system_preview_detail_200000002-b0851b27bc-public/desdentado%20mindigo.jpg"/>
        </div>
        
      </div><!-- row -->

</div><!--contentpanel-->