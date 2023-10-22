<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadCatalog($id)
    {
        $catalog = Catalog::find($id);
        return response()->download(storage_path('/app/public/' . $catalog->file));
    }
}
