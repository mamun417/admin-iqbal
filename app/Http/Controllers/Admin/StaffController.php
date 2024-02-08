<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Models\Admin;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Throwable;

class StaffController extends Controller
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

        //get all latest staffs
        $staffs = Admin::where('type', 'staff')->latest();

        if ($keyword) {
            $keyword = '%' . $keyword . '%';

            $staffs = $staffs->where('name', 'like', $keyword)
                ->orWhere('email', 'like', $keyword);
        }

        $staffs = $staffs->paginate($perPage);

        return view('admin.pages.staffs.index', compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StaffRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(StaffRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $request->all();
            $staff = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'type' => 'staff',
                'password' => bcrypt($request->password),
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Staff created successfully');
        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     * @throws Throwable
     */
    public function create(): View
    {
        return view('admin.pages.staffs.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Admin $staff
     * @return View
     */
    public function edit(Admin $staff): View
    {
        return view('admin.pages.staffs.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StaffRequest $request
     * @param Admin $staff
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(StaffRequest $request, Admin $staff): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $staff->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Staff updated successfully');
        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Admin $staff
     * @return RedirectResponse
     * @throws Throwable
     */
    public function destroy(Admin $staff): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $staff->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Staff deleted successfully');
        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
