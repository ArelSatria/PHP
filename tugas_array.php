<html>
    <head>
        <title>tugas php</title>
    

    <style>
        .f {
            width: 100px;
            background-color: crimson;
            float: left;
            margin: 2px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }


        .ff {
            width: 100px;
            background-color: orange;
            float: left;
            margin: 2px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }
    </style>
    </head>
    <body>
        <h1>BELAJAR ARRAY DI PHP</h1>
        <hr>

        <?php
        $hari = ["senin", "selasa","rabu","kamis","jumat","sabtu","minggu"];
        for(
            $i = 0;
            $i < count($hari);
            $i++
        ) {
            echo '<div class="f">' . $hari[$i] .  '</div>';
            echo '<div class="clear"></div>';
        }
        echo "<h5>Looping Dengan <br>
        <b>FOR</b></h5>";


        foreach ($hari as $h) {
            echo '<div class="ff">' . $h . '</div>';
        echo '<div class="clear"></div>';
        }
        echo "<h5>Looping dengan <br>
        <b>FOREACH</b></h5>";
        
        ?>

    </body>
</html>