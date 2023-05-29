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
use App\Models\Pending;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $posts = Post::all();
        $dataInbound = StudentInbound::all();
        $dataOutbound = StudentOutbound::all();
        $inbounds = Inbound::all();
        $outbounds = Outbound::all();
        $pendings = Pending::all();


        $postTable = Post::paginate(5);
        $dataInboundTable = StudentInbound::paginate(5);
        $dataOutboundTable = StudentOutbound::paginate(5);
        $inboundsTable = Inbound::paginate(5);
        $outboundsTable = Outbound::paginate(5);

        $angkatan = $posts->groupBy("Angkatan");
        $country = $posts->groupBy("Negara_Asal");
        $fakultas = $posts->groupBy("Fakultas_Prodi");

        return view('dashboard', [
            'posts' => $posts,
            'dataInbound' => $dataInbound,
            'dataOutbound' => $dataOutbound,
            'inbounds' => $inbounds,
            'outbounds' => $outbounds,
            'pendings' => $pendings,

            'postTable' => $postTable,
            'dataInboundTable' => $dataInboundTable,
            'dataOutboundTable' => $dataOutboundTable,
            'inboundsTable' => $inboundsTable,
            'outboundsTable' => $outboundsTable,

            'angkatan' => $angkatan,
            'country' => $country,
            'fakultas' => $fakultas
        ]);
    }
}