<?php
/**
 * @copyright Copyright (c) 2016 Joas Schilling <coding@schilljs.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/** @var \OCP\IL10N $l */
?>

<form id="retention" class="section" data-systemtag-id="">
	<h2 class="inlineblock"><?php p($l->t('File retention')); ?></h2>
	<a target="_blank" rel="noreferrer" class="icon-info svg"
	   title="<?php p($l->t('Open documentation'));?>"
	   href="<?php p(link_to_docs('admin-files-retention')); ?>">
	</a>

	<p class="settings-hint"><?php p($l->t('Define if files tagged with a specific tag should be deleted automatically after some time. This is useful for confidential documents.')); ?></p>

	<table>
		<thead class="hidden" id="retention-list-header">
			<th><?php p($l->t('Tag')); ?></th>
			<th><?php p($l->t('Retention')); ?></th>
			<th><?php p($l->t('Time')); ?></th>
			<th><?php p($l->t('After')); ?></th>
			<th><?php p($l->t('Active')); ?></th>
			<th></th>
		</thead>
		<tbody id="retention-list">

		</tbody>
	</table>

	<input type="hidden" name="retention_tag" id="retention_tag" placeholder="<?php p($l->t('Select tag…')); ?>" style="width: 400px;" />
	<br>
	<input type="number" id="retention_amount" name="retention_amount" value="10" style="width: 200px;">

	<select id="retention_unit">
		<option value="0"><?php p($l->t('Days')); ?></option>
		<option value="1"><?php p($l->t('Weeks')); ?></option>
		<option value="2"><?php p($l->t('Months')); ?></option>
		<option value="3"><?php p($l->t('Years')); ?></option>
	</select>

	<?php p($l->t('after')); ?>

	<select id="retention_after">
		<option value="0"><?php p($l->t('Creation')); ?></option>
		<option value="1"><?php p($l->t('Last modification')); ?></option>
	</select>

	<input type="button" id="retention_submit" value="<?php p($l->t('Create')); ?>" disabled>

	<p>
		<input type="checkbox" id="retention_notify" class="checkbox" />
		<label for="retention_notify">
			<?php p($l->t('Notify users a day before retention will delete a file')); ?>
		</label>
	</p>
</form>
