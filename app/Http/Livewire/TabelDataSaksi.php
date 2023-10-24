<?php

namespace App\Http\Livewire;

use LaravelViews\Views\TableView;
use App\Models\User;
use LaravelViews\Facades\Header;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Facades\UI;
use App\Actions\DeleteAction;

class TabelDataSaksi extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = User::class;
    public $searchBy = ['nama'];
    protected $paginate = 10;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            'Nama',
            'Kelurahan',
            'Referal',
            'NIK',
            'No. HP',
            'Tanggal Pendaftaran',
            'Aksi',
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
            $model->nama,
            $model->village->name,
            $model->referal,
            $model->nik,
            $model->telepon,
            $model->created_at->diffForHumans(),
        ];
    }
    protected function actionsByRow()
    {
        return [
            new DeleteAction,
        ];
    }
}
