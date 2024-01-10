<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




    <form action="/ajouter" method="POST">
        @csrf 
    
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
    
        <label for="numero">Numéro :</label>
        <input type="text" id="numero" name="numero"><br>
    
        <button type="submit">Ajouter</button>
    </form>
    
</body>
</html>