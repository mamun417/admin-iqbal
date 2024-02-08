<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\FileHandler;
use App\Http\Requests\AgentRequest;
use App\Models\Agent;
use App\Models\District;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $perPage = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $agents = Agent::latest();

        if ($keyword) {
            $keyword = '%' . $keyword . '%';
            $agents = $agents->where('id', 'like', $keyword)
                ->orWhereHas('district', function ($query) use ($keyword) {
                    $query->where('name', 'like', $keyword);
                });
        }

        $agents = $agents->paginate($perPage);

        return view('admin.pages.agents.index', compact('agents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AgentRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(AgentRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $agent = Agent::create([
                'district_id' => $request->district_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);

            $agent_photo = $request->file('image');
            if ($agent_photo) {
                $image_path = FileHandler::uploadImage($agent_photo, 'agents_photo', ['width' => 591, 'height' => 609]);
                $agent->image()->create([
                    'url' => Storage::url($image_path),
                    'base_path' => $image_path,
                    'type' => 'agent_photo',
                ]);
            }

            $agent_docs = $request->file('doc');
            if ($agent_docs) {
                foreach ($agent_docs as $agent_doc) {
                    $doc_path = FileHandler::uploadFile($agent_doc, 'uploads/agents_docs');
                    $agent->document()->create([
                        'url' => Storage::url($doc_path),
                        'base_path' => $doc_path,
                        'type' => 'agent_doc',
                    ]);
                }
            }

            DB::commit();

            return redirect()->back()->with('success', 'Agent created successfully.');

        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $districts = District::latest()->get();

        return view('admin.pages.agents.create', compact('districts'));
    }

    /**
     * Display the specified resource.
     *
     * @param Agent $agent
     * @return View
     */
    public function show(Agent $agent): View
    {
        $agent = $agent->load(['district', 'image', 'document', 'clients']);

        return view('admin.pages.agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Agent $agent
     * @return View
     */
    public function edit(Agent $agent): View
    {
        $districts = District::latest()->get();
        return view('admin.pages.agents.edit', compact('agent', 'districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AgentRequest $request
     * @param Agent $agent
     * @return Response
     */
    public function update(AgentRequest $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Agent $agent
     * @return RedirectResponse
     * @throws Throwable
     */
    public function destroy(Agent $agent): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $agent->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Agent deleted successfully');
        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
