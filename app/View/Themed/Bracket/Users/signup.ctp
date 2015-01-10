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


      <?php echo $this->Session->flash();?>

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
                  'class' => 'form-control',
                  'onsubmit' => '<script>
                                   alert("<?php echo $this->Session->flash();?>");
                                </script>'
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
                    <?php echo $this->Form->input('password_confirm', array(
                      'label' => 'Confirmação de senha',
                      'placeholder' => 'Re-escreva a sua palavra passe',
                      'type' => 'password'
                      )); ?>
                    </div>

                    <label class="control-label">Data de Nascimento</label>
                    
                        <div class="input-group mb15">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                          <?php echo $this->Form->input('date', array('placeholder' => 'Data',
                            'class' => 'form-control',
                            'type' => 'text',
                            'id' => 'date'
                            ));?>
                        </div>


                            <div class="mb10">
                              <?php echo $this->Form->input('email', array(
                                'label' => 'Endereço de E-mail',
                                'placeholder' => 'E-mail'
                                )); ?>
                              </div>

                              <div class="mb10">
                                <?php echo $this->Form->input('location', array(
                                  'label' => 'Localização',
                                  'empty' => 'País',
                                  'options' => array(
                                    'País' => array(
                                      'Afeganistão' => 'Afeganistão',
                                      'Akrotiri' => 'Akrotiri',
                                      'Albânia' => 'Albânia',
                                      'Alemanha' => 'Alemanha',
                                      'Andorra' => 'Andorra',
                                      'Angola' => 'Angola',
                                      'Anguila' => 'Anguila',
                                      'Antilhas Neerlandesas' => 'Antilhas Neerlandesas',
                                      'Antárctida' => 'Antárctida',
                                      'Antígua e Barbuda' => 'Antígua e Barbuda',
                                      'Argentina' => 'Argentina',
                                      'Argélia' => 'Argélia',
                                      'Arménia' => 'Arménia',
                                      'Aruba' => 'Aruba',
                                      'Arábia Saudita' => 'Arábia Saudita',
                                      'Ashmore and Cartier Islands' => 'Ashmore and Cartier Islands',
                                      'Angola' => 'Angola',
                                      'Anguila' => 'Anguila',
                                      'Antilhas Neerlandesas' => 'Antilhas Neerlandesas',
                                      'Antárctida' => 'Antárctida',
                                      'Antígua e Barbuda' => 'Antígua e Barbuda',
                                      'Austrália' => 'Austrália',
                                      'Azerbaijão' => 'Azerbaijão',
                                      'Baamas' => 'Baamas',
                                      'Bangladeche' => 'Bangladeche',
                                      'Barbados' => 'Barbados',
                                      'Barém' => 'Barém',
                                      'Belize' => 'Belize',
                                      'Benim' => 'Benim',
                                      'Bermudas' => 'Bermudas',
                                      'Bielorrússia' => 'Bielorrússia',
                                      'Birmânia' => 'Birmânia',
                                      'Bolívia' => 'Bolívia',
                                      'Botsuana' => 'Botsuana',
                                      'Brasil' => 'Brasil',
                                      'Brunei' => 'Brunei',
                                      'Bulgária' => 'Bulgária',
                                      'Burquina Faso' => 'Burquina Faso',
                                      'Burúndi' => 'Burúndi',
                                      'Butão' => 'Butão',
                                      'Bélgica' => 'Bélgica',
                                      'Bósnia e Herzegovina' => 'Bósnia e Herzegovina',
                                      'Cabo Verde' => 'Cabo Verde',
                                      'Camarões' => 'Camarões',
                                      'Camboja' => 'Camboja',
                                      'Canadá' => 'Canadá',
                                      'Catar' => 'Catar',
                                      'Cazaquistão' => 'Cazaquistão',
                                      'Chade' => 'Chade',
                                      'Chile' => 'Chile',
                                      'China' => 'China',
                                      'Chipre' => 'Chipre',
                                      'Clipperton Island' => 'Clipperton Island',
                                      'Colômbia' => 'Colômbia',
                                      'Comores' => 'Comores',
                                      'Congo-Brazzaville' => 'Congo-Brazzaville',
                                      'Congo-Kinshasa' => 'Congo-Kinshasa',
                                      'Coral Sea Islands' => 'Coral Sea Islands',
                                      'Coreia do Norte' => 'Coreia do Norte',
                                      'Coreia do Sul' => 'Coreia do Sul',
                                      'Costa Rica' => 'Costa Rica',
                                      'Costa do Marfim' => 'Costa do Marfim',
                                      'Croácia' => 'Croácia',
                                      'Cuba' => 'Cuba',
                                      'Dhekelia' => 'Dhekelia',
                                      'Dinamarca' => 'Dinamarca',
                                      'Domínica' => 'Domínica',
                                      'Egipto' => 'Egipto',
                                      'Emiratos Árabes Unidos' => 'Emiratos Árabes Unidos',
                                      'Equador' => 'Equador',
                                      'Eritreia' => 'Eritreia',
                                      'Eslováquia' => 'Eslováquia',
                                      'Eslovénia' => 'Eslovénia',
                                      'Espanha' => 'Espanha',
                                      'Estados Unidos' => 'Estados Unidos',
                                      'Estónia' => 'Estónia',
                                      'Etiópia' => 'Etiópia',
                                      'Faroé' => 'Faroé',
                                      'Fiji' => 'Fiji',
                                      'Filipinas' => 'Filipinas',
                                      'Finlândia' => 'Finlândia',
                                      'França' => 'França',
                                      'Gabão' => 'Gabão',
                                      'Geórgia do Sul e Sandwich do Sul' => 'Geórgia do Sul e Sandwich do Sul',
                                      'Geórgia' => 'Geórgia',
                                      'Gibraltar' => 'Gibraltar',
                                      'Granada' => 'Granada',
                                      'Gronelândia' => 'Gronelândia',
                                      'Grécia' => 'Grécia',
                                      'Guame' => 'Guame',
                                      'Guatemala' => 'Guatemala',
                                      'Guernsey' => 'Guernsey',
                                      'Guiana' => 'Guiana',
                                      'Guiné Equatorial' => 'Guiné Equatorial',
                                      'Guiné' => 'Guiné',
                                      'Guiné-Bissau' => 'Guiné-Bissau',
                                      'Gâmbia' => 'Gâmbia',
                                      'Haiti' => 'Haiti',
                                      'Honduras' => 'Honduras',
                                      'Hong Kong' => 'Hong Kong',
                                      'Hungria' => 'Hungria',
                                      'Ilha Bouvet' => 'Ilha Bouvet',
                                      'Ilha Norfolk' => 'Ilha Norfolk',
                                      'Ilha do Natal' => 'Ilha do Natal',
                                      'Ilhas Caimão' => 'Ilhas Caimão',
                                      'Ilhas Cook' => 'Ilhas Cook',
                                      'Ilhas Falkland' => 'Ilhas Falkland',
                                      'Ilhas Heard e McDonald' => 'Ilhas Heard e McDonald',
                                      'Ilhas Marshall' => 'Ilhas Marshall',
                                      'Ilhas Salomão' => 'Ilhas Salomão',
                                      'Ilhas Turcas e Caicos' => 'Ilhas Turcas e Caicos',
                                      'Ilhas Virgens Americanas' => 'Ilhas Virgens Americanas',
                                      'Ilhas Virgens Britânicas' => 'Ilhas Virgens Britânicas',
                                      'Ilhas dos Cocos' => 'Ilhas dos Cocos',
                                      'Indian Ocean' => 'Indian Ocean',
                                      'Indonésia' => 'Indonésia',
                                      'Iraque' => 'Iraque',
                                      'Irlanda' => 'Irlanda',
                                      'Irão' => 'Irão',
                                      'Islândia' => 'Islândia',
                                      'Israel' => 'Israel',
                                      'Itália' => 'Itália',
                                      'Iémen' => 'Iémen',
                                      'Jamaica' => 'Jamaica',
                                      'Jan Mayen' => 'Jan Mayen',
                                      'Japão' => 'Japão',
                                      'Jersey' => 'Jersey',
                                      'Jibuti' => 'Jibuti',
                                      'Jordânia' => 'Jordânia',
                                      'Kuwait' => 'Kuwait',
                                      'Laos' => 'Laos',
                                      'Lesoto' => 'Lesoto',
                                      'Letónia' => 'Letónia',
                                      'Libéria' => 'Libéria',
                                      'Listenstaine' => 'Listenstaine',
                                      'Lituânia' => 'Lituânia',
                                      'Luxemburgo' => 'Luxemburgo',
                                      'Líbano' => 'Líbano',
                                      'Líbia' => 'Líbia',
                                      'Macau' => 'Macau',
                                      'Macedónia' => 'Macedónia',
                                      'Madagáscar' => 'Madagáscar',
                                      'Maldivas' => 'Maldivas',
                                      'Mali' => 'Mali',
                                      'Malta' => 'Malta',
                                      'Malásia' => 'Malásia',
                                      'Malávi' => 'Malávi',
                                      'Man, Isle of' => 'Man, Isle of',
                                      'Marianas do Norte' => 'Marianas do Norte',
                                      'Marrocos' => 'Marrocos',
                                      'Mauritânia' => 'Mauritânia',
                                      'Maurícia' => 'Maurícia',
                                      'Mayotte' => 'Mayotte',
                                      'Micronésia' => 'Micronésia',
                                      'Moldávia' => 'Moldávia',
                                      'Mongólia' => 'Mongólia',
                                      'Monserrate' => 'Monserrate',
                                      'Montenegro' => 'Montenegro',
                                      'Moçambique' => 'Moçambique',
                                      'Mundo' => 'Mundo',
                                      'México' => 'México',
                                      'Mónaco' => 'Mónaco',
                                      'Namíbia' => 'Namíbia',
                                      'Nauru' => 'Nauru',
                                      'Navassa Island' => 'Navassa Island',
                                      'Nepal' => 'Nepal',
                                      'Nicarágua' => 'Nicarágua',
                                      'Nigéria' => 'Nigéria',
                                      'Niue' => 'Niue',
                                      'Noruega' => 'Noruega',
                                      'Nova Caledónia' => 'Nova Caledónia',
                                      'Nova Zelândia' => 'Nova Zelândia',
                                      'Níger' => 'Níger',
                                      'Omã' => 'Omã',
                                      'Pacific Ocean' => 'Pacific Ocean',
                                      'Palau' => 'Palau',
                                      'Panamá' => 'Panamá',
                                      'Papua-Nova Guiné' => 'Papua-Nova Guiné',
                                      'Paquistão' => 'Paquistão',
                                      'Paracel Islands' => 'Paracel Islands',
                                      'Paraguai' => 'Paraguai',
                                      'Países Baixos' => 'Países Baixos',
                                      'Peru' => 'Peru',
                                      'Pitcairn' => 'Pitcairn',
                                      'Polinésia Francesa' => 'Polinésia Francesa',
                                      'Polónia' => 'Polónia',
                                      'Porto Rico' => 'Porto Rico',
                                      'Portugal' => 'Portugal',
                                      'Quirguizistão' => 'Quirguizistão',
                                      'Quiribáti' => 'Quiribáti',
                                      'Quénia' => 'Quénia',
                                      'Reino Unido' => 'Reino Unido',
                                      'República Centro-Africana' => 'República Centro-Africana',
                                      'República Checa' => 'República Checa',
                                      'República Dominicana' => 'República Dominicana',
                                      'Roménia' => 'Roménia',
                                      'Ruanda' => 'Ruanda',
                                      'Rússia' => 'Rússia',
                                      'Salvador' => 'Salvador',
                                      'Samoa Americana' => 'Samoa Americana',
                                      'Samoa' => 'Samoa',
                                      'Santa Helena' => 'Santa Helena',
                                      'Santa Lúcia' => 'Santa Lúcia',
                                      'Sara Ocidental' => 'Sara Ocidental',
                                      'Seicheles' => 'Seicheles',
                                      'Senegal' => 'Senegal',
                                      'Serra Leoa' => 'Serra Leoa',
                                      'Singapura' => 'Singapura',
                                      'Somália' => 'Somália',
                                      'Southern Ocean' => 'Southern Ocean',
                                      'Spratly Islands' => 'Spratly Islands',
                                      'Sri Lanca' => 'Sri Lanca',
                                      'Suazilândia' => 'Suazilândia',
                                      'Sudão' => 'Sudão',
                                      'Suriname' => 'Suriname',
                                      'Suécia' => 'Suécia',
                                      'Suíça' => 'Suíça',
                                      'Svalbard e Jan Mayen' => 'Svalbard e Jan Mayen',
                                      'São Cristóvão e Neves' => 'São Cristóvão e Neves',
                                      'São Marinho' => 'São Marinho',
                                      'São Pedro e Miquelon' => 'São Pedro e Miquelon',
                                      'São Tomé e Príncipe' => 'São Tomé e Príncipe',
                                      'São Vicente e Granadinas' => 'São Vicente e Granadinas',
                                      'Sérvia' => 'Sérvia',
                                      'Síria' => 'Síria',
                                      'Tailândia' => 'Tailândia',
                                      'Taiwan' => 'Taiwan',
                                      'Tajiquistão' => 'Tajiquistão',
                                      'Tanzânia' => 'Tanzânia',
                                      'Território Britânico do Oceano Índico' => 'Território Britânico do Oceano Índico',
                                      'Territórios Austrais Franceses' => 'Territórios Austrais Franceses',
                                      'Timor Leste' => 'Timor Leste',
                                      'Togo' => 'Togo',
                                      'Tokelau' => 'Tokelau',
                                      'Tonga' => 'Tonga',
                                      'Trindade e Tobago' => 'Trindade e Tobago',
                                      'Tunísia' => 'Tunísia',
                                      'Turquemenistão' => 'Turquemenistão',
                                      'Turquia' => 'Turquia',
                                      'Tuvalu' => 'Tuvalu',
                                      'Ucrânia' => 'Ucrânia',
                                      'Uganda' => 'Uganda',
                                      'União Europeia' => 'União Europeia',
                                      'Uruguai' => 'Uruguai',
                                      'Usbequistão' => 'Usbequistão',
                                      'Vanuatu' => 'Vanuatu',
                                      'Vaticano' => 'Vaticano',
                                      'Venezuela' => 'Venezuela',
                                      'Vietname' => 'Vietname',
                                      'Wake Island' => 'Wake Island',
                                      'Wallis e Futuna' => 'Wallis e Futuna',
                                      'West Bank' => 'West Bank',
                                      'Zimbabué' => 'Zimbabué',
                                      'Zâmbia' => 'Zâmbia',
                                      'África do Sul' => 'África do Sul',
                                      'Áustria' => 'Áustria',
                                      'Índia' => 'Índia'
                                      )
)
)); ?>


</div>
<br />
<?php
 echo $this->Form->submit('Registar', array(
  'class' => 'btn btn-success btn-block'
 ));
?>
<?php
  echo $this->Form->end();
?>

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

<?php echo $this->Html->script('bootstrap-timepicker.min'); ?>
<?php echo $this->Html->script('jquery.maskedinput.min'); ?>
<?php echo $this->Html->script('chosen.jquery.min'); ?>

<?php echo $this->Html->script('custom'); ?>


<script>
//formatar input de data
  jQuery("#date").mask("99-99-9999");

</script>

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
