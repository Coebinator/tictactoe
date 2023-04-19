<?php
    $gridsize = 3;
?>
<head>
    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="./styles/styles.css" />
</head>
<body>
    <h1 class="header">Tic Tac Toe</h1>
    <table>
        <?php for($x = 0; $x < $gridsize; ++$x)
        {
            echo '<tr>';
            for($y = 0; $y < $gridsize; ++$y)
            { 
                $cell_id = $x * $gridsize + $y + 1;?>
                <td id="cell<?=$cell_id?>" class="cell" onclick="cellClicked(<?=$cell_id?>)"></td>;
                <?php
            } 
            echo '</tr>';
        } ?>
    </table>
    <div id="game-status">Player <span class="player">1</span>'s turn</div>
    <div>
        <button id="reset-button" type="button" onclick="resetGame()">Reset Game</button>
    </div>
    <script src="./scripts/tictactoe.js"></script>
</body>

