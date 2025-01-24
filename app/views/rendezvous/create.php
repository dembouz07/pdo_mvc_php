<h1>Ajouter un Rendez-Vous</h1>
<form action="index.php?page=rendezvous&action=saveRendezVous" method="post">
    <label for="">DATE</label>
    <input type="date" name="date" id="date"><br><br>
    <label for="">HEURE</label>
    <input type="time" name="heure" id="heure"><br><br>
    <label for="">DESCRIPTION</label>
    <input type="text" name="description" id="description"><br><br>
    <label for="">CLIENT</label>
    <select id="idclient" class="form-select" name="idclient">
        <?php while ($client = $clients->fetch(PDO::FETCH_ASSOC)) : ?>
            <option value="<?= $client['id'] ?>"><?= $client['prenom'].' '.$client['nom'] ?></option>
        <?php endwhile; ?>
    </select>
    <br><br><button type="submit">SAVE</button>
</form>
