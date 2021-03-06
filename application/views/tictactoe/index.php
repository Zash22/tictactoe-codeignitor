<div class="container-fluid">
    <div class="row mainpanel">
        <div class="col-md-6 leftpanel">
            <div class="gameboard">
                <div class="panel-heading">
                    <h3 class="panel-title">Play Tic Tac Toe</h3>
                    <ul class="list-inline panel-actions hidden-md hidden-lg">
                        <li><a href="#" id="panel-fullscreen" role="button" title="Toggle fullscreen"><i
                                        class="glyphicon glyphicon-resize-full"></i></a></li>
                    </ul>
                </div>
                <div class="row" id="odd">
                    <div class="col-md-4 col-xs-4 box tleft" id="0"></div>
                    <div class="col-md-4 col-xs-4 box top" id="1"></div>
                    <div class="col-md-4 col-xs-4 box tright" id="2"></div>
                </div>
                <div class="row" id="even">
                    <div class="col-md-4 col-xs-4 box mleft" id="3"></div>
                    <div class="col-md-4 col-xs-4 box middle" id="4"></div>
                    <div class="col-md-4 col-xs-4 box mright" id="5"></div>
                </div>
                <div class="row" id="odd">
                    <div class="col-md-4 col-xs-4 box bleft" id="6"></div>
                    <div class="col-md-4 col-xs-4 box bottom" id="7"></div>
                    <div class="col-md-4 col-xs-4 box bright" id="8"></div>
                </div>
                <div class="row turn">
                    <div class="col-md-12 col-xs-12 footer">
                        <div id="turn" class="text-info"></div>
                        <div class="friend_computer">
                            <div class="computer">
                                <i class="fa fa-desktop fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="friend">
                                <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 hidden-xs  hidden-sm rightpanel color-swatch gray-lighter">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Last 5 matches scores</strong></div>
                <div class="panel-body">
                    <div class="row scoresheading">
                        <div class="col-md-3">Player 1</div>
                        <div class="col-md-3">Player 2</div>
                        <div class="col-md-3">Winner</div>
                        <div class="col-md-3">Date</div>
                    </div>
                    <div id="scores" class="scores text-nowrap">
                        <?php
                        foreach ($scores as $score) { ?>
                            <div class="row">
                                <div class="col-md-3"><?php echo $score['player1']; ?></div>
                                <div class="col-md-3"><?php echo $score['player2']; ?></div>
                                <div class="col-md-3"><?php echo $score['winner']; ?></div>
                                <div class="col-md-3"><?php echo $score['created_at']; ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>