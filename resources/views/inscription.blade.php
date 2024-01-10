<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="" method="post">

        @csrf

        <div>

            <label for="email">Adresse email :</label>
            <input type="email" placeholder="michael@scott.fr" name="email" id="email" required value="{{old('email')}}">
            @error ('email')
            <div>{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" value="{{old('password')}}" required>
            @error ('password')
            <div>{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="password_confirm">Confirmation du mot de passe :</label>
            <input type="password" name="password_confirm" id="password_confirm" value="{{old('password_confirm')}}" required>
            @error ('password_confirm')
            <div>{{$message}}</div>
            @enderror
        </div>
        <button>Valider</button>
    </form>
</body>
</html>