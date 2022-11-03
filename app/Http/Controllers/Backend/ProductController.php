<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Vehicle;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\Subcategory;
use App\Models\Backend\Product;
use App\Models\Backend\Productimage;
use App\Models\Backend\Option;
use App\Models\Backend\Tag;
use App\Models\Backend\OptionProduct;
use Illuminate\Support\Facades\DB;
class ProductController extends BackendBaseController
{
    protected $base_route = 'backend.vehicle.';
    protected $base_view = 'backend.vehicle.';
    protected $module = 'Vehicle';
    public function __construct()
    {
        $this->model= new Vehicle();
    }
    public function index()
    {
        $data['records'] = $this->model::all();
        return view($this->__loadDataToView($this->base_view.'index'), compact('data'));

    }
    public function create()
    {
        $data['vehicletype']= Category::pluck('title', 'id');
        $data['vehicle']= Subcategory::pluck('title','id');
        return view($this->__loadDataToView($this->base_view .'create') ,compact('data'));
    }
    public function store(Request $request)
    {
       // dd($request);
      try{
            $request->validate([
                'title'=>'required',
                'slug'=>'required',
                'price'=>'required'
            ]);
            //DB::beginTransaction();
            $request->request->add(['stock'=>$request->quantity ]);
            $request->request->add(['created_by'=>auth()->user()->id]);
            $record=$this->model::create($request->all());
            if($record)
            {
                //for product_tags table
                $record->tags()->attach($request->input('tag_id'));
                //for product_ options table
                $options_ids=$request->input('options_id');
                $option_values =$request->input('attribute_value');
                $product_options_data['product_id']=$record->id;
                for($i=0;$i<count($option_values);$i++)
                {
                    if(!empty($options_ids[$i])&& !empty($option_values[$i]))
                    {
                        $product_options_data['option_id']=$options_ids[$i];
                        $product_options_data['attribute_value']=$option_values[$i];
                        OptionProduct::create($product_options_data);
                    }
                }
                //for product images table
                $product_image_data['product_id']=$record->id;
                $image_files=$request->file('image_file');
                $image_titles  =$request->input('image_title');
                for($i=0;$i<count($image_files);$i++)
                {
                    $product_image_data['title']=$image_titles[$i];
                    $pimage = $image_files[$i ];
                    $image_name = uniqid() . '_' . $pimage ->getClientOriginalName();
                    $pimage->move('images/products/',$image_name);
                    $product_image_data ['name']= $image_name;
                    Productimage::create($product_image_data );
                }
                request()->session()->flash('success',($this->__loadDataToView($this->module))."Created");
            }else{
                request()->session()->flash('error',($this->__loadDataToView($this->module))."Creation Failed ");

            }
            DB::commit();
        }
        catch(\Exception $exception){
            request()->session()->flash('error',"Error:".$exception->getMessage());
            DB::rollBack();
        }

        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
     }
    public function show($id)
    {
        $data['record'] = $this->model::find($id);
        if(!$data['record' ]){
         request()->session()->flash('error',"Error:Invalid Request");
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));

        }
        return view($this->__loadDataToView($this->base_view.'show'),compact('data'));
    }
    public function edit($id)
    {
        $data['categories']= Category::pluck('title','id');
        $data['record'] = $this->model::find($id);
        if(!$data['record' ]){
         request()->session()->flash('error',"Error:Invalid Request");
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));

        }
        return view($this->__loadDataToView($this->base_view.'edit '),compact('data'));
    }
    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'title'=>'required',
                'slug'=>'required',
                'price'=>'required'
            ]);
            $data['record']=$this->model::find($id);
             if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
           return redirect()->route($this->__loadDataToView($this->base_route.'index'));

        }
            $request->request->add(['updated_by'=>auth()->user()->id]);
            $record=$data['record']->update($request->all());
            if($record)
            {
                request()->session()->flash('success',($this->__loadDataToView($this->module))."Updated");
            }else{
                request()->session()->flash('error',($this->__loadDataToView($this->module))."Updation Failed ");

            }
        }
        catch(\Exception $exception){
            request()->session()->flash('error',"Error:".$exception->getMessage());

        }

        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
    public function destroy($id)
    {
        $data['record']=$this->model::find($id);
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
           return redirect()->route($this->__loadDataToView($this->base_route.'index'));

        }
        if($data["record"]->delete())
        {
            request()->session()->flash('success',"Successfully Deleted");

        }else{
            request()->session()->flash('error',"Error:Delete Failed ");

        }
       return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
    public function trash()
    {
        $data['records'] = $this->model::onlyTrashed()->get();
        return view($this->__loadDataToView($this->base_view.'trash'), compact('data'));


    }
    public function restore(Request $request, $id)
    {
        try{
            $data['record']=$this->model::onlyTrashed()->where('id',$id)->first();
            if(!$data['record'])
            {
                request()->session()->flash('error',"Error:Invalid Request");
                return redirect()->route($this->__loadDataToView($this->base_route."index"));
            }
                if($data['record'])
                {
                $data['record']->restore();
                request()->session()->flash('success',"Restored Successfully");

                }
                else{
                request()->session()->flash('error',"Updation Failed");

                }

        }
            catch(Exception $exception)
            {
                request()->session()->flash('error',"Error:".$exception->getMessage());

            }
            return redirect()->route($this->__loadDataToView($this->base_route."index"));


    }
    public function permanentDelete($id)
    {
        $data['record']=$this->model::onlyTrashed()->where('id',$id)->first();
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
           return redirect()->route($this->__loadDataToView($this->base_route.'index'));

        }
        if($data["record"]->forceDelete())
        {
            request()->session()->flash('success',"Successfully Deleted");

        }else{
            request()->session()->flash('error',"Error:Delete Failed ");

        }
       return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
}
