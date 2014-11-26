<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Deliciaego, o seu portal de ofertas</title>

  <?php echo $this->Html->css('style.default'); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

  <!-- Preloader -->
  <div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
  </div>

  <section>

    <div class="signuppanel">

      <div class="row">

        <div class="col-md-6">

          <div class="signup-info">
            <div class="logopanel">
              <h1><span>[</span> Deliciaego <span>]</span></h1>
            </div><!-- logopanel -->

            <div class="mb20"></div>

            <h5><strong>Bootstrap 3 Admin Template!</strong></h5>
            <p>Bracket is a theme that is perfect if you want to create your own content management, monitoring or any other system for your project.</p>
            <p>Below are some of the benefits you can have when purchasing this template.</p>
            <div class="mb20"></div>

            <div class="feat-list">
              <i class="fa fa-wrench"></i>
              <h4 class="text-success">Easy to Customize</h4>
              <p>Bracket is made using Bootstrap 3 so you can easily customize any element of this template following the structure of Bootstrap 3.</p>
            </div>

            <div class="feat-list">
              <i class="fa fa-compress"></i>
              <h4 class="text-success">Fully Responsive Layout</h4>
              <p>Bracket is design to fit on all browser widths and all resolutions on all mobile devices. Try to scale your browser and see the results.</p>
            </div>

            <div class="feat-list mb20">
              <i class="fa fa-search-plus"></i>
              <h4 class="text-success">Retina Ready</h4>
              <p>When a user load a page, a script checks each image on the page to see if there's a high-res version of that image. If a high-res exists, the script will swap that image in place.</p>
            </div>

            <h4 class="mb20">and much more...</h4>

          </div><!-- signup-info -->

        </div><!-- col-sm-6 -->

        <div class="col-md-6">

        <form method="post" action="/users/signup">

            <h3 class="nomargin">Regista-te</h3>
            <p class="mt5 mb20">Já estás registado? <a href="signin.html"><strong>Entra</strong></a></p>

            <label class="control-label">Nome</label>
            <div class="row mb10">
                <?php echo $this->Form->create('User', array(
                  'inputDefaults' => array(
                    'div' => 'form-group',
                    'label' => false,
                    'wrapInput' => false,
                    'class' => 'form-control'
                  ),
                  'class' => 'well form-inline'
                )); ?>
                  <?php echo $this->Form->input('first_name', array(
                    'placeholder' => 'Nome'
                  )); ?>
                  <?php echo $this->Form->input('last_name', array(
                    'placeholder' => 'Sobrenome'
                  )); ?>               

            </div>

            <div class="mb10">
              <?php echo $this->Form->input('username', array(
                'label' => 'Utilizador',
                'placeholder' => 'Nome de utilizador'
              )); ?>
            </div>

            <div class="mb10">
              <?php echo $this->Form->input('password', array(
                'label' => 'Senha',
                'placeholder' => 'Escolha uma palavra-passe'
              )); ?>
            </div>

            <div class="mb10">
              <?php echo $this->Form->input('password', array(
                'label' => 'Confirmação de senha',
                'placeholder' => 'Re-escreva a sua palavra passe'
              )); ?>
            </div>

            <label class="control-label">Data de Nascimento</label>
            <div class="row mb10">
              <div class="col-sm-5">
                  <?php echo $this->Form->input('month', array(
                    'empty' => 'Mês',
                    'options' => array(
                      'Mês' => array(
                        1 => 'Janeiro',
                        2 => 'Fevereiro',
                        3 => 'Março',
                        4 => 'Abril',
                        5 => 'Maio',
                        6 => 'Junho',
                        7 => 'Julho',
                        8 => 'Agosto',
                        9 => 'Setembro',
                        10 => 'Outubro',
                        11 => 'Novembro',
                        12 => 'Dezembro'
                        )
                    ),
                  )); ?>
              </div>
              <div class="col-sm-3">
                <?php echo $this->Form->input('day', array(
                  'placeholder' => 'Dia'
                )); ?>
              </div>
              <div class="col-sm-4">
                <?php echo $this->Form->input('year', array(
                  'placeholder' => 'Ano'
                )); ?>
              </div>
            </div>

            <div class="mb10">
                <?php echo $this->Form->input('email', array(
                  'label' => 'Endereço de E-mail',
                  'placeholder' => 'E-mail'
                )); ?>
            </div>

            <div class="mb10">
              <label class="control-label">Localização</label>
              <select class="form-control chosen-select" data-placeholder="Escolhe um país...">
                <option value=""></option>
                <option value="Afeganistão">Afeganistão</option>
                <option value="Akrotiri">Akrotiri</option>
                <option value="Albânia">Albânia</option>
                <option value="Alemanha">Alemanha</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguila">Anguila</option>
                <option value="Antilhas Neerlandesas">Antilhas Neerlandesas</option>
                <option value="Antárctida">Antárctida</option>
                <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                <option value="Arctic Ocean">Arctic Ocean</option>
                <option value="Argentina">Argentina</option>
                <option value="Argélia">Argélia</option>
                <option value="Arménia">Arménia</option>
                <option value="Aruba">Aruba</option>
                <option value="Arábia Saudita">Arábia Saudita</option>
                <option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option>
                <option value="Atlantic Ocean">Atlantic Ocean</option>
                <option value="Austrália">Austrália</option>
                <option value="Azerbaijão">Azerbaijão</option>
                <option value="Baamas">Baamas</option>
                <option value="Bangladeche">Bangladeche</option>
                <option value="Barbados">Barbados</option>
                <option value="Barém">Barém</option>
                <option value="Belize">Belize</option>
                <option value="Benim">Benim</option>
                <option value="Bermudas">Bermudas</option>
                <option value="Bielorrússia">Bielorrússia</option>
                <option value="Birmânia">Birmânia</option>
                <option value="Bolívia">Bolívia</option>
                <option value="Botsuana">Botsuana</option>
                <option value="Brasil">Brasil</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgária">Bulgária</option>
                <option value="Burquina Faso">Burquina Faso</option>
                <option value="Burúndi">Burúndi</option>
                <option value="Butão">Butão</option>
                <option value="Bélgica">Bélgica</option>
                <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                <option value="Cabo Verde">Cabo Verde</option>
                <option value="Camarões">Camarões</option>
                <option value="Camboja">Camboja</option>
                <option value="Canadá">Canadá</option>
                <option value="Catar">Catar</option>
                <option value="Cazaquistão">Cazaquistão</option>
                <option value="Chade">Chade</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Chipre">Chipre</option>
                <option value="Clipperton Island">Clipperton Island</option>
                <option value="Colômbia">Colômbia</option>
                <option value="Comores">Comores</option>
                <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                <option value="Congo-Kinshasa">Congo-Kinshasa</option>
                <option value="Coral Sea Islands">Coral Sea Islands</option>
                <option value="Coreia do Norte">Coreia do Norte</option>
                <option value="Coreia do Sul">Coreia do Sul</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Costa do Marfim">Costa do Marfim</option>
                <option value="Croácia">Croácia</option>
                <option value="Cuba">Cuba</option>
                <option value="Dhekelia">Dhekelia</option>
                <option value="Dinamarca">Dinamarca</option>
                <option value="Domínica">Domínica</option>
                <option value="Egipto">Egipto</option>
                <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                <option value="Equador">Equador</option>
                <option value="Eritreia">Eritreia</option>
                <option value="Eslováquia">Eslováquia</option>
                <option value="Eslovénia">Eslovénia</option>
                <option value="Espanha">Espanha</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Estónia">Estónia</option>
                <option value="Etiópia">Etiópia</option>
                <option value="Faroé">Faroé</option>
                <option value="Fiji">Fiji</option>
                <option value="Filipinas">Filipinas</option>
                <option value="Finlândia">Finlândia</option>
                <option value="França">França</option>
                <option value="Gabão">Gabão</option>
                <option value="Gana">Gana</option>
                <option value="Gaza Strip">Gaza Strip</option>
                <option value="Geórgia do Sul e Sandwich do Sul">Geórgia do Sul e Sandwich do Sul</option>
                <option value="Geórgia">Geórgia</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Granada">Granada</option>
                <option value="Gronelândia">Gronelândia</option>
                <option value="Grécia">Grécia</option>
                <option value="Guame">Guame</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guiana">Guiana</option>
                <option value="Guiné Equatorial">Guiné Equatorial</option>
                <option value="Guiné">Guiné</option>
                <option value="Guiné-Bissau">Guiné-Bissau</option>
                <option value="Gâmbia">Gâmbia</option>
                <option value="Haiti">Haiti</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungria">Hungria</option>
                <option value="Ilha Bouvet">Ilha Bouvet</option>
                <option value="Ilha Norfolk">Ilha Norfolk</option>
                <option value="Ilha do Natal">Ilha do Natal</option>
                <option value="Ilhas Caimão">Ilhas Caimão</option>
                <option value="Ilhas Cook">Ilhas Cook</option>
                <option value="Ilhas Falkland">Ilhas Falkland</option>
                <option value="Ilhas Heard e McDonald">Ilhas Heard e McDonald</option>
                <option value="Ilhas Marshall">Ilhas Marshall</option>
                <option value="Ilhas Salomão">Ilhas Salomão</option>
                <option value="Ilhas Turcas e Caicos">Ilhas Turcas e Caicos</option>
                <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
                <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
                <option value="Ilhas dos Cocos">Ilhas dos Cocos</option>
                <option value="Indian Ocean">Indian Ocean</option>
                <option value="Indonésia">Indonésia</option>
                <option value="Iraque">Iraque</option>
                <option value="Irlanda">Irlanda</option>
                <option value="Irão">Irão</option>
                <option value="Islândia">Islândia</option>
                <option value="Israel">Israel</option>
                <option value="Itália">Itália</option>
                <option value="Iémen">Iémen</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Jan Mayen">Jan Mayen</option>
                <option value="Japão">Japão</option>
                <option value="Jersey">Jersey</option>
                <option value="Jibuti">Jibuti</option>
                <option value="Jordânia">Jordânia</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Laos">Laos</option>
                <option value="Lesoto">Lesoto</option>
                <option value="Letónia">Letónia</option>
                <option value="Libéria">Libéria</option>
                <option value="Listenstaine">Listenstaine</option>
                <option value="Lituânia">Lituânia</option>
                <option value="Luxemburgo">Luxemburgo</option>
                <option value="Líbano">Líbano</option>
                <option value="Líbia">Líbia</option>
                <option value="Macau">Macau</option>
                <option value="Macedónia">Macedónia</option>
                <option value="Madagáscar">Madagáscar</option>
                <option value="Maldivas">Maldivas</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Malásia">Malásia</option>
                <option value="Malávi">Malávi</option>
                <option value="Man, Isle of">Man, Isle of</option>
                <option value="Marianas do Norte">Marianas do Norte</option>
                <option value="Marrocos">Marrocos</option>
                <option value="Mauritânia">Mauritânia</option>
                <option value="Maurícia">Maurícia</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Micronésia">Micronésia</option>
                <option value="Moldávia">Moldávia</option>
                <option value="Mongólia">Mongólia</option>
                <option value="Monserrate">Monserrate</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Moçambique">Moçambique</option>
                <option value="Mundo">Mundo</option>
                <option value="México">México</option>
                <option value="Mónaco">Mónaco</option>
                <option value="Namíbia">Namíbia</option>
                <option value="Nauru">Nauru</option>
                <option value="Navassa Island">Navassa Island</option>
                <option value="Nepal">Nepal</option>
                <option value="Nicarágua">Nicarágua</option>
                <option value="Nigéria">Nigéria</option>
                <option value="Niue">Niue</option>
                <option value="Noruega">Noruega</option>
                <option value="Nova Caledónia">Nova Caledónia</option>
                <option value="Nova Zelândia">Nova Zelândia</option>
                <option value="Níger">Níger</option>
                <option value="Omã">Omã</option>
                <option value="Pacific Ocean">Pacific Ocean</option>
                <option value="Palau">Palau</option>
                <option value="Panamá">Panamá</option>
                <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                <option value="Paquistão">Paquistão</option>
                <option value="Paracel Islands">Paracel Islands</option>
                <option value="Paraguai">Paraguai</option>
                <option value="Países Baixos">Países Baixos</option>
                <option value="Peru">Peru</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Polinésia Francesa">Polinésia Francesa</option>
                <option value="Polónia">Polónia</option>
                <option value="Porto Rico">Porto Rico</option>
                <option value="Portugal">Portugal</option>
                <option value="Quirguizistão">Quirguizistão</option>
                <option value="Quiribáti">Quiribáti</option>
                <option value="Quénia">Quénia</option>
                <option value="Reino Unido">Reino Unido</option>
                <option value="República Centro-Africana">República Centro-Africana</option>
                <option value="República Checa">República Checa</option>
                <option value="República Dominicana">República Dominicana</option>
                <option value="Roménia">Roménia</option>
                <option value="Ruanda">Ruanda</option>
                <option value="Rússia">Rússia</option>
                <option value="Salvador">Salvador</option>
                <option value="Samoa Americana">Samoa Americana</option>
                <option value="Samoa">Samoa</option>
                <option value="Santa Helena">Santa Helena</option>
                <option value="Santa Lúcia">Santa Lúcia</option>
                <option value="Sara Ocidental">Sara Ocidental</option>
                <option value="Seicheles">Seicheles</option>
                <option value="Senegal">Senegal</option>
                <option value="Serra Leoa">Serra Leoa</option>
                <option value="Singapura">Singapura</option>
                <option value="Somália">Somália</option>
                <option value="Southern Ocean">Southern Ocean</option>
                <option value="Spratly Islands">Spratly Islands</option>
                <option value="Sri Lanca">Sri Lanca</option>
                <option value="Suazilândia">Suazilândia</option>
                <option value="Sudão">Sudão</option>
                <option value="Suriname">Suriname</option>
                <option value="Suécia">Suécia</option>
                <option value="Suíça">Suíça</option>
                <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                <option value="São Cristóvão e Neves">São Cristóvão e Neves</option>
                <option value="São Marinho">São Marinho</option>
                <option value="São Pedro e Miquelon">São Pedro e Miquelon</option>
                <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                <option value="Sérvia">Sérvia</option>
                <option value="Síria">Síria</option>
                <option value="Tailândia">Tailândia</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajiquistão">Tajiquistão</option>
                <option value="Tanzânia">Tanzânia</option>
                <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
                <option value="Territórios Austrais Franceses">Territórios Austrais Franceses</option>
                <option value="Timor Leste">Timor Leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trindade e Tobago">Trindade e Tobago</option>
                <option value="Tunísia">Tunísia</option>
                <option value="Turquemenistão">Turquemenistão</option>
                <option value="Turquia">Turquia</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Ucrânia">Ucrânia</option>
                <option value="Uganda">Uganda</option>
                <option value="União Europeia">União Europeia</option>
                <option value="Uruguai">Uruguai</option>
                <option value="Usbequistão">Usbequistão</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vaticano">Vaticano</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietname">Vietname</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis e Futuna">Wallis e Futuna</option>
                <option value="West Bank">West Bank</option>
                <option value="Zimbabué">Zimbabué</option>
                <option value="Zâmbia">Zâmbia</option>
                <option value="África do Sul">África do Sul</option>
                <option value="Áustria">Áustria</option>
                <option value="Índia">Índia</option>
              </select>
            </div>
            <br />

            <button class="btn btn-success btn-block">Registar</button> 
          </form>
        </div><!-- col-sm-6 -->

      </div><!-- row -->

      <div class="signup-footer">
        <div class="pull-left">
          &copy; 2014. All Rights Reserved. Deliciaego
        </div>
        <div class="pull-right">
          Created By: <a href="" target="_blank">Deliciaego</a>
        </div>
      </div>

    </div><!-- signuppanel -->

  </section>

  <?php echo $this->Html->script('jquery-1.10.2.min'); ?>
  <?php echo $this->Html->script('jquery-migrate-1.2.1.min'); ?>
  <?php echo $this->Html->script('bootstrap.min'); ?>
  <?php echo $this->Html->script('modernizr.min'); ?>
  <?php echo $this->Html->script('retina.min'); ?>

  <?php echo $this->Html->script('chosen.jquery.min'); ?>

  <?php echo $this->Html->script('custom'); ?>

<!--
<script>
jQuery(document).ready(function(){

// Chosen Select
jQuery(".chosen-select").chosen({
'width':'100%',
'white-space':'nowrap',
disable_search_threshold: 10
});

});
</script>
-->
</body>
</html>
