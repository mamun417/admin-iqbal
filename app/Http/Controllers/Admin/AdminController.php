<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Helpers\FileHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\Admin;
use DB;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Throwable;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $admin = Auth::user();
        return view('admin.pages.profile.profile', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    public function changePassword(PasswordRequest $request)
    {
        $hasPassword = Auth::user()->password;
        $check_password = Hash::check($request->old_password, $hasPassword);
        if ($check_password){
            $new_password = Hash::make($request->new_password);
            Admin::where('id', Auth::id())->update(['password' => $new_password]);
            return redirect()->back()->with('success', 'Password changed successfully');
        }else{
            return redirect()->back()->with('warning', 'Old password dose not match with your current password');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProfileRequest $request
     * @param Admin $admin
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(ProfileRequest $request, Admin $admin): RedirectResponse
    {
        DB::beginTransaction();
        try {

            if ($request->file('profile_image')){
                $image = $request->file('profile_image');
                $image_path = FileHandler::uploadImage($image, 'admin_profile_images', ['width' => '84', 'height' => '84']);
                FileHandler::delete(@$admin->image->base_path); //image delete
                $admin->image()->update([ // image update
                    'url' => Storage::url($image_path),
                    'base_path' => $image_path,
                    'type' => 'sm',
                ]);
            }

            $admin->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            DB::commit();
            return redirect()->back()->with('success', 'Profile Update Successfully');

        } catch (Exception $exception) {
            report($exception);
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
