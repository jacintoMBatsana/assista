<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvolucoesRequest;
use App\Http\Requests\UpdateEvolucoesRequest;
use App\Repositories\EvolucoesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EvolucoesController extends AppBaseController
{
    /** @var  EvolucoesRepository */
    private $evolucoesRepository;

    public function __construct(EvolucoesRepository $evolucoesRepo)
    {
        $this->evolucoesRepository = $evolucoesRepo;
    }

    /**
     * Display a listing of the Evolucoes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->evolucoesRepository->pushCriteria(new RequestCriteria($request));
        $evolucoes = $this->evolucoesRepository->all();

        return view('evolucoes.index')
            ->with('evolucoes', $evolucoes);
    }

    /**
     * Show the form for creating a new Evolucoes.
     *
     * @return Response
     */
    public function create()
    {
        return view('evolucoes.create');
    }

    /**
     * Store a newly created Evolucoes in storage.
     *
     * @param CreateEvolucoesRequest $request
     *
     * @return Response
     */
    public function store(CreateEvolucoesRequest $request)
    {
        $input = $request->all();

        $evolucoes = $this->evolucoesRepository->create($input);

        Flash::success('Evolucoes saved successfully.');

        return redirect(route('evolucoes.index'));
    }

    /**
     * Display the specified Evolucoes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $evolucoes = $this->evolucoesRepository->findWithoutFail($id);

        if (empty($evolucoes)) {
            Flash::error('Evolucoes not found');

            return redirect(route('evolucoes.index'));
        }

        return view('evolucoes.show')->with('evolucoes', $evolucoes);
    }

    /**
     * Show the form for editing the specified Evolucoes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $evolucoes = $this->evolucoesRepository->findWithoutFail($id);

        if (empty($evolucoes)) {
            Flash::error('Evolucoes not found');

            return redirect(route('evolucoes.index'));
        }

        return view('evolucoes.edit')->with('evolucoes', $evolucoes);
    }

    /**
     * Update the specified Evolucoes in storage.
     *
     * @param  int              $id
     * @param UpdateEvolucoesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEvolucoesRequest $request)
    {
        $evolucoes = $this->evolucoesRepository->findWithoutFail($id);

        if (empty($evolucoes)) {
            Flash::error('Evolucoes not found');

            return redirect(route('evolucoes.index'));
        }

        $evolucoes = $this->evolucoesRepository->update($request->all(), $id);

        Flash::success('Evolucoes updated successfully.');

        return redirect(route('evolucoes.index'));
    }

    /**
     * Remove the specified Evolucoes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $evolucoes = $this->evolucoesRepository->findWithoutFail($id);

        if (empty($evolucoes)) {
            Flash::error('Evolucoes not found');

            return redirect(route('evolucoes.index'));
        }

        $this->evolucoesRepository->delete($id);

        Flash::success('Evolucoes deleted successfully.');

        return redirect(route('evolucoes.index'));
    }
}
