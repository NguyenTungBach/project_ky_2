<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function getAll(){
        $totalItem = Product::where('status','!=',0);
        $limit = 9;
        $items = Product::orderBy('created_at','DESC')->where('status','!=',0)->paginate($limit);
        return view('admin.template.product.products', ['items'=>$items,
            'limit'=>$limit,
            'totalItem'=>$totalItem,
            'categories' => Category::withCount('products')->get()]);
    }

    public function getForm()
    {
        return view('admin.template.product.create', [
            'categories' => Category::withCount('products')->get()
        ]);
    }

    public function create(StoreProductRequest $request){
        $request->request->add([
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        try {
            $product = new Product($request->all());
            $product->save();
            Session::flash('message', 'Tạo mới sản phẩm thành công');
        }catch (\Exception $e){
            Session::flash('message', 'Tạo mới sản phẩm thất bại');
        }
        return redirect('admin/products');
    }
    public function getDetail($id){
        return view('admin.template.product.detail',['item' =>Product::find($id)]);
    }


    public function getInformation($id){
        return view('admin.template.product.update',['item' =>Product::find($id),'categories' => Category::withCount('products')->get()]);
    }

    public function update(StoreProductRequest $request){
        $request->request->remove("_token");
        $id = $request->get('id');
        $request->request->remove('id'); // xóa id, nếu để id sẽ bị update cho updated_at sẽ sinh ra lỗi
        $request->request->add([
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        try {
            $product = Product::find($id);
            $product->update($request->all());
            Session::flash('message', "Cập nhật sản phẩm có id= $id, thành công");
        } catch (\Exception $e){
            Session::flash('message', "Cập nhật sản phẩm có id= $id, thất bại");
        }
        return redirect('admin/products');
    }

    public function getConfirmDelete($id){
        return view('admin.template.product.delete',['item' =>Product::find($id)]);
    }

    public function delete(Request $request)
    {
        $id = $request->get('id');
        try {
            $product = Product::find($id);
            $product->deleted_at = Carbon::now('Asia/Ho_Chi_Minh');
            $product->status = 0;
            $product->save();
            Session::flash('message', "Xóa sản phẩm có id= $id, thành công");
        } catch (\Exception $e) {
            Session::flash('message', "Xóa sản phẩm có id= $id, thất bại");
        }
        return redirect('admin/products');
    }

    public function search(Request $request)
    {
        $totalItem = Product::where('status','!=',0); // tính tổng số item
        try {
            $paginate = 9;
            $products = Product::query()
                ->name($request)
                ->price($request)
                ->cate($request)
                ->sortByName($request)
                ->sortByPrice($request)
                ->status($request);
//        return $products;
            return view('admin.template.product.products', [
                'totalItem'=>$totalItem,
                'items' => $products->paginate($paginate),
                'oldName' => $request->get('name'),
                'oldPrice' => $request->get('price'),
                'limit' => $paginate,
                'sumProduct' => $products->count(),
                'priceSort' => $request->get('priceSort'),
                'status' => $request->get('status'),
                'nameSort' => $request->get('nameSort'),
                'oldCategory' => $request->get('categories'),
                'categories' => Category::withCount('products')->get(),
            ]);
        }
        catch (\Exception $exception){
            return $exception;
        }

    }
}
