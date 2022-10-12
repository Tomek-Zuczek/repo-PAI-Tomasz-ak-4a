<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./forms_ans.php" method="POST">
    <p>Logowanie użytkownika</p>
        <p>Login</p>
        <p><input type="text" name="login"></p>
        <br>
        Hasło
        <p><input type="password" name="haslo"></p>
        <br>
        <p><input type="checkbox" name="dane" value="Zapamiętaj mnie" />Zapamiętaj mnie</p>        
        <input type="submit" />
        <br><br><br>

        <p>Pseudonim</p>
        <input type="text" name="Pseudonim">
        <br>
        <p>Komentarz</p>
        <textarea name="Komentarz"></textarea>
        <br><br><br>

        <p>Czy jesteś człowiekem?</p>
        <select name="opcje">
            <option>Tak</option>
            <option>Nie</option>
            <option>Nie wiem</option>
        </select>
        <br><br>

        <p>Jestem uczniem na roku:</p>
        <input type="radio" name="radio[]" value="1">1
        <input type="radio" name="radio[]" value="2">2
        <input type="radio" name="radio[]" value="3">3
        <br><br>

        <p>Chciałbym się nauczyć:</p>
        <input type="checkbox" name="check[]" value="Życia"/>Życia
        <input type="checkbox" name="check[]" value="Robienia masła"/>Robienia masła
        <input type="checkbox" name="check[]" value="Programowania"/>Programowania
        

    </form>
    </body>