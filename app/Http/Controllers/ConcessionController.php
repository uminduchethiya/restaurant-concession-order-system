<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ConcessionService;
use App\Http\Requests\ConcessionRequest;

class ConcessionController extends Controller
{
    protected $concessionService;

    public function __construct(ConcessionService $concessionService)
    {
        $this->concessionService = $concessionService;
    }

    public function index()
    {
        return view('pages.concessions_view');
    }

    public function viewAddConcessionPage()
    {
        return view('pages.consessions_add');
    }

    public function store(ConcessionRequest $request)
    {
        $this->concessionService->createConcession($request->validated());

        return redirect()->route('dashboard')->with('success', 'Concession added successfully!');
    }
}
