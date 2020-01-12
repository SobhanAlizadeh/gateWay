<?php


namespace Larabookir\Gateway\Traits;


use Larabookir\Gateway\Model\ap;
use Larabookir\Gateway\Model\irankish;
use Larabookir\Gateway\Model\parsian;
use Larabookir\Gateway\Model\pasargad;
use Larabookir\Gateway\Model\payir;
use Larabookir\Gateway\Model\Paypal;
use Larabookir\Gateway\Model\sadad;
use Larabookir\Gateway\Model\zarinPal;

trait userHasModel
{
    public function assignRole(...$model)
    {
        #تنها راه حلی که به ذهنم میرسه
        switch ($model) {
            case 'ap':
                $ap = ap::query()->first();
                $ap->user()->attach(Auth::id());
                break;
            case 'irankish':
                $irankish = irankish::query()->first();
                $irankish->user()->attach(Auth::id());
                break;
            case 'mellat':
                $mellat = mellat::query()->first();
                $mellat->user()->attach(Auth::id());
                break;
            case 'parsian':
                $parsian = parsian::query()->first();
                $parsian->user()->attach(Auth::id());
                break;
            case 'pasargad':
                $pasargad = pasargad::query()->first();
                $pasargad->user()->attach(Auth::id());
                break;

            case 'payir':
                $payir = payir::query()->first();
                $payir->user()->attach(Auth::id());
                break;
            case 'paypal':
                $paypal = Paypal::query()->first();
                $paypal->user()->attach(Auth::id());
                break;
            case 'sadad':
                $sadad = sadad::query()->first();
                $sadad->user()->attach(Auth::id());
                break;
            case 'saman':
                $saman = saman::query()->first();
                $saman->user()->attach(Auth::id());
                break;
            case 'zarinpal':
                $zarin = zarinPal::query()->first();
                $zarin->user()->attach(Auth::id());
                break;
        }


    }
}