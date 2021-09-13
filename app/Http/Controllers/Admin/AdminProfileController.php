<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = auth()->user()->id;
        $podcast = $users = DB::table('podcasts')->where('user', '=', $userID)->get();
        $album = $users = DB::table('albums')->where('user', '=', $userID)->get();
        $PodcastCount = count($podcast);
        $AlbumCount = count($album);
        $folder_path = "uploads/podcast/".$userID;
        $folder_size = $this->folderSize($folder_path);
        $diskSize = $this->formatSize($folder_size);
        return view('admin.profile', compact('PodcastCount', 'AlbumCount', 'diskSize'));
    }

    public function update(Request $request, $id)
    {
        if (isset($request->old_password)){
            $user = User::findOrFail($id);
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|min:8|max:20|different:password',
            ]);
            if (Hash::check($request->old_password, $user->password)) {
                $user->fill([
                    'password' => Hash::make($request->new_password)
                ])->save();
                return redirect(route('profile-setting.index'))->with('success','رمز عبور شما با موفقیت تغییر یافت.');
            } else {
                return redirect(route('profile-setting.index'))->with('error','خطا در تغییر رمز عبور، لطفا ورودی های خود را بررسی کنید.');
            }
        }else{
            $request->validate([
                'first_name' => ['required', 'string', 'max:191'],
                'last_name' => ['required', 'string', 'max:191'],
                'country' => ['string', 'nullable', 'max:191'],
                'state' => ['string', 'nullable', 'max:191'],
                'city' => ['string', 'nullable', 'max:191'],
                'about' => ['string', 'nullable', 'max:500'],
            ]);
            if (User::where('id', $id)->update([
                'name' => $request['first_name']." ".$request['last_name'],
                'country' => $request['country'],
                'state' => $request['state'],
                'city' => $request['city'],
                'about' => $request['about'],
            ])){
                return redirect()->back()->with('done','اطلاعات شما با موفقیت تغییر یافت.');
            }else{
                return redirect()->back()->with('notdone','خطا، ویرایش اطلاعات انجام نشد!');
            }
        }
    }
}
