(function(){
    $.getJSON("../sample.json", function(data){
        $('#qrcode').qrcode(JSON.stringify(data));
        var doc = new jsPDF();
        var canvas = $('#qrcode canvas')[0];
        var img = canvas.toDataURL("image/png");
        doc.addImage(canvas,  'JPEG', 10, 10);
       // doc.text(JSON.stringify(data), 10, 10);
        doc.save("teste.pdf");
    });
}());