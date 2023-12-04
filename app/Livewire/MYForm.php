<?php

namespace App\Livewire;

use App\Models\Xcrate;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class MYForm extends Component
{
    #[Validate(['required','numeric','max_digits:2','min:1','max:12','digits_between:01,12'])]
    public $month;
    #[Validate(['required','numeric','max_digits:2','min:22','max:23'])]
    public $year;

    public function store(Request $request)
    {
        ($this->validate());
        $month = $this->month ;
        $year = $this->year;
        $url = 'http://www.hmrc.gov.uk/softwaredevelopers/rates/exrates-monthly-'.   $month.$year.'.XML';
        //dd($url);
        // http://www.hmrc.gov.uk/softwaredevelopers/rates/exrates-monthly-0123.XML
        $xml_string = file_get_contents($url);
        $xml = simplexml_load_string($xml_string);
        $json = json_encode($xml);
        $data = json_decode($json, true);
        $period = $data['@attributes']['Period'];

        foreach ($data['exchangeRate'] as $index => $data) {
            $xrdata[] =[
                'countryName' => $data['countryName'],
                 'countryCode' => $data['countryCode'] ,
                 'currencyName'  => $data['currencyName'],
                'currencyCode'  => $data['currencyCode'],
                 'rateNew'  => $data['rateNew'],
                'period' => $period,
            ];
        }

       
        //dd($xrdata);
        Xcrate::insert($xrdata);
        return $this->redirect('/getxr');//->with('status', 'Exchange Rate Data stored');

        //  TODO  check for 404 before storing data to db
        //redirect with success message
    }

    //TODOaddcomponent fo exchange rate calc from a row RATENEW field

    public function show()
    {
        return view('getxr');
    }


    public function render()
    {
        return view('livewire.m-y-form');
    }
}
