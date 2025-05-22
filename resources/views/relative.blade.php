<!DOCTYPE html>
<html>
    <head>
        <title>Relative Lengths</title>
        <style>
            body{
                font-size: 20px;
                margin: 20px;
            }
            /* Relative Length Units */
            p.em { font-size: 2em; } /* 2 kali ukuran font parent */
            p.ex { font-size: 2ex; } /* Relatif ke x-height font */
            p.ch { font-size: 10ch; } /* Relatif ke lebar karakter "0" */
            p.percent { font-size: 150%; } /* 150% dari ukuran font parent */

            p.rem { font-size: 2rem; } /* Relatif ke root font-size */
            
            p.vw { font-size: 5vw; } /* 5% dari lebar viewport */
            p.vh { font-size: 5vh; } /* 5% dari tinggi viewport */
            p.vmin { font-size: 5vmin; } /* 5% dari dimensi terkecil viewport */
            p.vmax { font-size: 5vmax; } /* 5% dari dimensi terbesar viewport */
        </style>
    </head>
    <body>
        <p class="em">Font-size: 2em (relative to parent font size)</p>
        <p class="ex">Font-size: 2ex (relative to x-height of font)</p>
        <p class="ch">Font-size: 10ch (relative to width of "0")</p>
        <p class="percent">Font-size: 150% (relative to parent size)</p>
        <p class="rem">Font-size: 2rem (relative to root font-size)</p>
        <p class="vw">Font-size: 5vw (relative to 1% of viewport width)</p>
        <p class="vh">Font-size: 5vh (relative to 1% of viewport height)</p>
        <p class="vmin">Font-size: 5vmin (relative to smaller viewport dimension)</p>
        <p class="vmax">Font-size: 5vmax (relative to larger viewport dimension)</p>
    </body>
</html>