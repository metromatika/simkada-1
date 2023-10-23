<?php

namespace App\Http\Livewire;

use LaravelViews\Views\TableView;
use App\Models\DaftarTim;
use LaravelViews\Facades\Header;
use LaravelViews\Facades\UI;
use LaravelViews\Views\Traits\WithAlerts;
use App\Actions\DeleteAction;

class TabelDaftarTim extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = DaftarTim::class;
    public $searchBy = ['keterangan'];
    protected $paginate = 10;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            'Kelurahan',
            'Nama Tim',
            'Koordinator',
            'Keterangan'
        ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->village->name,
            $model->nama_tim,
            $model->koordinator,
            $model->keterangan,
        ];
    }
    protected function actionsByRow()
    {
        return [
            new DeleteAction,
        ];
    }
}
