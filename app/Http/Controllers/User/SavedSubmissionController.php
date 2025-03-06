<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Homeservice;
use App\Models\Honey;
use App\Models\HouseListing;
use App\Models\Logistics;
use App\Models\Partnership;
use Illuminate\Http\Request;

class SavedSubmissionController extends Controller
{
    function index(){
        $honey = Honey::where('saved', 'yes')->get();
        $houseListings = HouseListing::where('saved', 'yes')->get();
        $homeServices = Homeservice::where('saved', 'yes')->get();
        $logistics = Logistics::where('saved', 'yes')->get();
        $partnerships = Partnership::where('saved', 'yes')->get();

        $savedItems = collect()
            ->merge($honey)
            ->merge($houseListings)
            ->merge($homeServices)
            ->merge($logistics)
            ->merge($partnerships);
            return view('user.savedsubmission', compact('savedItems'));
    }

    public function destroy(Request $request) {
        $models = [Honey::class, HouseListing::class, Homeservice::class, Logistics::class, Partnership::class];

        foreach ($models as $model) {
            $item = $model::find($request->id);
            if ($item) {
                $item->delete();
                return redirect()->back()->with('success', 'Item deleted successfully.');
            }
        }

        return redirect()->back()->with('error', 'Item not found.');
    }

    public function uploadSavedSubmission($id) {
        $item = $this->findItemById($id);

        if ($item) {
            $item->saved = null;
            $item->save();

            return redirect()->back()->with('success', 'Submission uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Item not found.');
    }

    private function findItemById($id) {
        $models = [Honey::class, HouseListing::class, Homeservice::class, Logistics::class, Partnership::class];

        foreach ($models as $model) {
            $item = $model::find($id);
            if ($item) {
                return $item;
            }
        }

        return null;
    }


}
