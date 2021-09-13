<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitePodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Podcast::with('album')->orderBy('created_at', 'desc')->paginate(10);
        $lastPodcast = Podcast::with('album')->orderBy('download_count', 'desc')->first();
        return view('layouts.podcast', compact('podcasts', 'lastPodcast'));
    }

    public function update(Request $request)
    {
        $file = $request['file'];
        DB::table('podcasts')
            ->where('id', $request['id'])
            ->update([
                'download_count' => DB::raw('download_count + 1'),
            ]);
        return redirect()->back();
    }
}
