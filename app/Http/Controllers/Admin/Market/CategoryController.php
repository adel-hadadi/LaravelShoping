<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Market\CategoryRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Market\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::orderBy('created_at', 'desc')->simplePaginate(15);
        return view('admin.market.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::where('parent_id', null)->get();
        return view('admin.market.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request, ImageService $imageService)
    {
        $inputs = $request->all();

        if ($request->hasFile('img')) {

            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'product-category');
            // $result = $imageService->save($request->file('img'));
            $result = $imageService->createInexAndSave($request->file("img"));

        }
        if ($result == false) {
            return redirect()->route('admin.content.category.index')->with('swal-error', 'آپلود تصویر با خطا مواجخ شد');
        }
        $inputs['img'] = $result;

        ProductCategory::create($inputs);

        return redirect()->route('admin.market.category.index')->with('swal-success', 'دسته بندی با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $categories = ProductCategory::all();
        return view('admin.market.category.edit', compact('productCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, ProductCategory $productCategory, ImageService $imageService)
    {
        $inputs = $request->all();
        if ($request->hasFile('img')) {

            if (!empty($productCategory->img)) {
                $imageService->deleteDirectoryAndFiles($productCategory->img['directory']);
            }
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'product-category');
            $result = $imageService->createInexAndSave($request->file('img'));
            if ($result == false) {
                return redirect()->route('admin.market.category.index')->with('swal-error', 'آپلود تصویر با خطا مواجخ شد');
            }
            $inputs['img'] = $result;
        } else {
            if(isset($inputs['currentImage']) && !empty($productCategory->img)){
                $image = $productCategory->img;
                $image['currentImage'] = $inputs['currentImage'];
                $inputs['img'] = $image;
            }
        }

        $productCategory->update($inputs);
        return redirect()->route('admin.market.category.index')->with('swal-success', 'دسته بندی با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return redirect()->route('admin.market.category.index')->with('swal-success', 'دسته بندی با موفقیت حذف شد');
    }

    public function status(ProductCategory $productCategory)
    {
        $productCategory->status = $productCategory->status == 0 ? 1 : 0;
        $result = $productCategory->save();

        if ($result) {
            if ($productCategory->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
    
    public function showInMenu(ProductCategory $productCategory)
    {
        $productCategory->show_in_menu = $productCategory->show_in_menu == 0 ? 1 : 0;
        $result = $productCategory->save();

        if ($result) {
            if ($productCategory->show_in_menu == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}
