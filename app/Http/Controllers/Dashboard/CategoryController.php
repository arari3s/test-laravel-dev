<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Category::query()->latest();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block bg-sky-500 text-white rounded-md px-4 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-sky-700 focus:outline-none focus:shadow-outline" href="' . route('dashboard.category.edit', $item->id) .
                        '">
                            Edit
                        </a>

                        <form class="inline-block" action="' .
                        route('dashboard.category.destroy', $item->id) .
                        '" method="POST">
                            <button class="border bg-red-500 text-white rounded-md px-2 py-1 m-1 font-semibold transition duration-500 ease select-none hover:bg-red-700 focus:outline-none focus:shadow-outline" >
                                Delete
                            </button>
                            ' .
                        method_field('delete') .
                        csrf_field() .
                        '
                        </form>
                    ';
                })

                ->editColumn('description', function ($item) {
                    return strip_tags($item->description);
                })

                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();

        Category::create($data);

        return redirect()->route('dashboard.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->all();

        $category->update($data);

        return redirect()->route('dashboard.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('dashboard.category.index');
    }
}
