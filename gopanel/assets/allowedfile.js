$('INPUT[type="file"]').change(function () {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
            $('#kirim').attr('disabled', false);
            break;
        default:
            alert('Format Gambar tidak di Izinkan');
            this.value = '';
    }
});
