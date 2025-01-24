<a href="?page=client&action=addClient">
    <br><button type="button">ADD</button>
</a>
<table>
    <tr>
        <td>ID</td>
        <td>NOM</td>
        <td>PRENOM</td>
        <td>EMAIL</td>
        <td>TELEPHONE</td>
        <td>ACTIONS</td>
    </tr>
    <?php foreach($clients as $client) { ?>
    <tr>
        <td><?= $client['id'] ?></td>
        <td><?= $client['nom'] ?></td>
        <td><?= $client['prenom'] ?></td>
        <td><?= $client['email'] ?></td>
        <td><?= $client['telephone'] ?></td>
        <td>
            <a href="?page=client&action=editClient&id=<?= $client['id'] ?>">EDIT</a>
            <a href="?page=client&action=deleteClient&id=<?= $client['id'] ?>">DELETE</a>
        </td>
    </tr>
    <?php } ?>

</table>