<div class="form-inline">
    Interval:
    <select class="form-control" id="interval">
        <?php for ($n = 100; $n <= 1000; $n += 100): ?>
            <option value="<?= $n ?>"><?= $n ?>ms</option>
        <?php endfor; ?>
    </select>

    <br />

    Min adjustment:
    <select class="form-control" id="min-adjustment">
        <?php for ($n = 0; $n <= 5; $n++): ?>
            <option value="<?= $n ?>"><?= $n ?></option>
        <?php endfor; ?>
    </select>

    <br />

    Max adjustment:
    <select class="form-control" id="max-adjustment">
        <?php for ($n = 5; $n <= 10; $n++): ?>
            <option value="<?= $n ?>"><?= $n ?></option>
        <?php endfor; ?>
    </select>
</div>

<div id="current-color"></div>
