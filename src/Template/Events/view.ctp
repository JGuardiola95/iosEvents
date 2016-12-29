<section>
  <div class="events view large-12 medium-11 columns content">
      <h3><?= h($event->name) ?></h3>
      <table class="vertical-table">
          <tr>
              <th scope="row"><?= __('Name') ?></th>
              <td><?= h($event->name) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Location') ?></th>
              <td><?= h($event->location) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Id') ?></th>
              <td><?= $this->Number->format($event->id) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Starts At') ?></th>
              <td><?= h($event->starts_at) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Finishes At') ?></th>
              <td><?= h($event->finishes_at) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Created') ?></th>
              <td><?= h($event->created) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Modified') ?></th>
              <td><?= h($event->modified) ?></td>
          </tr>
      </table>
  </div>
</section>
