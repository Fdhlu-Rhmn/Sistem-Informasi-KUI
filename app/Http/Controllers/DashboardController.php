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
    public function __invoke()
    {
        $posts = Post::all();
        $dataInbound = StudentInbound::paginate(5);
        $dataOutbound = StudentOutbound::paginate(5);
        $inbounds = Inbound::paginate(5);
        $outbounds = Outbound::paginate(5);
        $postTable = Post::paginate(5);
        
        $angkatan = $posts->groupBy("Angkatan");
        $country = $posts->groupBy("Negara_Asal");
        $fakultas = $posts->groupBy("Fakultas_Prodi");

        return view('dashboard', [
            'posts' => $posts,
            'postTable' => $postTable,
            'dataInbound' => $dataInbound,
            'dataOutbound' => $dataOutbound,
            'inbounds' => $inbounds,
            'outbounds' => $outbounds,
            'angkatan' => $angkatan,
            'country' => $country,
            'fakultas' => $fakultas
        ]);
    }
}