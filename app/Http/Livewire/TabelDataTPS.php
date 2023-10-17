<?php

namespace App\Http\Livewire;

use App\Models\TPS;
use LaravelViews\Facades\Header;
use LaravelViews\Facades\UI;
use LaravelViews\Views\TableView;
use LaravelViews\Views\Traits\WithAlerts;
use App\Actions\DeleteAction;

class TabelDataTPS extends TableView
{
    use WithAlerts;
    /**
     * Sets a model class to get the initial data
     */
    protected $model = TPS::class;
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
            'Provinsi',
            'Kab/Kota',
            'Kecamatan',
            'Kelurahan',
            Header::title('Jumlah TPS')->sortBy('jumlah_tps'),
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
            $model->village->district->regency->province->name,
            $model->village->district->regency->name,
            $model->village->district->name,
            $model->village->name,
            UI::editable($model, 'jumlah_tps'),
            UI::editable($model, 'keterangan'),
        ];
    }
    public function update(TPS $model, $data)
    {
        $model->update(collect($data)->map(function ($value) {
            return strip_tags($value);
        })->toArray());
        $this->success('Data TPS, Berhasil diperbaharui!');
    }
    protected function actionsByRow()
    {
        return [
            new DeleteAction,
        ];
    }

}
