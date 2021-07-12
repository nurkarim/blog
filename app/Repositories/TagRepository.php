<?php
namespace App\Repositories;

use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Carbon;
class TagRepository
{
    public function create($request)
    {
        try {
            $save               = new Tag();
            $save->language     = $request->language;
            $save->title        = $request->name;
            if ($request->slug != null) :
                $save->slug     = $request->slug;
            else :
                $save->slug     = $this->make_slug($request->title);
            endif;
            $save->view_order   = $request->view_order;
            $save->save();
            return true;
        }catch (QueryException $e){
            return $e->getMessage();
        }
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
