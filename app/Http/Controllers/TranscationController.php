<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTranscationRequest;
use App\Http\Requests\UpdateTranscationRequest;
use App\Repositories\TranscationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TranscationController extends AppBaseController
{
    /** @var  TranscationRepository */
    private $transcationRepository;

    public function __construct(TranscationRepository $transcationRepo)
    {
        $this->transcationRepository = $transcationRepo;
    }

    /**
     * Display a listing of the Transcation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->transcationRepository->pushCriteria(new RequestCriteria($request));
        $transcations = $this->transcationRepository->all();

        return view('transcations.index')
            ->with('transcations', $transcations);
    }

    /**
     * Show the form for creating a new Transcation.
     *
     * @return Response
     */
    public function create()
    {
        return view('transcations.create');
    }

    /**
     * Store a newly created Transcation in storage.
     *
     * @param CreateTranscationRequest $request
     *
     * @return Response
     */
    public function store(CreateTranscationRequest $request)
    {
        $input = $request->all();

        $transcation = $this->transcationRepository->create($input);

        Flash::success('Transcation saved successfully.');

        return redirect(route('transcations.index'));
    }

    /**
     * Display the specified Transcation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transcation = $this->transcationRepository->findWithoutFail($id);

        if (empty($transcation)) {
            Flash::error('Transcation not found');

            return redirect(route('transcations.index'));
        }

        return view('transcations.show')->with('transcation', $transcation);
    }

    /**
     * Show the form for editing the specified Transcation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transcation = $this->transcationRepository->findWithoutFail($id);

        if (empty($transcation)) {
            Flash::error('Transcation not found');

            return redirect(route('transcations.index'));
        }

        return view('transcations.edit')->with('transcation', $transcation);
    }

    /**
     * Update the specified Transcation in storage.
     *
     * @param  int              $id
     * @param UpdateTranscationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTranscationRequest $request)
    {
        $transcation = $this->transcationRepository->findWithoutFail($id);

        if (empty($transcation)) {
            Flash::error('Transcation not found');

            return redirect(route('transcations.index'));
        }

        $transcation = $this->transcationRepository->update($request->all(), $id);

        Flash::success('Transcation updated successfully.');

        return redirect(route('transcations.index'));
    }

    /**
     * Remove the specified Transcation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transcation = $this->transcationRepository->findWithoutFail($id);

        if (empty($transcation)) {
            Flash::error('Transcation not found');

            return redirect(route('transcations.index'));
        }

        $this->transcationRepository->delete($id);

        Flash::success('Transcation deleted successfully.');

        return redirect(route('transcations.index'));
    }
}
