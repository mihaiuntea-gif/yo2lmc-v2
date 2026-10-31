<?php
// proiect1.php – Pagina de prezentare a proiectului NAS cu Raspberry Pi
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Sistem de stocare local NAS (Network Attached Storage, cloud propriu) cu Raspberry Pi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f3;
            margin: 0;
            padding: 0;
        }
        header {
            background: #2c3e50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        h1 { margin: 0; }
        main {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }
        h2 {
            color: #2c3e50;
            margin-top: 30px;
        }
        ul {
            line-height: 1.6;
        }
        .box {
            background: #f8f9fa;
            padding: 15px;
            border-left: 4px solid #3498db;
            margin: 20px 0;
            border-radius: 4px;
        }
        footer {
            text-align: center;
            padding: 15px;
            font-size: 13px;
            color: #555;
        }
        a.btn {
            display: inline-block;
            padding: 10px 16px;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        a.btn:hover {
            background: #217dbb;
        }
    </style>
</head>
<body>

<header>
    <h1>Sistem de stocare local (NAS - Network Attached Storage) cu Raspberry PI 5</h1>
</header>

<main>
<a class="btn" href="https://www.raspberrypi.com/tutorials/nas-box-raspberry-pi-tutorial/" target="_blank">
        Tutorial oficial Raspberry Pi
    </a>

	
    <div class="box">
        <p>
            Unitatea de stocare în rețea (NAS) vă permite să salvați fișiere de pe computer și de pe dispozitivele mobile 
            pe un repository situat în rețeaua locală. Folosind Raspberry Pi, puteți conecta dispozitivele de stocare existente 
            – cum ar fi hard disk-uri externe portabile și unități flash USB – pentru a crea copii de rezervă securizate ale 
            tuturor fișierelor importante, accesibile de oriunde din lume (prin rețeaua VPN proprie).
        </p>
        <p>
            Practic vă creați propriul cloud pe care îl puteți accesa doar dvs. 
            (bineînțeles dacă respectați regulile de securitate ale rețelei dvs.)
			<img src="rasp02pi_NAS.jpg" alt="Raspberry PI NAS">
        </p>
    </div>

    <h2>Componente utilizate</h2>
    <ul>
        <li>Un single-board computer (SBC) Raspberry Pi 5 (4 GB RAM)</li>
        <li>Un card microSD (pentru sistemul de operare Raspbian OS – descărcat și instalat de pe site-ul furnizorului)</li>
        <li>Un cablu CAT6 (cu mufe RJ45)</li>
        <li>2 x HDD extern (500 GB + 1 TB) pe USB</li>
        <li>Un laptop sau orice PC (pentru configurare)</li>
        <li>Un flash USB (în caz că nu aveți cititor microSD la computer pentru instalarea Raspbian OS)</li>
    </ul>

    <h2>Instalare și configurare</h2>
    <p>
        Instalarea și configurarea sistemului de operare Raspbian OS și conectarea la rețeaua locală se realizează intuitiv 
        conform descrierii de mai jos sau urmati instructiunile pe pagina producătorului: descarcati Raspberry PI Imager si cu acest intrument pregatiti un USB flash sau un SD Card conform instructiunilor din timpul instalarii. 
    </p>
        <a class="btn" href="https://www.raspberrypi.com/software/" target="_blank">
        Instalare Raspbian OS
        </a>
    
	<h2>Raspberry PI 5  - prezentare</h2>
	
		<p>
        Instalarea și configurarea sistemului de operare Raspbian OS și conectarea la rețeaua locală se realizează intuitiv 
        conform descrierii de mai jos sau urmati instructiunile pe pagina producătorului: descarcati Raspberry PI Imager si cu acest intrument pregatiti un USB flash sau un SD Card conform instructiunilor din timpul instalarii. 
    </p>
	
		<h2>Instalare și configurare - folosind un microSD/Flash USB in <strong>Windows 11  24H2</strong> </h2>
	
	
		<p>
        Instalarea și configurarea sistemului de operare Raspbian OS și conectarea la rețeaua locală se realizează intuitiv 
        conform descrierii de mai jos sau urmati instructiunile pe pagina producătorului: descarcati Raspberry PI Imager si cu acest intrument pregatiti un USB flash sau un SD Card conform instructiunilor din timpul instalarii. 
		</p>
	
	<h2>Instalare și configurare - folosind un microSD/Flash USB in <strong>Ubuntu 24.04.4 LTS </strong></h2>
	
		<p>
        Instalarea și configurarea sistemului de operare Raspbian OS și conectarea la rețeaua locală se realizează intuitiv 
        conform descrierii de mai jos sau urmati instructiunile pe pagina producătorului: descarcati Raspberry PI Imager si cu acest intrument pregatiti un USB flash sau un SD Card conform instructiunilor din timpul instalarii. 
		</p>

</main>

<footer>
    &copy; <?php echo date('Y'); ?> – Proiect NAS cu Raspberry Pi
</footer>

</body>
</html>
