
    var elems = document.getElementsByClassName('empty');
    var confirmIt = function (e) {
        if (!confirm('Yakin Ingin Mengosongkan Keranjang Belanja ?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
