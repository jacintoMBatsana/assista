<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrabalhadorRequest;
use App\Http\Requests\UpdateTrabalhadorRequest;
use App\Repositories\TrabalhadorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TrabalhadorController extends AppBaseController
{
    /** @var  TrabalhadorRepository */
    private $trabalhadorRepository;

    public function __construct(TrabalhadorRepository $trabalhadorRepo)
    {
        $this->trabalhadorRepository = $trabalhadorRepo;
    }

    /**
     * Display a listing of the Trabalhador.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabalhadorRepository->pushCriteria(new RequestCriteria($request));
        $trabalhadors = $this->trabalhadorRepository->all();

        return view('trabalhadors.index')
            ->with('trabalhadors', $trabalhadors);
    }

    /**
     * Show the form for creating a new Trabalhador.
     *
     * @return Response
     */
    public function create()
    {
        return view('trabalhadors.create');
    }

    /**
     * Store a newly created Trabalhador in storage.
     *
     * @param CreateTrabalhadorRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabalhadorRequest $request)
    {
        $input = $request->all();

        $trabalhador = $this->trabalhadorRepository->create($input);

        Flash::success('Trabalhador saved successfully.');

        return redirect(route('trabalhadors.index'));
    }

    /**
     * Display the specified Trabalhador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabalhador = $this->trabalhadorRepository->findWithoutFail($id);

        if (empty($trabalhador)) {
            Flash::error('Trabalhador not found');

            return redirect(route('trabalhadors.index'));
        }

        return view('trabalhadors.show')->with('trabalhador', $trabalhador);
    }

    /**
     * Show the form for editing the specified Trabalhador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabalhador = $this->trabalhadorRepository->findWithoutFail($id);

        if (empty($trabalhador)) {
            Flash::error('Trabalhador not found');

            return redirect(route('trabalhadors.index'));
        }

        return view('trabalhadors.edit')->with('trabalhador', $trabalhador);
    }

    /**
     * Update the specified Trabalhador in storage.
     *
     * @param  int              $id
     * @param UpdateTrabalhadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabalhadorRequest $request)
    {
        $trabalhador = $this->trabalhadorRepository->findWithoutFail($id);

        if (empty($trabalhador)) {
            Flash::error('Trabalhador not found');

            return redirect(route('trabalhadors.index'));
        }

        $trabalhador = $this->trabalhadorRepository->update($request->all(), $id);

        Flash::success('Trabalhador updated successfully.');

        return redirect(route('trabalhadors.index'));
    }

    /**
     * Remove the specified Trabalhador from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabalhador = $this->trabalhadorRepository->findWithoutFail($id);

        if (empty($trabalhador)) {
            Flash::error('Trabalhador not found');

            return redirect(route('trabalhadors.index'));
        }

        $this->trabalhadorRepository->delete($id);

        Flash::success('Trabalhador deleted successfully.');

        return redirect(route('trabalhadors.index'));
    }
}
