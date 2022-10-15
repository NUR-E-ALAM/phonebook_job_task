<?php

namespace App\Http\Controllers;

use App\Models\PhoneBook;
use App\Models\User;
use App\Models\ContactNumber;
use App\Models\ContactEmails;
use Illuminate\Http\Request;
use App\Lib\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Contracts\DataTable;

class PhoneBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {

        if ($request->ajax()) {
            return datatables(PhoneBook::query()->where('user_id', Auth::id())->orderBy('id','desc')->with('contact_phones', 'contact_emails'))->toJson();
            // return datatables(DB::table('phone_books')->where('user_id', Auth::id())->orderBy('id','desc'))->toJson();



        }



        //    dd($a);exit;
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email.*' => 'required|email',
            'phone.*' => 'required|min:11|numeric',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $photos = Image::store('photo', 'upload/photos');
        } else {
            $photos = 'image-not.jpg';
        }
        $data = new PhoneBook;
        $data->user_id = Auth::id();
        $data->name = $request->name;
        $data->photo = $photos;
        $data->favorite = $request->favorite;

        if ($data->save()) {
            $phonos = [];

            for ($i = 0; $i < count($request->phone); $i++) {
                $phonos[] = [
                    'phonebook_id' => $data->id,
                    'phone_no' => $validated['phone'][$i],
                ];
            }

            $emails = [];

            for ($i = 0; $i < count($request->email); $i++) {
                $emails[] = [
                    'phonebook_id' => $data->id,
                    'email' => $validated['email'][$i],
                ];
            }

            // var_dump($educations);exit;

            ContactNumber::insert($phonos);
            ContactEmails::insert($emails);
            $data['success'] = 1;
            $data['message'] = 'Form Uploaded Successfully!';
        }

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneBook $phoneBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phoneBook = PhoneBook::with('contact_phones', 'contact_emails')->where('id', $id)->first();
        // return response()->json($phoneBook);
        return view('edit', compact('phoneBook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhoneBook $phoneBook)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email.*' => 'required|email',
            'phone.*' => 'required|min:11|numeric',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $phoneBook = PhoneBook::with('contact_phones', 'contact_emails')->where('id', $request->id)->first();

        try {

            DB::transaction(function () use ($request, $validated, $phoneBook) {
                if ($request->hasFile('photo')) {
                    \App\Lib\Image::delete($phoneBook->photo, 'photos');
                    $photos = Image::store('photo', 'upload/photos');
                } else {
                    $photos = $phoneBook->photo;
                }
                $phone =  $phoneBook->update([
                    'name' => $request->name,
                    'favorite' => $request->favorite,
                    'photo' => $photos,
                ]);
                // PhoneBook::where('id',3)->update(['title'=>'Updated title']);

                $phones = [];

                for ($i = 0; $i < count($request->phone); $i++) {
                    $phones[] = [
                        'phone_no' => $validated['phone'][$i],
                    ];
                }
                if (count($phones)) {
                    $phoneBook->contact_phones()->delete();
                    $phoneBook->contact_phones()->createMany($phones);
                }

                $emails = [];

                for ($i = 0; $i < count($request->email); $i++) {
                    $emails[] = [
                        'email' => $validated['email'][$i],
                    ];
                }
                if (count($emails)) {
                    $phoneBook->contact_emails()->delete();
                    $phoneBook->contact_emails()->createMany($emails);
                }
            });

            $data['success'] = 1;
            $data['message'] = 'Form Uploaded Successfully!';

            return response()->json($data);
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phoneBook = PhoneBook::where('id', $id)->first();
       $phone = $phoneBook->delete();
       $data['phone'] = $phone;
       $data['success'] = 1;
       $data['message'] = 'Phone Book Deleted Successfully!';

       return response()->json($data);
    }

    public function favorite($id)
    {
        $phoneBook = PhoneBook::where('id', $id)->first();

         $favorite = $phoneBook->favorite == 1? null:1;
        PhoneBook::where('id', $id)->update(['favorite' => $favorite]);
        $data['success'] = 1;
        $data['message'] = 'Favorite Updated Successfully!';

        return response()->json($data);
    }
}
