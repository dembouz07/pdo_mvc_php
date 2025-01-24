<a href="?page=rendezvous&action=addRendezVous">
    <br><button type="button">ADD</button>
</a>
<table>
    <tr>
        <td>ID</td>
        <td>DATE</td>
        <td>HEURE</td>
        <td>DESCRIPTION</td>
        <td>CLIENT</td>
        <td>ACTIONS</td>
    </tr>
    <?php foreach($rendezVous as $rv) { ?>
    <tr>
        <td><?= $rv['id'] ?></td>
        <td><?= $rv['daterv'] ?></td>
        <td><?= $rv['heure'] ?></td>
        <td><?= $rv['descriptionrv'] ?></td>
        <td><?= $rv['prenom'].' '.$rv['nom'] ?></td>
        <td>
            <a href="?page=rendezvous&action=editRendezVous&id=<?= $rv['id'] ?>">EDIT</a>
            <a href="?page=rendezvous&action=deleteRendezVous&id=<?= $rv['id'] ?>">DELETE</a>
        </td>
    </tr>
    <?php } ?>

</table>