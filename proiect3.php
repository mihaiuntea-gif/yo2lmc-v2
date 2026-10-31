<?php
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurare Azure App Service</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }

        h1 {
            color: #0078D4;
            text-align: center;
        }

        h2 {
            color: #005A9E;
            margin-top: 30px;
        }

        .step {
            background: #f8f9fb;
            border-left: 5px solid #0078D4;
            padding: 15px;
            margin-bottom: 15px;
        }

        code {
            background: #eee;
            padding: 2px 5px;
            border-radius: 4px;
        }

        .note {
            background: #fff3cd;
            border-left: 5px solid #ffc107;
            padding: 15px;
            margin-top: 20px;
        }

        .success {
            background: #d4edda;
            border-left: 5px solid #28a745;
            padding: 15px;
            margin-top: 20px;
        }

        a {
            color: #0078D4;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="container">

    <h1>Configurare Website în Azure App Services</h1>

    <p>
        Acest ghid descrie pașii necesari pentru publicarea unei aplicații web PHP,
        Node.js sau HTML static folosind Microsoft Azure App Services.
    </p>

    <h2>Pasul 1 - Crearea unui Resource Group</h2>

    <div class="step">
        <ol>
            <li>Autentifică-te în Azure Portal.</li>
            <li>Deschide <strong>Resource Groups</strong>.</li>
            <li>Apasă <strong>Create</strong>.</li>
            <li>Alege Subscription-ul dorit.</li>
            <li>Introdu un nume (ex: <code>rg-website-prod</code>).</li>
            <li>Selectează regiunea.</li>
            <li>Apasă <strong>Review + Create</strong>.</li>
        </ol>
    </div>

    <h2>Pasul 2 - Crearea App Service Plan</h2>

    <div class="step">
        <ol>
            <li>Accesează <strong>App Service Plans</strong>.</li>
            <li>Selectează <strong>Create</strong>.</li>
            <li>Alege Resource Group-ul creat anterior.</li>
            <li>Definește un nume pentru plan.</li>
            <li>Selectează Linux sau Windows.</li>
            <li>Alege nivelul de preț (B1, P1V3 etc.).</li>
        </ol>
    </div>

    <h2>Pasul 3 - Crearea Azure Web App</h2>

    <div class="step">
        <ol>
            <li>Accesează <strong>App Services</strong>.</li>
            <li>Apasă <strong>Create Web App</strong>.</li>
            <li>Introdu un nume unic pentru site.</li>
            <li>Selectează Runtime Stack:
                <ul>
                    <li>PHP 8.x</li>
                    <li>Node.js 20 LTS</li>
                    <li>.NET 8</li>
                </ul>
            </li>
            <li>Selectează App Service Plan-ul creat anterior.</li>
            <li>Finalizează crearea.</li>
        </ol>
    </div>

    <h2>Pasul 4 - Configurarea GitHub Deployment</h2>

    <div class="step">
        <ol>
            <li>Intră în Web App.</li>
            <li>Deployment Center.</li>
            <li>Selectează GitHub.</li>
            <li>Autentifică-te.</li>
            <li>Selectează:
                <ul>
                    <li>Repository</li>
                    <li>Branch (main)</li>
                </ul>
            </li>
            <li>Azure va crea automat workflow-ul GitHub Actions.</li>
        </ol>
    </div>

    <h2>Pasul 5 - Configurarea Custom Domain</h2>

    <div class="step">
        <ol>
            <li>Accesează secțiunea <strong>Custom Domains</strong>.</li>
            <li>Adaugă domeniul propriu.</li>
            <li>Configurează în DNS:
                <ul>
                    <li>Record A</li>
                    <li>sau CNAME</li>
                </ul>
            </li>
            <li>Validează domeniul.</li>
        </ol>
    </div>

    <h2>Pasul 6 - Activarea HTTPS</h2>

    <div class="step">
        <ol>
            <li>Deschide TLS/SSL Settings.</li>
            <li>Activează certificatul gratuit Azure.</li>
            <li>Activează opțiunea:
                <code>HTTPS Only</code>
            </li>
        </ol>
    </div>

    <h2>Pasul 7 - Publicarea Aplicației</h2>

    <div class="step">
        <p>Din terminal:</p>

<pre>
git add .
git commit -m "Initial deployment"
git push origin main
</pre>

        <p>
            GitHub Actions va declanșa automat procesul de build și deployment.
        </p>
    </div>

    <div class="note">
        <strong>Recomandare:</strong><br>
        Pentru medii de producție utilizați SKU minim B1 și activați
        Application Insights pentru monitorizare.
    </div>

    <div class="success">
        <strong>Website-ul va fi disponibil la:</strong><br>
        https://nume-site.azurewebsites.net
    </div>

</div>

</body>
</html>