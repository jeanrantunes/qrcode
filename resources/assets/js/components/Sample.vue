<template>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="section">
                    <h6>Informações fornecidas e de responsabilidade do solicitante</h6>
                    <table class="centered responsive-table">
                        <thead>
                            <tr>
                                <th>Registro no LAS</th>
                                <th colspan="2">Identificação da amostra</th>
                                <th>Área(ha)</th>
                                <th colspan="2">Sistema de cultivo</th>
                                <th>Prof.(cm)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>null</td>
                                <td colspan="2">{{sample.identification_sample}}</td>
                                <td>null</td>
                                <td colspan="2">null</td>
                                <td>null</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section">
                    <h6>Diagnóstico para acidez do solo e calagem</h6>
                    <table class="centered responsive-table">
                        <thead>
                            <tr>
                                <th rowspan="2">Registro no LAS</th>
                                <th rowspan="2">pH água</th>
                                <th rowspan="1">Ca</th>
                                <th rowspan="1">Mg</th>
                                <th rowspan="1">Al</th>
                                <th rowspan="1">H+Al</th>
                                <th rowspan="1">CTC efet.</th>
                                <th colspan="2">Saturação</th>
                                <th rowspan="2">Índice SMP</th>
                            </tr>
                            <tr>
                                <th colspan="5">cmolcdm3</th>
                                <th>AI</th>
                                <th>Bases</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>null</td>
                                <td>{{ sample.ph_water }}</td>
                                <td>{{ sample.calcium }}</td>
                                <td>{{sample.magnesium}}</td>
                                <td>{{sample.aluminum}}</td>
                                <td>{{sample.h_al}}</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section">
                    <h6>Diagnóstico para macronutrientes e recomendação de adubação NPK-S</h6>
                    <table class="centered responsive-table">
                        <thead>
                            <tr>
                                <th rowspan="2">Registro no LAS</th>
                                <th rowspan="1">% MO</th>
                                <th rowspan="1">% Argila</th>
                                <th rowspan="2">Textura</th>
                                <th rowspan="1">S</th>
                                <th rowspan="1">PMehlich</th>
                                <th rowspan="1">C Total</th>
                                <th rowspan="1">K</th>
                                <th rowspan="1">CTC pH7</th>
                                <th rowspan="1">K</th>
                            </tr>
                            <tr>
                                <th colspan="2">mv</th>
                                <th colspan="2">mgdm3</th>
                                <th>gkg1</th>
                                <th colspan="2">cmolcdm3</th>
                                <th>mgdm3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section">
                    <h6>Diagnóstico para micronutrientes e relações molares</h6>
                    <table class="centered responsive-table">
                        <thead>
                            <tr>
                                <th rowspan="2">Registro no LAS</th>
                                <th>Cu</th>
                                <th>Zn</th>
                                <th>B</th>
                                <th>Fe</th>
                                <th>Mn</th>
                                <th>Na</th>
                                <th colspan="3">Relações Molares</th>
                            </tr>
                            <tr>
                                <th colspan="6">mgdhm³</th>
                                <th>Ca/Mg</th>
                                <th>(Ca+Mg)/K</th>
                                <th>K/(Ca+Mg)
                                    <sup>1/2</sup>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>null</td>
                                <td>{{sample.copper}}</td>
                                <td>{{sample.zinc}}</td>
                                <td>{{sample.boron}}</td>
                                <td>{{sample.iron}}</td>
                                <td>{{sample.manganese}}</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                                <td>null</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="qrcode"></div>
            </div>
        </div>
    </div>
</template>
<style>
    tr {
        border: 1px solid #000;
    }

    table {
        margin-top: 10px;
    }
</style>
<script>
    export default {
        data() {
            return {
                sample: [this.request()]
            }
        },
        methods: {
            request() {
                var self = this;
                $.getJSON("../sample.json", function (data) {
                    self.sample = data[0];
                    var opt = {
                        render: 'canvas',
                        ecLevel: 'M',
                        size: 200,
                        background: '#fff',
                        fill: '#333333',
                        text: JSON.stringify(data),
                        quiet: 2,
                        radius: 0.5,
                        mode: 2,
                        label: "Nome do lab"
                    };
                    $('#qrcode').qrcode(opt);
                });
            }
        }
    }
</script>