<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\FileHandler;
use App\Http\Requests\ClientRequest;
use App\Models\Agent;
use App\Models\Client;
use App\Models\District;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ClientController extends Controller
{
    public function index(): View
    {
        $perPage = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $clients = Client::with('agent', 'district')->latest();

        if ($keyword) {
            $keyword = '%' . $keyword . '%';
            $clients = $clients->where('id', 'like', $keyword)
                ->orWhere('first_name', 'like', $keyword)
                ->orWhere('last_name', 'like', $keyword)
                ->orWhereHas('district', function ($query) use ($keyword) {
                    $query->where('name', 'like', $keyword);
                });
        }

        $clients = $clients->paginate($perPage);

//        dd($clients->toArray());
        return view('admin.pages.clients.index', compact('clients'));
    }

    /**
     * @throws Throwable
     */
    public function store(ClientRequest $request)
    {
//        dd($request->all());
        DB::beginTransaction();
        try {
            $client = Client::create([
                'district_id' => $request->district_id,
                'agent_id' => $request->agent_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'dob' => $request->dob,
                'passport_no' => $request->passport_no,
                'nid_no' => $request->nid_no,
                'address' => $request->address,
                'note' => $request->note,
                'description' => $request->description,
                'status' => $request->status,
                'contract_price' => $request->contract_price,
                'paid' => $request->paid,
                'due' => $request->due,
            ]);

            $client_photo = $request->file('image');
            if ($client_photo) {
                $image_path = FileHandler::uploadImage($client_photo, 'agents_photo', ['width' => 591, 'height' => 609]);
                $client->image()->create([
                    'url' => Storage::url($image_path),
                    'base_path' => $image_path,
                    'type' => 'agent_photo',
                ]);
            }

            $client_docs = $request->file('doc');
            if ($client_docs) {
                foreach ($client_docs as $client_doc) {
                    $doc_path = FileHandler::uploadFile($client_doc, 'uploads/agents_docs');
                    $client->document()->create([
                        'url' => Storage::url($doc_path),
                        'base_path' => $doc_path,
                        'type' => 'agent_doc',
                    ]);
                }
            }

            DB::commit();

            return redirect()->back()->with('success', 'Client created successfully.');

        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function create(): View
    {
        $agents = Agent::latest()->get();
        $districts = District::latest()->get();
        return view('admin.pages.clients.create', compact('agents','districts'));
    }

    public function show(Client $client): View
    {
        $client = $client->load('agent', 'district');

        return view('admin.pages.clients.show', compact('client'));
    }

    public function edit(Client $client): View
    {
        $agents = Agent::latest()->get();
        $districts = District::latest()->get();
        $client = $client->load('agent', 'district');
        return view('admin.pages.clients.edit', compact('client','agents','districts'));

    }

    /**
     * @throws Throwable
     */
    public function update(ClientRequest $request, Client $client): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $client->update([
                'district_id' => $request->district_id,
                'agent_id' => $request->agent_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'dob' => $request->dob,
                'passport_no' => $request->passport_no,
                'nid_no' => $request->nid_no,
                'address' => $request->address,
                'note' => $request->note,
                'description' => $request->description,
                'status' => $request->status,
                'contract_price' => $request->contract_price,
                'paid' => $request->paid,
                'due' => $request->due,
            ]);

            $client_photo = $request->file('image');
            if ($client_photo) {
                $image_path = FileHandler::uploadImage($client_photo, 'agents_photo', ['width' => 591, 'height' => 609]);

                FileHandler::delete(@$client->image->base_path);

                $client->image()->update([
                    'url' => Storage::url($image_path),
                    'base_path' => $image_path,
                    'type' => 'agent_photo',
                ]);
            }

            $client_docs = $request->file('doc');
            if ($client_docs) {
                foreach ($client_docs as $client_doc) {
                    $doc_path = FileHandler::uploadFile($client_doc, 'uploads/agents_docs');
                    $client->document()->update([
                        'url' => Storage::url($doc_path),
                        'base_path' => $doc_path,
                        'type' => 'agent_doc',
                    ]);
                }
            }

            DB::commit();

            return redirect()->back()->with('success', 'Client updated successfully.');

        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @throws Throwable
     */
    public function destroy(Client $client): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $client->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Client deleted successfully');
        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
