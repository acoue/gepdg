
<table cellpadding="0" cellspacing="0" class="table table-striped">
    <thead>
        <tr align='center'>
            <th width='15%'>Discipline</th>
            <th width='20%'><?= $this->Paginator->sort('Nom') ?></th>
            <th width='20%'><?= $this->Paginator->sort('Prénom') ?></th>
            <th width='15%'><?= $this->Paginator->sort('Grade') ?></th>
            <th width='20%'><?= $this->Paginator->sort('Club') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($licencies as $licencie): ?>
        <tr>
            <td><?= h($licencie->discipline->name) ?></td>
            <td><?= h($licencie->prenom) ?></td>
            <td><?= h($licencie->nom) ?></td>
            <td><?= h($licencie->grade->name) ?></td>
            <td><?= h($licencie->club->name) ?></td>
            <td class="actions">
            <?= $this->Html->link(__('Ajouter'), ['action' => 'ajoutInscription',$passage_id, $licencie->id,$grade])?>
          	</td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>