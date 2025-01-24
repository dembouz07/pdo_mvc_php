<h1>Modifier un Client</h1>
<form action="?page=client&action=updateClient" method="post">
    <label for="">ID</label>
    <input type="text" name="id" id="" value="<?= ($client['id']) ?>" readOnly><br><br>
    <label for="">NOM</label>
    <input type="text" name="nom" id="" value="<?= ($client['nom']) ?>"><br><br>
    <label for="">PRENOM</label>
    <input type="text" name="prenom" id="" value="<?= ($client['prenom']) ?>"><br><br>
    <label for="">EMAIL</label>
    <input type="email" name="email" id="" value="<?= ($client['email']) ?>"><br><br>
    <label for="">TELEPHONE</label>
    <input type="text" name="telephone" id="" value="<?= ($client['telephone']) ?>"><br><br>
    <button type="submit">SAVE</button>
</form>