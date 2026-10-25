<?php
// proiect_vpn.php – One-page: Configurare tunel VPN IPsec pe routerele TP-Link ER605 V2
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Configurare VPN IPsec – TP-Link ER605 V2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f3;
            margin: 0;
            padding: 0;
        }
        header {
            background: #1f2d3d;
            color: #fff;
            padding: 25px;
            text-align: center;
        }
        h1 { margin: 0; }
        main {
            max-width: 900px;
            margin: 25px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }
        h2 {
            color: #1f2d3d;
            margin-top: 30px;
        }
        ul {
            line-height: 1.7;
            font-size: 16px;
        }
        .step-box {
            background: #f8f9fa;
            padding: 15px;
            border-left: 4px solid #3498db;
            margin: 20px 0;
            border-radius: 4px;
        }
        a.btn {
            display: inline-block;
            padding: 12px 18px;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 15px;
            font-size: 15px;
        }
        a.btn:hover {
            background: #217dbb;
        }
        footer {
            text-align: center;
            padding: 15px;
            font-size: 13px;
            color: #555;
        }
    </style>
</head>
<body>

<header>
    <h1>Configurare Tunel VPN IPsec pe TP-Link ER605 V2</h1>
</header>

<main>

    <div class="step-box">
        <p>Pentru a realiza un tunel VPN IPsec pe routerele TP-Link trebuie să urmați pașii de mai jos:</p>
    </div>

    <h2>Pașii necesari</h2>
    <ul>
        <li>Configurare multiWAN pentru ER605 V2</li>
        <li>Verificarea setărilor necesare pentru VPN IPsec pe router</li>
        <li>Conectarea a două rutere ER605 V2 între ele</li>
        <li>Configurarea setărilor IPsec VPN pe TL‑ER605 V2 (router pentru locația sediu)</li>
        <li>Configurarea setărilor IPsec VPN pe TL‑ER605 V2 (router pentru locația secundară)</li>
        <li>Verificarea IPsec SA</li>
    </ul>

    <h2>Documentație oficială</h2>
    <p>Pentru detalii suplimentare, consultați pagina oficială TP-Link:</p>

    <a class="btn" href="https://www.tp-link.com/ro/support/faq/380/" target="_blank">
        Deschide ghidul TP-Link
    </a>

</main>

<footer>
    &copy; <?php echo date('Y'); ?> – Configurare VPN IPsec TP-Link
</footer>

</body>
</html>

