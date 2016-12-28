<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attendee'), ['action' => 'edit', $attendee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attendee'), ['action' => 'delete', $attendee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attendees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attendees view large-9 medium-8 columns content">
    <h3><?= h($attendee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $attendee->has('user') ? $this->Html->link($attendee->user->name, ['controller' => 'Users', 'action' => 'view', $attendee->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $attendee->has('event') ? $this->Html->link($attendee->event->name, ['controller' => 'Events', 'action' => 'view', $attendee->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attendee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($attendee->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($attendee->updated) ?></td>
        </tr>
    </table>
</div>
