<?php
    $drunkLevels = [
        2 => 'Buzzed',
        3 => 'Tipsy',
        4 => 'Drunk',
        5 => 'Really drunk',
        6 => 'Really, really drunk',
        7 => 'Blackout drunk',
        8 => 'Totally ripped',
        9 => 'Drunk as fuck',
        10 => 'Absolutely wrecked'
    ];
?>
<select id="drunk-level" class="form-control">
    <?php foreach ($drunkLevels as $drunkLevel => $label): ?>
        <option value="<?= $drunkLevel ?>">
            <?= $label ?>
        </option>
    <?php endforeach; ?>
</select>

<button id="enable-drunk" class="btn btn-default">
    Enable
</button>
<button id="disable-drunk" class="btn btn-default">
    Disable
</button>
