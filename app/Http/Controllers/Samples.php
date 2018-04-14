<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class Samples extends Controller
{
    public function index() {
        return view('form-agro');
    }
    public function add() {
        /*campos do form*/
        $identificationSample = Request::input('identification-sample');
        $depth = Request::input('depth');
        $phWater = Request::input('ph-water');
        $phCacl2 = Request::input('ph-cacl2');
        $indexSmp = Request::input('index-smp');
        $phosphor = Request::input('phosphor');
        $potassium = Request::input('potassium');
        $aluminum = Request::input('aluminum');
        $calcium = Request::input('calcium');
        $magnesium = Request::input('magnesium');
        $hAl = Request::input('h-al');
        $organicMatter = Request::input('organic-matter');
        $clay = Request::input('clay');
        $sulfur = Request::input('sulfur');
        $zinc = Request::input('zinc');
        $copper = Request::input('copper');
        $manganese = Request::input('manganese');
        $iron = Request::input('iron');
        $boron = Request::input('boron');

        /*validar campos do lado servidor*/
        /*
            code
        */
        /*gera a assinatura*/
        $signature =  md5(uniqid(""));

        /*inserir no banco*/
        if(DB::table('samples')->insert([
            'identification_sample'=> $identificationSample,
            'depth'=> $depth,
            'ph_water'=> $phWater,
            'ph_cacl2'=> $phCacl2,
            'index_smp'=> $indexSmp,
            'phosphor'=> $phosphor,
            'potassium'=> $potassium,
            'aluminum'=> $aluminum,
            'calcium'=> $calcium,
            'magnesium'=> $magnesium,
            'h_al'=> $hAl,
            'organic_matter'=> $organicMatter,
            'clay'=> $clay,
            'sulfur'=> $sulfur,
            'zinc'=> $zinc,
            'copper'=> $copper,
            'manganese'=> $manganese,
            'iron'=> $iron,
            'boron'=> $boron,
            'signature'=> $signature,
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s")
        ]));

        $data = DB::select("select 
                                identification_sample,
                                depth,
                                ph_water,
                                ph_cacl2,
                                index_smp,
                                phosphor,
                                potassium,
                                aluminum,
                                calcium,
                                magnesium,
                                h_al,
                                organic_matter,
                                clay,
                                sulfur,
                                zinc,
                                copper,
                                manganese,
                                iron,
                                boron,
                                created_at,
                                updated_at
                            from samples where signature='$signature'");
        
        
        /*gera um json com os dados*/
        $fp = fopen('sample.json', 'w');
        fwrite($fp, json_encode($data));
        return view('toPdf');
    }
}
