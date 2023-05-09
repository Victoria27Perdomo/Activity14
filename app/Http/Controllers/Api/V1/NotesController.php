<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Notes;
use App\Http\Requests\V1\StoreNotesRequest;
use App\Http\Requests\V1\UpdateNotesRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\NotesResource;
use App\Http\Resources\V1\NotesCollection;
use Illuminate\Http\Request;
use App\Filters\V1\NotesFilter;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new NotesFilter();
        $filterItems = $filter->transform($request); //[['column', 'operator', 'value']]

        if(count($filterItems) == 0){
            return new NotesCollection(Notes::paginate());
        }else{
            $notesFilter = Notes::where($filterItems)->paginate();
            return new NotesCollection($notesFilter->append($request->query()));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotesRequest $request)
    {
        return new NotesResource(Notes::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Notes $notes)
    {
        return new NotesResource($notes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotesRequest $request, Notes $notes)
    {
        $notes->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notes $notes)
    {
        //
    }
}
