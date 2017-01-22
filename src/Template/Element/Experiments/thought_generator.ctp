<div class="row">
    <section class="col-sm-4">
        <h2>
            Controls
        </h2>
        <div class="well">
            <div class="form-group row">
                <div class="col-sm-4">
                    Words per second:
                </div>
                <div class="col-sm-6">
                    <select id="speed" class="form-control">
                        <option value="0.5">
                            0.5
                        </option>
                        <?php for ($n = 1; $n <= 10; $n++): ?>
                            <option value="<?= $n ?>" <?= $n == 2 ? 'selected' : '' ?>>
                                <?= $n ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    Block length:
                </div>
                <div class="col-sm-6">
                    <select id="blockLength" class="form-control">
                        <?php for ($n = 1; $n <= 5; $n++): ?>
                            <option value="<?= $n ?>" <?= $n == 2 ? 'selected' : '' ?>>
                                <?= $n ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    Limit:
                </div>
                <div class="col-sm-6">
                    <select id="limit" class="form-control">
                        <option value="">
                            None
                        </option>
                        <?php foreach ([100, 250, 500, 1000] as $wordCount): ?>
                            <option value="<?= $wordCount ?>">
                                <?= $wordCount ?> words
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <br />
            <button id="stop" class="btn btn-default">Stop</button>
            <button id="start" class="btn btn-default">Start</button>
        </div>
    </section>

    <section class="col-sm-4 col-sm-offset-1">
        <h2>Thinkin':</h2>
        <div class="well">
            <p>
                Entropy score: <span id="entropyScore">0</span>
            </p>
            <div id="markovOptions"></div>
        </div>
    </section>
</div>

<section>
    <h2>Results:</h2>
    <p id="markovResults" class="well"></p>
</section>
