<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/students" method="post">
        @csrf
        <div>
            <input type="text" name="firstName" placeholder="firstName">
        </div>
        <div>
            <input type="text" name="lastName" placeholder="lastName">
        </div>
        <div>
            <input type="number" name="bornYear" placeholder="bornYear">
        </div>
        <div>
            <select name="master">
                <option value="loyer">Loyer</option>
                <option value="accauntant">Accauntant</option>
                <option value="developer">Developer</option>
            </select>
        </div>
        <textarea name="profile" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>
</body>

</html>
