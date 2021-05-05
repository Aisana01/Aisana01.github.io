var cache_width = $('#apend').width();
    var a4 = [595.28, 841.89]; 

    $(document).on("click", '#button_primary', function () {
        html2canvas($('#apend'), {
            onrendered: function (canvas) {
                var img = canvas.toDataURL("image/png", 1.0);
                var doc = new jsPDF({ unit: 'px', format: 'a3' });
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('Result.pdf');
    
            }
        });
    }); 