@extends('layouts.app')

@section('content')
    <style type="text/css">
        body {
            margin: 0;
            overflow: hidden;
            background: #333;
        }

        h1 {
            color: #000;
            font-size: 50px;
            margin: 0px auto;
            text-align: center;
            text-transform: uppercase;
            font-family: Orbitron;
        }

        .neon {
            color: #FFFFFF;
            text-shadow: 0 0 5px #FF0000, 0 0 10px#FF0000, 0 0 30px #FF0000, 0 0 45px #FF0000, 0 0 60px #FF0000;
        }

        .matrix {
            color: #FFFFFF;
            font-family: Arial, Courier, Monotype;
            font-size: 15pt;
            text-align: center;
            width: 10px;
            padding: 0px;
            margin: 0px;
        }

        .jokitz1 {
            text-align: center;
        }

        .jokitz2 {
            text-align: center;
            font-family: Courier;
        }

        #bg-video {
            position: fixed;
            top: 0;
            left: 0;
            object-fit:
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>

    <body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>

        {{-- gambar disini  --}}

        <video id="bg-video" autoplay muted loop>
            <source src="{{ asset('images/background.mp4') }}" type="video/mp4">
            <!-- Tambahkan sumber video tambahan di bawah sesuai kebutuhan -->
        </video>

        <h1 class="ml-5 mt-14">We Are AnonGhost Indonesian !</h1>
        <div id="matrix" class="auto-style8 hidden">.</div>

        <script type="text/javascript">
            <!--
            var message = "Ooooooppppssssss....! Sorry";

            ///////////////////////////////////

            function clickIE() {
                if (document.all) {
                    (message);
                    return false;
                }
            }

            function clickNS(e) {
                if

                (document.layers || (document.getElementById && !document.all)) {

                    if (e.which == 2 || e.which == 3) {
                        (message);
                        return false;
                    }
                }
            }

            if (document.layers)

            {
                document.captureEvents(Event.MOUSEDOWN);
                document.onmousedown = clickNS;
            } else {
                document.onmouseup = clickNS;
                document.oncontextmenu = clickIE;
            }

            document.oncontextmenu = new Function("return false")

            // 
            -->

        </script>

        <script type="text/javascript" language="javascript">
            var rows = 1; // must be an odd number

            var speed = 10; // lower is faster

            var reveal = 2; // between 0 and 2 only. The higher, the faster the word appears

            var effectalign = "center" //enter "center" to center it.

            var w3c = document.getElementById && !window.opera;;

            var ie45 = document.all && !window.opera;

            var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;

            var m_coch = new Array();

            var m_copo = new Array();

            window.onload = function() {

                if (!w3c && !ie45) return

                var matrix = (w3c) ? document.getElementById("matrix") : document.all["matrix"];

                ma_txt = (w3c) ? matrix.firstChild.nodeValue : matrix.innerHTML;

                ma_txt = " " + ma_txt + " ";

                columns = ma_txt.length;

                if (w3c) {

                    while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);

                    ma_tab = document.createElement("table");

                    ma_tab.setAttribute("border", 0);

                    ma_tab.setAttribute("align", effectalign);

                    ma_tab.style.backgroundColor = "#FFF";

                    ma_bod = document.createElement("tbody");

                    for (x = 0; x < rows; x++) {

                        ma_row = document.createElement("tr");

                        for (y = 0; y < columns; y++) {

                            matemp = document.createElement("td");

                            matemp.setAttribute("id", "Mx" + x + "y" + y);

                            matemp.className = "matrix";

                            matemp.appendChild(document.createTextNode(String.fromCharCode(160)));

                            ma_row.appendChild(matemp);

                        }

                        ma_bod.appendChild(ma_row);

                    }

                    ma_tab.appendChild(ma_bod);

                    matrix.appendChild(ma_tab);

                } else {

                    ma_tab = '<ta' + 'ble align="' + effectalign + '" border="0" style="background-color:#000000">';

                    for (var x = 0; x < rows; x++) {

                        ma_tab += '<t' + 'r>';

                        for (var y = 0; y < columns; y++) {

                            ma_tab += '<t' + 'd class="matrix" id="Mx' + x + 'y' + y + '"> </' + 'td>';

                        }

                        ma_tab += '</' + 'tr>';

                    }

                    ma_tab += '</' + 'table>';

                    matrix.innerHTML = ma_tab;

                }

                ma_cho = ma_txt;

                for (x = 0; x < columns; x++) {

                    ma_cho += String.fromCharCode(32 + Math.floor(Math.random() * 94));

                    m_copo[x] = 0;

                }

                ma_bod = setInterval("mytricks()", speed);

            }



            function mytricks() {

                x = 0;

                for (y = 0; y < columns; y++) {

                    x = x + (m_copo[y] == 100);

                    ma_row = m_copo[y] % 100;

                    if (ma_row && m_copo[y] < 100) {

                        if (ma_row < rows + 1) {

                            if (w3c) {

                                matemp = document.getElementById("Mx" + (ma_row - 1) + "y" + y);

                                matemp.firstChild.nodeValue = m_coch[y];

                            } else {

                                matemp = document.all["Mx" + (ma_row - 1) + "y" + y];

                                matemp.innerHTML = m_coch[y];

                            }

                            matemp.style.color = "#FF0000";

                            matemp.style.fontWeight = "bold";

                        }

                        if (ma_row > 1 && ma_row < rows + 2) {

                            matemp = (w3c) ? document.getElementById("Mx" + (ma_row - 2) + "y" + y) : document.all["Mx" + (
                                ma_row - 2) + "y" + y];

                            matemp.style.fontWeight = "normal";

                            matemp.style.color = "#FF0000";

                        }

                        if (ma_row > 2) {

                            matemp = (w3c) ? document.getElementById("Mx" + (ma_row - 3) + "y" + y) : document.all["Mx" + (
                                ma_row - 3) + "y" + y];

                            matemp.style.color = "#FF0000";

                        }

                        if (ma_row < Math.floor(rows / 2) + 1) m_copo[y]++;

                        else if (ma_row == Math.floor(rows / 2) + 1 && m_coch[y] == ma_txt.charAt(y)) zoomer(y);

                        else if (ma_row < rows + 2) m_copo[y]++;

                        else if (m_copo[y] < 100) m_copo[y] = 0;

                    } else if (Math.random() > 0.9 && m_copo[y] < 100) {

                        m_coch[y] = ma_cho.charAt(Math.floor(Math.random() * ma_cho.length));

                        m_copo[y]++;

                    }

                }

                if (x == columns) clearInterval(ma_bod);

            }



            function zoomer(ycol) {

                var mtmp, mtem, ytmp;

                if (m_copo[ycol] == Math.floor(rows / 2) + 1) {

                    for (ytmp = 0; ytmp < rows; ytmp++) {

                        if (w3c) {

                            mtmp = document.getElementById("Mx" + ytmp + "y" + ycol);

                            mtmp.firstChild.nodeValue = m_coch[ycol];

                        } else {

                            mtmp = document.all["Mx" + ytmp + "y" + ycol];

                            mtmp.innerHTML = m_coch[ycol];

                        }

                        mtmp.style.color = "#FF0000";

                        mtmp.style.fontWeight = "bold";

                    }

                    if (Math.random() < reveal) {

                        mtmp = ma_cho.indexOf(ma_txt.charAt(ycol));

                        ma_cho = ma_cho.substring(0, mtmp) + ma_cho.substring(mtmp + 1, ma_cho.length);

                    }

                    if (Math.random() < reveal - 1) ma_cho = ma_cho.substring(0, ma_cho.length - 1);

                    m_copo[ycol] += 199;

                    setTimeout("zoomer(" + ycol + ")", speed);

                } else if (m_copo[ycol] > 200) {

                    if (w3c) {

                        mtmp = document.getElementById("Mx" + (m_copo[ycol] - 201) + "y" + ycol);

                        mtem = document.getElementById("Mx" + (200 + rows - m_copo[ycol]--) + "y" + ycol);

                    } else {

                        mtmp = document.all["Mx" + (m_copo[ycol] - 201) + "y" + ycol];

                        mtem = document.all["Mx" + (200 + rows - m_copo[ycol]--) + "y" + ycol];

                    }

                    mtmp.style.fontWeight = "normal";

                    mtem.style.fontWeight = "normal";

                    setTimeout("zoomer(" + ycol + ")", speed);

                } else if (m_copo[ycol] == 200) m_copo[ycol] = 100 + Math.floor(rows / 2);

                if (m_copo[ycol] > 100 && m_copo[ycol] < 200) {

                    if (w3c) {

                        mtmp = document.getElementById("Mx" + (m_copo[ycol] - 101) + "y" + ycol);

                        mtmp.firstChild.nodeValue = String.fromCharCode(160);

                        mtem = document.getElementById("Mx" + (100 + rows - m_copo[ycol]--) + "y" + ycol);

                        mtem.firstChild.nodeValue = String.fromCharCode(160);

                    } else {

                        mtmp = document.all["Mx" + (m_copo[ycol] - 101) + "y" + ycol];

                        mtmp.innerHTML = String.fromCharCode(160);

                        mtem = document.all["Mx" + (100 + rows - m_copo[ycol]--) + "y" + ycol];

                        mtem.innerHTML = String.fromCharCode(160);

                    }

                    setTimeout("zoomer(" + ycol + ")", speed);

                }



                //start

                var h1 = document.getElementsByTagName("h1")[0],

                    text = h1.innerText || h1.textContent,

                    split = [],
                    i, lit = 0,
                    timer = null;

                for (i = 0; i < text.length; ++i) {

                    split.push("<span>" + text[i] + "</span>");

                }

                h1.innerHTML = split.join("");

                split = h1.childNodes;



                var flicker = function() {

                    lit += 0.01;

                    if (lit >= 1) {

                        clearInterval(timer);

                    }

                    for (i = 0; i < split.length; ++i) {

                        if (Math.random() < lit) {

                            split[i].className = "neon";

                        } else {

                            split[i].className = "";

                        }

                    }

                }

                setInterval(flicker, 100);



            }
        </script>
        <script>
            Swal.fire({
                title: 'Dialog Pop-up',
                text: 'Oooppssss.. We AnonGhost Indonesian!',
                icon: 'success', // Anda dapat mengganti ikon sesuai kebutuhan (success, error, warning, info, dll.)
                confirmButtonText: 'OK' // Teks tombol konfirmasi
            });
        </script>

        <script>
            function setVideoSize() {
                var video = document.getElementById('bg-video');
                video.style.width = window.innerWidth + 'px';
                video.style.height = window.innerHeight + 'px';
            }

            window.onresize = setVideoSize;
            setVideoSize();
        </script>
        <script type="text/javascript">
            var charIndex = -1;
            var stringLength = 0;
            var inputText;

            function writeContent(init) {
                if (init) {
                    inputText = document.getElementById('contentToWrite').innerHTML;
                }
                if (charIndex == -1) {
                    charIndex = 0;
                    stringLength = inputText.length;
                }
                var initString = document.getElementById('myContent').innerHTML;
                initString = initString.replace(/<SPAN.*$/gi, "");

                var theChar = inputText.charAt(charIndex);
                var nextFourChars = inputText.substr(charIndex, 4);
                if (nextFourChars == '<br>' || nextFourChars == '<br>') {
                    theChar = '<br>';
                    charIndex += 3;
                }
                initString = initString + theChar + "<span id='blink'>_</SPAN>";
                document.getElementById('myContent').innerHTML = initString;

                charIndex = charIndex / 1 + 1;
                if (charIndex % 2 == 1) {
                    document.getElementById('blink').style.display = 'font: 100px';
                } else {
                    document.getElementById('blink').style.display = 'inline';
                }

                if (charIndex <= stringLength) {
                    setTimeout('writeContent(false)', 100);
                } else {
                    blinkSpan();
                }
            }
            var currentStyle = 'inline';

            function blinkSpan() {
                if (currentStyle == 'inline') {
                    currentStyle = 'none';
                } else {
                    currentStyle = 'inline';
                }
                document.getElementById('blink').style.display = currentStyle;
                setTimeout('blinkSpan()', 9999999);

            }
        </script>
    @endsection
