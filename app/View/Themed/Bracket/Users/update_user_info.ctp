	<div class="contentpanel">

		<!--<?php echo $this->Session->flash(); ?>-->

		<div class="panel panel-default">
			<div class="row">
				<?php echo $this->Form->create('User', array(
					'type' => 'file',
					'inputDefaults' => array(
						'div' => 'form-group',
						'label' => array(
							'class' => 'col col-md-3 control-label'
							),
						'wrapInput' => 'col col-md-9',
						'class' => 'form-control'
						),
					'class' => 'well form-horizontal'
					)); ?>

					<div class="col-md-6">

						<div class="panel-heading">

							<h4 class="panel-title">Dados de Conta</h4>
							<p>Utilize esta página para editar os dados da sua conta.</p>
						</div>
						<div class="panel-body">
							<?php echo $this->Form->input('id', array(
								'type' => 'hidden'
								)); ?>

							
							<?php echo $this->Form->input('first_name', array(
								'type' => 'hidden'
								)); ?>
							<?php echo $this->Form->input('last_name', array(
								'type' => 'hidden'
								)); ?>

							<?php echo $this->Form->input('username', array(
									'type' => 'hidden'
									)); ?>

							<?php echo $this->Form->input('email', array(
								'type' => 'hidden'
								)); ?>
								
							<?php echo $this->Form->input('password', array(
								'type' => 'hidden'
								)); ?>

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

	<?php echo $this->Form->input('title', array(
		'placeholder' => 'Título'
		)); ?>
	<?php echo $this->Form->input('company', array(
		'placeholder' => 'Empresa'
		)); ?>
	<?php echo $this->Form->input('phone', array(
		'placeholder' => 'Telefone'
		)); ?>


	</div>



	</div><!-- col-md-6 -->

	<div class="col-md-6">


		
		<?php echo $this->Form->input('User.picture', array('type' => 'file')); ?>
		<?php echo $this->Form->input('User.photo_dir', array('type' => 'hidden')); ?>

		<?php echo $this->Form->input('website', array(
			'placeholder' => 'Website'
			)); ?>
		<?php echo $this->Form->input('facebook', array(
			'placeholder' => 'Facebook'
			)); ?>
		<?php echo $this->Form->input('google', array(
			'placeholder' => 'Google'
			)); ?>
		<?php echo $this->Form->input('twitter', array(
			'placeholder' => 'Twitter'
			)); ?>
		
			<?php echo $this->Form->Submit(__('Submit', true));?>
		</div> <!-- col-md-6 -->

	</div><!-- row -->
	</div><!--panel-default-->
	</div><!--contentpanel-->


	<?php echo $this->Html->script('jquery.maskedinput.min'); ?>
	<script>

		jQuery("#phone").mask("(999) 9999999");
	</script>