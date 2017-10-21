<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlocacaosRequest;
use App\Http\Requests\UpdateAlocacaosRequest;
use App\Repositories\AlocacaosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AlocacaosController extends AppBaseController
{
    /** @var  AlocacaosRepository */
    private $alocacaosRepository;

    public function __construct(AlocacaosRepository $alocacaosRepo)
    {
        $this->alocacaosRepository = $alocacaosRepo;
    }

    /**
     * Display a listing of the Alocacaos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->alocacaosRepository->pushCriteria(new RequestCriteria($request));
        $alocacaos = $this->alocacaosRepository->all();

        return view('alocacaos.index')
            ->with('alocacaos', $alocacaos);
    }

    /**
     * Show the form for creating a new Alocacaos.
     *
     * @return Response
     */
    public function create()
    {
        return view('alocacaos.create');
    }

    /**
     * Store a newly created Alocacaos in storage.
     *
     * @param CreateAlocacaosRequest $request
     *
     * @return Response
     */
    public function store(CreateAlocacaosRequest $request)
    {
        $input = $request->all();

        $alocacaos = $this->alocacaosRepository->create($input);

        Flash::success('Alocacaos saved successfully.');

        return redirect(route('alocacaos.index'));
    }

    /**
     * Display the specified Alocacaos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alocacaos = $this->alocacaosRepository->findWithoutFail($id);

        if (empty($alocacaos)) {
            Flash::error('Alocacaos not found');

            return redirect(route('alocacaos.index'));
        }

        return view('alocacaos.show')->with('alocacaos', $alocacaos);
    }

    /**
     * Show the form for editing the specified Alocacaos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alocacaos = $this->alocacaosRepository->findWithoutFail($id);

        if (empty($alocacaos)) {
            Flash::error('Alocacaos not found');

            return redirect(route('alocacaos.index'));
        }

        return view('alocacaos.edit')->with('alocacaos', $alocacaos);
    }

    /**
     * Update the specified Alocacaos in storage.
     *
     * @param  int              $id
     * @param UpdateAlocacaosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlocacaosRequest $request)
    {
        $alocacaos = $this->alocacaosRepository->findWithoutFail($id);

        if (empty($alocacaos)) {
            Flash::error('Alocacaos not found');

            return redirect(route('alocacaos.index'));
        }

        $alocacaos = $this->alocacaosRepository->update($request->all(), $id);

        Flash::success('Alocacaos updated successfully.');

        return redirect(route('alocacaos.index'));
    }

    /**
     * Remove the specified Alocacaos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alocacaos = $this->alocacaosRepository->findWithoutFail($id);

        if (empty($alocacaos)) {
            Flash::error('Alocacaos not found');

            return redirect(route('alocacaos.index'));
        }

        $this->alocacaosRepository->delete($id);

        Flash::success('Alocacaos deleted successfully.');

        return redirect(route('alocacaos.index'));
    }
}
