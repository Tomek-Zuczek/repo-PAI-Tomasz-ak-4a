    <div class="">
        <h4 id="maintext">Recenzja potrawy:</h4>

        <form action="./dodawanie_recenzji.php" method="POST">
            <input type="text" id="lokalizacja" name="lokalizacja" placeholder="Nazwa restauracji"><br>
            <input type="text" id="potrawa" name="potrawa" placeholder="Nazwa potrawy"><br>
            <textarea id="review" name="review"></textarea><br>

            <input type="submit" value="Opublikuj recenzję" id="submit">
        </form>

    </div>