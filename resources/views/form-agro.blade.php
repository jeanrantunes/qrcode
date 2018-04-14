@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <form action="/pdf" id="form" class="col s12" method="post">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="switch right">
                <label>
                    Formulário
                    <input type="checkbox" id="switch">
                    <span class="lever"></span>
                    Tabela
                </label>
            </div>
            <div class="form">
                <inputs-comp v-for="item in inputs" :item="item" :key="item.id"></inputs-comp>
            </div>
            <div class="table" style="display: none;">
                <div id="table-form"></div>
            </div>
            <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
        </form>
        <!-- <form class="col s12">
            
            <div class="row">
                <div class="input-field col s12">
                    <input id="depth" type="number" class="validate">
                    <label for="depth">Profundidade</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="ph_water" type="number" class="validate">
                    <label for="ph_water">pH água</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="ph_cacl2" type="number" class="validate">
                    <label for="ph_cacl2">pH CaCl2</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="ph_smp" type="number" class="validate">
                    <label for="ph_smp">pH SMP</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="p_mehlich" type="number" class="validate">
                    <label for="p_mehlich">P-Mehlich-1 (mg dm-3)</label>
                </div>
            </div>
        </form> -->
    </div>
</div>

@endsection