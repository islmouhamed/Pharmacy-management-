<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\noteRequest;
    use App\note;

    class noteController extends Controller
    {
        public function index()
        {
            $notes = note::latest()->get();
            return response()->json($notes);
        }
        public function store(noteRequest $request)
        {
            $note = note::create($request->all());
            return response()->json($note, 201);
        }
        public function show($id)
        {
            $note = note::findOrFail($id);
            return response()->json($note);
        }
        public function update(noteRequest $request, $id)
        {
            $note = note::findOrFail($id);
            $note->update($request->all());
            return response()->json($note, 200);
        }
        public function destroy($id)
        {
            note::destroy($id);
            return response()->json(null, 204);
        }
    }