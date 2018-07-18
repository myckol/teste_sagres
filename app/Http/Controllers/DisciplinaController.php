<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDisciplinaRequest;
use App\Http\Requests\UpdateDisciplinaRequest;
use App\Repositories\DisciplinaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DisciplinaController extends AppBaseController
{
    /** @var  DisciplinaRepository */
    private $disciplinaRepository;

    public function __construct(DisciplinaRepository $disciplinaRepo)
    {
        $this->disciplinaRepository = $disciplinaRepo;
    }

    /**
     * Display a listing of the Disciplina.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->disciplinaRepository->pushCriteria(new RequestCriteria($request));
        $disciplinas = $this->disciplinaRepository->all();

        return view('disciplinas.index')
            ->with('disciplinas', $disciplinas);
    }

    /**
     * Show the form for creating a new Disciplina.
     *
     * @return Response
     */
    public function create()
    {
        return view('disciplinas.create');
    }

    /**
     * Store a newly created Disciplina in storage.
     *
     * @param CreateDisciplinaRequest $request
     *
     * @return Response
     */
    public function store(CreateDisciplinaRequest $request)
    {
        $input = $request->all();

        $disciplina = $this->disciplinaRepository->create($input);

        Flash::success('Disciplina saved successfully.');

        return redirect(route('disciplinas.index'));
    }

    /**
     * Display the specified Disciplina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $disciplina = $this->disciplinaRepository->findWithoutFail($id);

        if (empty($disciplina)) {
            Flash::error('Disciplina not found');

            return redirect(route('disciplinas.index'));
        }

        return view('disciplinas.show')->with('disciplina', $disciplina);
    }

    /**
     * Show the form for editing the specified Disciplina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $disciplina = $this->disciplinaRepository->findWithoutFail($id);

        if (empty($disciplina)) {
            Flash::error('Disciplina not found');

            return redirect(route('disciplinas.index'));
        }

        return view('disciplinas.edit')->with('disciplina', $disciplina);
    }

    /**
     * Update the specified Disciplina in storage.
     *
     * @param  int              $id
     * @param UpdateDisciplinaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDisciplinaRequest $request)
    {
        $disciplina = $this->disciplinaRepository->findWithoutFail($id);

        if (empty($disciplina)) {
            Flash::error('Disciplina not found');

            return redirect(route('disciplinas.index'));
        }

        $disciplina = $this->disciplinaRepository->update($request->all(), $id);

        Flash::success('Disciplina updated successfully.');

        return redirect(route('disciplinas.index'));
    }

    /**
     * Remove the specified Disciplina from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $disciplina = $this->disciplinaRepository->findWithoutFail($id);

        if (empty($disciplina)) {
            Flash::error('Disciplina not found');

            return redirect(route('disciplinas.index'));
        }

        $this->disciplinaRepository->delete($id);

        Flash::success('Disciplina deleted successfully.');

        return redirect(route('disciplinas.index'));
    }
}
