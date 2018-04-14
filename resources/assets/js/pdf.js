

(function(){
    Vue.component('sample', require('./components/Sample.vue'));
        var pdf = new Vue({
            el: '#pdf'
        });
    // $.getJSON("../sample.json", function(data){
        
        
        
    //     //var doc = new jsPDF();
    //     //var canvas = $('#qrcode canvas')[0];
    //     //var img = canvas.toDataURL('image/jpeg', 1.0);
        
    //     //doc.addImage(img, 'JPEG', 50, 10);
    //     //doc.text(JSON.stringify(data), 10, 80);
    //     //doc.save("teste.pdf");
    // });
}());