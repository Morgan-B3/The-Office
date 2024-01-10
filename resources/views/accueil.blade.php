<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
<h1>The Office</h1>
<a href="/salles">Accéder à la liste</a>

<h1>4 Salles aléatoires</h1>
<ul>
    @foreach($salles as $salle) 
   <li>{{ $salle->nom_salle }}</li> 
     @endforeach
</ul>
<h1>Liste des utilisateurs</h1>
    <ul>
        @foreach($utilisateurs as $utilisateur) 
            <li>{{ $utilisateur->nom_utilisateur }}</li> 
        @endforeach
    </ul>
</body>
</html>