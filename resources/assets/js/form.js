var data = {
    inputs: [
      {id: 0, name: 'identification-sample', type: 'text', title: 'Identificação da Amostra', order: 1},
      {id: 1, name: 'depth', type: 'number', title: 'Profundidade', order: 2},
      {id: 2, name: 'ph-water', type: 'number', title: 'pH água', order: 3},
      {id: 3, name: 'ph-cacl2', type: 'number', title: 'pH CaCl2', order: 4},
      {id: 4, name: 'index-smp', type: 'number', title: 'ph SMP', order: 5},
      {id: 5, name: 'phosphor', type: 'number', title: 'P-Mehlich-1 (mg dm-3)', order: 6},
      {id: 6, name: 'potassium', type: 'number', title: 'K (mg dm-3)', order: 7},
      {id: 7, name: 'aluminum', type: 'number', title: 'Al (cmolc dm-3)', order: 8},
      {id: 8, name: 'calcium', type: 'number', title: 'Ca (cmolc dm-3)', order: 9},
      {id: 9, name: 'magnesium', type: 'number', title: 'Mg (cmolc dm-3)', order: 10},
      {id: 10, name: 'h-al', type: 'number', title: 'H + Al (cmolc dm)', order: 11},
      {id: 11, name: 'organic-matter', type: 'number', title: 'Matéria Orgânica (%)', order: 12},
      {id: 12, name: 'clay', type: 'number', title: 'Argila (%)', order: 13},
      {id: 13, name: 'sulfur', type: 'number', title: 'S (mg dm-3)', order: 14},
      {id: 14, name: 'zinc', type: 'number', title: 'Zn (mg dm-3)', order: 15},
      {id: 15, name: 'copper', type: 'number', title: 'Cu (mg dm-3)', order: 16},
      {id: 16, name: 'manganese', type: 'number', title: 'Mn (mg dm-3)', order: 17},
      {id: 17, name: 'iron', type: 'number', title: 'Fe (mg dm-3)', order: 18},
      {id: 18, name: 'boron', type: 'number', title: 'B (mg dm-3)', order: 19}
  ]
}

Vue.component('inputs-comp', {
    template: '<div class="row" >\
                  <div class="input-field col s12">\
                      <input :name="item.name" :id="item.name" :type="item.type" class="validade">\
                      <label :for="item.name">{{ item.title }}</label>\
                  </div>\
              </div>',
    props: ['item'],
});

var form = new Vue({
    el: '#form',
    data : data
});
var flag = false;
$('#switch').on('change', function(){
    if($(this).prop('checked')){
        $('.form').hide();
        $('.table').show();
        if(!flag){
            createHandTable();
            flag = true;
        }
    } 
    else {
        $('.form').show();
        $('.table').hide();   
    }
});
function createHandTable() {
    $('#table-form').handsontable({
        //data: data.inputs,
        // columns: $.map(data.inputs, function(item){
        //     return {
        //         data: item.name,
        //         type: item.type == "number" ? "numeric": item.type
        //     };
        // }),
        // columns: $.map(data.inputs, function(item){
        //     return {
        //         data: item.name,
        //         type: item.type == "number" ? "numeric": item.type
        //     };
        // }),
        colHeaders:['Data'],
        rowHeaders: $.map(data.inputs, function(item){
            return  item.title;
        }),
        stretchH: 'last',
        columns:[{
            data: 'data',
            type: 'text'
        }],
        stretchH: 'all',
        autoWrapRow: true,
        rowHeaderWidth: 200,
        // rowHeaders: true,
        // dropdownMenu: true,
        autoColumnSize: {syncLimit: '40%'},
        manualRowMove: true,
        maxRows: data.inputs.length,
        minRows: data.inputs.length 
    });
}