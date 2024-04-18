<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billet de Voyage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .ticket {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
        }
        h1, h2 {
            text-align: center;
        }
        .details {
            margin-bottom: 20px;
        }
        .details p {
            margin: 5px 0;
        }
        .info {
            margin-bottom: 20px;
        }
        .info p {
            margin: 5px 0;
        }
        .footer {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <h1>Billet de Voyage</h1>
        <div class="details">
            <h2>Détails du Voyage</h2>
            <p><strong>Agence de Voyage :</strong> on the road</p>
            <p><strong>Destination :</strong>{{ $destination}} </p>
            <p><strong>Région :</strong>{{$region}} </p>
            <p><strong>Date de Départ :</strong>{{$date_depart}} </p>
            <p><strong>Date de Retour :</strong>{{$date_reteur}} </p>
        </div>
        <div class="info">
            <h2>Informations du Passager</h2>
            <p><strong>Nom :</strong>{{$nom}} </p>
            <p><strong>Email :</strong>{{$email}} </p>
        </div>
        <div class="footer">
            <p><strong>Prix Total :</strong>{{$prix}} DH</p>
            <p><em>Veuillez vous présenter à l'agence au moins 2 heures avant le départ. Assurez-vous d'avoir votre passeport ou CIN et toute autre documentation nécessaire pour voyager.</em></p>
        </div>
    </div>
</body>
</html>