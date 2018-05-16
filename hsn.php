<?php

    /* SOURCE CREATED BY HASANATİLAN
	*  İNSTAGRAM.COM/NETMRHASAN
	*  Software Engineer
	*  contact: nepix@icloud.com
	*  skype:   skytime1234
	*  telegram: ch1x0r
	*  www.hasanatilan.com          
    */
    
    $config = array('textfield' => [], 'sourcequery' => []);
	
    //Teamspeak IP
    $config['teamspeak']['ip'] = 'localhost';
    //Teamspeak Query Port
    $config['teamspeak']['queryport'] = '10011';
    //Teamspeak Port
    $config['teamspeak']['serverport'] = '9987'; 
    //Teamspeak Query İsmi
    $config['teamspeak']['loginname'] = 'serveradmin';
    //Teamspeak Query Şifresi
    $config['teamspeak']['loginpass'] = '3krYsdhV5';
    
    //Arka plan yolu
    $config['backgroundimage'] = 'banner-layout.png';

    //Banner Yenilenme Süresi
    $config['syncintervall'] = 10;
    
    
    $config['sqenable'] = false; // DOKUNMA
    //Yazı Fontları
    $config['sqlistfont'] = 'font/couture.otf';

    

    /*
		--- BOŞ AYAR ---
   
        $config['textfield'][] = [
            'text' => '', // Yazı gelecek
            'xpos' => '', // Gelecek Yerin Kordinatları
            'ypos' => '', // Gelecek Yerin Kordinatları
            'fontsize' => '', // Yazı Boyutu
            'fontfile' => 'font/couture.otf', // Yazı Fontu
            'color' => '', // Yazı Rengi
        ];
        
    */
    
    
    $config['textfield'][] = [
        'text' => 'DATE',
        'xpos' => '207',
        'ypos' => '232',
        'fontsize' => '11',
        'fontfile' => 'font/couture.otf',
        'color' => '#ffffff',
    ];
    
    $config['textfield'][] = [
        'text' => '%date%',
        'xpos' => '197',
        'ypos' => '249',
        'fontsize' => '14',
        'fontfile' => 'font/akrobat.otf',
        'color' => '#989494',
    ];
	
	    $config['textfield'][] = [
        'text' => 'PING',
        'xpos' => '305',
        'ypos' => '232',
        'fontsize' => '11',
        'fontfile' => 'font/couture.otf',
        'color' => '#ffffff',
    ];
    
    $config['textfield'][] = [
        'text' => '%ping_floored% MS',
        'xpos' => '305',
        'ypos' => '249',
        'fontsize' => '13',
        'fontfile' => 'font/akrobat.otf',
        'color' => '#989494',
    ];
    
    $config['textfield'][] = [
        'text' => 'ONLINE ADMIN',
        'xpos' => '375',
        'ypos' => '232',
        'fontsize' => '11',
        'fontfile' => 'font/couture.otf',
        'color' => '#ffffff',
    ];
    
    $config['textfield'][] = [
        'text' => '%groupcount[2]%', // 2 Yazan yere yetki ID 'si gelecek
        'xpos' => '420',
        'ypos' => '249',
        'fontsize' => '13',
        'fontfile' => 'font/akrobat.otf',
        'color' => '#989494',
    ];
    
    $config['textfield'][] = [
        'text' => 'ONLINE',
        'xpos' => '500',
        'ypos' => '232',
        'fontsize' => '11',
        'fontfile' => 'font/couture.otf',
        'color' => '#ffffff',
    ];
    
    $config['textfield'][] = [
        'text' => '%realclients%/%maxclients%',
        'xpos' => '509',
        'ypos' => '249',
        'fontsize' => '13',
        'fontfile' => 'font/akrobat.otf',
        'color' => '#989494',
    ];
    

    $config['textfield'][] = [
        'text' => 'Hoşgeldin > %nickname%',
        'xpos' => '9',
        'ypos' => '20',
        'fontsize' => '13',
        'fontfile' => 'font/akrobat.otf',
        'color' => '#ffffff',
    ];
    