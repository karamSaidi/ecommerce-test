<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;


use App\Http\Interfaces\RepositoryInterface;

class Repository implements RepositoryInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function index()
    {
        return $this->model->latest('id')->paginate(config('general.paginate_number'));
    } // ./index

    public function show($id)
    {
        return $this->model->findOrFail($id);
    } // ./show

    public function create(array $data)
    {
        return $this->model->create($data);
    } // ./create

    public function update(array $data, $id)
    {
        $record = $this->model->find($id);
        return $record->update($data);
    } // ./update

    public function delete($id)
    {
        return $this->model->destroy($id);
    } // ./delete

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    } // ./seModel

    public function with($relations)
    {
        return $this->model->with($relations);
    } // ./with

}// ./Repository
