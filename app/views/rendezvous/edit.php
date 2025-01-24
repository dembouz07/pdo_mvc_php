<h1>Modifier un Rendez-Vous</h1>
<form action="index.php?page=rendezvous&action=updateRendezVous" method="post">
    <label for="">ID</label>
    <input type="text" name="id" id="date" value="<?= ($rendezVous['id']) ?>" readOnly><br><br>
    <label for="">DATE</label>
    <input type="date" name="date" id="date" value="<?= ($rendezVous['daterv']) ?>"><br><br>
    <label for="">HEURE</label>
    <input type="time" name="heure" id="heure" value="<?= ($rendezVous['heure']) ?>"><br><br>
    <label for="">DESCRIPTION</label>
    <input type="text" name="description" id="description" value="<?= ($rendezVous['descriptionrv']) ?>"><br><br>
    <label for="">CLIENT</label>
    <select id="idclient" class="form-select" name="idclient">
    <option value="<?= $rendezVous['idclient'] ?>"><?= $rendezVous['prenom'].' '.$rendezVous['nom'] ?></option>
        <?php while ($client = $clients->fetch(PDO::FETCH_ASSOC)) : ?>
            <option value="<?= $client['id'] ?>"><?= $client['prenom'].' '.$client['nom'] ?></option>
        <?php endwhile; ?>
    </select>
    <br><br><button type="submit">SAVE</button>
</form>
