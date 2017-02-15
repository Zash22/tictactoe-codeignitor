<div class="container-fluid">
    <div class="row mainpanel">
        <div class="col-md-12 color-swatch gray-lighter">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Past match results</strong></div>
                <div class="panel-body">
                    <div class="row scoresheading">
                        <div class="col-md-2">Player 1</div>
                        <div class="col-md-2">Player 2</div>
                        <div class="col-md-2">Winner</div>
                        <div class="col-md-6">Date</div>
                    </div>
                    <div id="scores" class="scores text-nowrap">
                        <?php
                        foreach ($scores as $score) { ?>
                            <div class="row">
                                <div class="col-md-2"><?php echo $score['player1']; ?></div>
                                <div class="col-md-2"><?php echo $score['player2']; ?></div>
                                <div class="col-md-2"><?php echo $score['winner']; ?></div>
                                <div class="col-md-6"><?php echo $score['created_at']; ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>