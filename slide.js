var num = 1;

    (function time() {



        function adelante() {
            num++;
            if (num < 4 && num > 0) {
                num.toString;
                var foto = document.getElementById("slide");
                foto.src = "img-slice/slice" + num + ".jpg";
            }
            else {
                var foto = document.getElementById("slide");
                foto.src = "img-slice/slice1.jpg";
                num = 1;
            }

        }
        setInterval(adelante, 7000);

    }())

function atras() {
    num--;
    if (num < 4 && num > 0) {
        num.toString;
        var foto = document.getElementById("slide");
        foto.src = "img-slice/slice" + num + ".jpg";
    }
    else {
        var foto = document.getElementById("slide");
        foto.src = "img-slice/slice3.jpg";
        num = 3;
    }
}

function adelante() {
    num++;
    if (num < 4 && num > 0) {
        num.toString;
        var foto = document.getElementById("slide");
        foto.src = "img-slice/slice" + num + ".jpg";
    }
    else {
        var foto = document.getElementById("slide");
        foto.src = "img-slice/slice1.jpg";
        num = 1;
    }

}