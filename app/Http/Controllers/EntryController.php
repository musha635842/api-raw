<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use App\Http\Resources\EntryResource;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EntryController extends Controller
{
    public function list(Request $request)
    {
        if (!empty($request['orderBy'])){
            return Entry::select('name', 'photo1_link', 'price')->orderBy($request['orderBy'], $request['order'])->paginate(10);
        }
        else {
            return Entry::select('name', 'photo1_link', 'price')->paginate(10);
        }   
    }

    public function entry(Request $request)
    {
        if (!empty($request['fields'])){
            $parameters = array(explode('&', $_SERVER['QUERY_STRING']));
          // return $options[0];
            $options = $parameters[0];
            $key1 = array_search('fields=photo2_link', $options, true);
            $key2 = array_search('fields=photo3_link', $options, true);
            $key3 = array_search('fields=description', $options, true);
            return Entry::select('name', 'photo1_link', substr($options[$key1], 7), substr($options[$key2], 7), 'price', substr($options[$key3], 7))->where('id', '=', $request['id'])->get();
        }
        else {
            return Entry::select('name', 'photo1_link', 'price')->where('id', '=', $request['id'])->get();
        }
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:200',
            'description' => 'required|max:1000',
            'photo4_link' => 'max:0', 
        ]);

       $entry = Entry::create([
        'name' => $request['name'],
        'price' => $request['price'],
        'photo1_link' => $request['photo1_link'],
        'photo2_link' => $request['photo2_link'],
        'photo3_link' => $request['photo3_link'],
        'description' => $request['description']
        ]);

return $entry->id;
    }

    public function show($id)
    {
        $entry = Entry::findOrFail($id);

        return Inertia::render('EntryPage', [
            'entry' => $entry,
        ]);
    }
}