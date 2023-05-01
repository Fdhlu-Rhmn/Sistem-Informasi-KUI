<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Inbound;
use Illuminate\Http\RedirectResponse;
use PhpParser\Node\Expr\PostDec;
use Illuminate\View\View;
use App\Models\Outbound;
use App\Models\StudentInbound;
use App\Models\StudentOutbound;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $dataInbound = StudentInbound::all();
        $dataOutbound = StudentOutbound::all();
        $inbounds = Inbound::all();
        $outbounds = Outbound::all();

        return view('dashboard', [
            'posts' => $posts,
            'dataInbound' => $dataInbound,
            'dataOutbound' => $dataOutbound,
            'inbounds' => $inbounds,
            'outbounds' => $outbounds
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}