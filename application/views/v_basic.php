<!doctype html>

<head>

	<!-- Basics -->
	<link href="/media/css/img/favicon.ico" rel="icon" type="image/x-icon" />
              
        <link href="/media/css/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        
	<meta charset="utf-8">
	
        <title><?=$site_description?>&nbsp|&nbsp<?=$title?></title>
	
	<!-- Mobile -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
        
            <? foreach ($style as $file_style) { ?>

                <?= HTML::style($file_style) ?>

            <? } ?>
        
        <!-- Scripts -->
        
            <? foreach ($scripts as $file_script) { ?>

                <?= HTML::script($file_script) ?>

            <? } ?>
        

        
</head>

	<!-- Main HTML -->
	
<body>

        <section id="gread">
            
            <header id="main">
               
                <div id="logo">
                    
                </div>
                
                <div id="enter">
                
                    <?=Form::open('', array('method' => 'POST'))?>
                    
                        <?=Form::input('login', 'Логин', array(
                            'onblur' => "if (this.value == '') {this.value = 'Логин';}",
                            'onfocus' => "if (this.value == 'Логин') {this.value = '';}",
                                'class' => 'einput'))?></br>
                            
                        <?=Form::input('passsword', 'Пароль', array('type' => 'password',
                            'onblur' => "if (this.value == '') {this.value = 'Пароль';}",
                            'onfocus' => "if (this.value == 'Пароль') {this.value = '';}",
                            'class' => 'einput'))?></br>
                            
                        <?=Form::submit('enter', 'Вход', array(
                            'class' => 'esubmit'
                        ))?>
                        
                        <?=HTML::anchor('/registration', 'Регистрация')?>
                    
                    <?=Form::close()?>
                    
                </div>
                
            </header>
            
            <section id="mainships">
                
            </section>
            
	</section>
</body>

</html>
	
	
	
	
	
		
	