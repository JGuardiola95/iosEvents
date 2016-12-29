<div class="events index large-12 medium-11 columns content">
    <h3><?= __('Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
      <h4 class="right"><?= $this->Html->link(__('Nuevo evento'), ['action' => 'add']) ?></h4>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('starts_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('finishes_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= h($event->name) ?></td>
                <td><?= h($event->location) ?></td>
                <td><?= h($event->starts_at) ?></td>
                <td><?= h($event->finishes_at) ?></td>
                <td><?= h($event->created) ?></td>
                <td><?= h($event->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $event->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $event->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
