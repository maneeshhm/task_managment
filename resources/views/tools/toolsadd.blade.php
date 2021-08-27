{{-- admin page --}}
@extends('layouts.adminLayout')

{{-- add new tools --}}
@section('content')
        
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header bg-info text-white">{{ __('Add Tool') }}</div>
      
                      <div class="card-body">
                        <form action="{{ route('addtool') }}" method="post" enctype="multipart/form-data">
                          {{-- {{csrf_field()}} --}}
                              @csrf
      
                              <div class="form-group row">
                                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tool Name') }}</label>
      
                                  <div class="col-md-6">
                                    <input type="text" class="form-control" name="tool_name" placeholder="Tool Name">
                                  </div>
                              </div>

                              <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tool Category') }}</label>
    
                                <div class="col-md-6">
                                  <select type="text" class="form-control" name="tool_category">
                                    <option value="1">Hand Tool</option>
                                    <option value="2">Power Tool</option>
                                    <option value="3">Electric Tool</option>
                                    <option value="4">Heavy Tool</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tool Quality') }}</label>
    
                                <div class="col-md-6">
                                  <select type="text" class="form-control" name="tool_quality">
                                    <option value="1">Excellent</option>
                                    <option value="2">Good</option>
                                    <option value="3">Bad</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tool Price') }}</label>
    
                                <div class="col-md-6">
                                  <input type="text" class="form-control" name="tool_price" placeholder="Tool Price">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tool Quantity') }}</label>
    
                                <div class="col-md-6">
                                  <input type="text" class="form-control" name="tool_quantity" placeholder="Tool Quantity">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
    
                                <div class="col-md-6">
                                  <input type="file" class="form-control-file" id="image" name="image">
                                </div>
                              </div>
                      
      
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">AddTool</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
@endsection