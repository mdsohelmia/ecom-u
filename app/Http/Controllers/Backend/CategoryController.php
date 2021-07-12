<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $path = '';

    public function __construct()
    {
        $this->path = public_path('uploads/category');
    }

    /**
     * Display a listing of the Categories.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {


        return view('backend.category.index', [
            'categories' => Category::latest()->simplePaginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $data = $request->only(['name', 'description']);

        $image = $request->file('image');
        $icon = $request->file('icon');

        if ($image && $image->isValid()) {
            $file_name = uniqid('category_', true) . '.' . $image->getClientOriginalExtension();
            $image->move($this->path . '/image', $file_name);
            $data['image'] = $file_name;
        }

        if ($icon && $icon->isValid()) {
            $icon_name = uniqid('icon_', true) . '.' . $icon->getClientOriginalExtension();
            $icon->move($this->path . '/icon', $icon_name);
            $data['icon'] = $icon_name;
        }
        $data['slug'] = Str::slug($request->input('name'));
        $data['created_by'] =auth()->user()->id;
        $data['updated_by'] =auth()->user()->id;
        Category::create($data);

        return  back();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
