<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Units Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        /* Absolute Length Units */
        p.cm { font-size: 2cm; } /* 2 cm */
        p.mm { font-size: 20mm; } /* 20 mm */
        p.in { font-size: 1in; } /* 1 inch */
        p.px { font-size: 60px; } /* 60 pixels */
        p.pt { font-size: 20pt; } /* 20 points */
        p.pc { font-size: 2pc; } /* 2 picas */
        
        /* Relative Length Units */
        p.em { font-size: 2em; } /* 2 kali ukuran font parent */
        p.ex { font-size: 2ex; } /* Relatif ke x-height font */
        p.ch { font-size: 10ch; } /* Relatif ke lebar karakter "0" */
        p.rem { font-size: 2rem; } /* Relatif ke root font-size */
        p.vw { font-size: 5vw; } /* 5% dari lebar viewport */
        p.vh { font-size: 5vh; } /* 5% dari tinggi viewport */
        p.vmin { font-size: 5vmin; } /* 5% dari dimensi terkecil viewport */
        p.vmax { font-size: 5vmax; } /* 5% dari dimensi terbesar viewport */
        p.percent { font-size: 150%; } /* 150% dari ukuran font parent */
    </style>
</head>
<body>
    <h2>CSS Units Example</h2>
    <p class="cm">Font-size: 2cm (centimeters)</p>
    <p class="mm">Font-size: 20mm (millimeters)</p>
    <p class="in">Font-size: 1in (inches)</p>
    <p class="px">Font-size: 60px (pixels)</p>
    <p class="pt">Font-size: 20pt (points)</p>
    <p class="pc">Font-size: 2pc (picas)</p>
    
    <h3>Relative Length Units</h3>
    <p class="em">Font-size: 2em (relative to parent font size)</p>
    <p class="ex">Font-size: 2ex (relative to x-height of font)</p>
    <p class="ch">Font-size: 10ch (relative to width of "0")</p>
    <p class="rem">Font-size: 2rem (relative to root font-size)</p>
    <p class="vw">Font-size: 5vw (relative to 1% of viewport width)</p>
    <p class="vh">Font-size: 5vh (relative to 1% of viewport height)</p>
    <p class="vmin">Font-size: 5vmin (relative to smaller viewport dimension)</p>
    <p class="vmax">Font-size: 5vmax (relative to larger viewport dimension)</p>
    <p class="percent">Font-size: 150% (relative to parent size)</p>
</body>
</html>
