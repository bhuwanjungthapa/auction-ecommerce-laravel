<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Brand;
use App\Models\Backend\Vehicle;
use App\Models\Backend\VehicleImage;
use App\Models\Backend\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends BackendBaseController
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
        $data['vehicletypes']= VehicleType::pluck('title','id');
        $data['brands']= Brand::pluck('title','id');
        return view($this->__loadDataToView($this->base_view .'create'),compact('data'));
    }
    public function store(Request $request)
    {
        // dd($request);
        try{
            //DB::beginTransaction();
            $request->request->add(['stock'=>$request->quantity ]);
            $request->request->add(['created_by'=>auth()->user()->id]);
            $record=$this->model::create($request->all());
            if($record)
            {

                //for product images table
                $vehicle_image_data['vehicle_id']=$record->id;
                $image_files=$request->file('image_file');
                $image_titles  =$request->input('image_title');
                for($i=0;$i<count($image_files);$i++)

                {
                    $vehicle_image_data['title']=$image_titles[$i];
                    $vehImage = $image_files[$i ];
                    $image_name = uniqid() . '_' . $vehImage ->getClientOriginalName();
                    $vehImage->move('images/vehicles/',$image_name);
                    $vehicle_image_data ['name']= $image_name;
                    VehicleImage::create($vehicle_image_data );
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
        //$data['record'] = $this->model::all();
        $data['record'] = $this->model::find($id);
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        return view($this->__loadDataToView($this->base_view.'show'),compact('data'));
    }
    public function edit($id)
    {
        $data['vehicleimage']= VehicleImage::pluck('title','id','name','vehicle_id');
        $data['vehicletypes']= VehicleType::pluck('title','id');
        $data['brands']= Brand::pluck('title','id');
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
            $data = $this->model->find($id);
            request()->request->add(['updated_by'=>auth()->user()->id]);
            if(!$data)
            {
                request()->session()->flash('error','Error: Invalid Request');
                return redirect()->route($this->__loadDataToView($this->base_route.'index'));
            }
            if ($data->update($request->all())){
                $request->session()->flash('success','Updated Successfully!!');
            }else{
                $request->session()->flash('error','Update Failed!!');
            }
        }catch(\Exception $exception){
            $request->session()->flash('error','Error: ' . $exception->getMessage());
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
            else
            {
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
