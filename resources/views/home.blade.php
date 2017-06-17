@extends('layouts.main')

@section('content')


<div class="row">
  <div class="col-sm-6">
 <section class="panel">
   <header class="panel-heading">
                              Add Student
                          </header>
                          
                          <div class="panel-body">
                            <div class="form">
                            {!! Form::open(['url' => '/add','class'=>'form-horizontal form-validate','id'=>'addStudent']) !!}
    

    {!! csrf_field() !!}
 
                                  <div class="form-group"> 
                                   
                                          <label for="name" class="control-label col-lg-3"> Name <span class="text-danger">*</span></label>
                                          <div class="col-lg-9">
                                               {{ Form::text('name', '', array('class' => 'form-control','placeholder'=>'Name' ,'id'=>'name')) }}
                                                    
                                                     @if ($errors->has('name'))
                                            <span class="error">{{ $errors->first('name') }}</span>
                                                   @endIf
                                          </div>
                                         </div>
               

                                    
                                  <div class="form-group"> 
                                  
          <label for="city" class="control-label col-lg-3">City <span class="text-danger">*</span></label>
          <div class="col-lg-9">
                    {{ Form::text('city', '', array('class' => 'form-control','placeholder'=>'City')) }}
                     @if ($errors->has('city'))
            <span class="error">{{ $errors->first('city') }}</span>
        @endIf
</div>
                                   </div>
                                  

                                  <div class="col-lg-offset-3 col-lg-6">
                                    {{Form::submit('Add Student',array('class'=>'btn btn-primary btn-save','name'=>'sub','value'=>'','id'=>''))}}
                                     </div>
                              {!! Form::close() !!}

                            </div>
                          </div>
                      </section>                       
                  </div>
                  <div class="col-sm-6">
                      <section class="panel">
                          
                           <table class="table table-striped table-advance table-hover">
                           
                              <tr>
                                 <th><i class="icon_profile"></i>  Name</th>
                                  
                                 <th><i class="icon_pin_alt"></i> City</th>
                                
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                             <tbody id="studentsList">
                               @foreach ($student as $students)
            <tr id="students{{$students->id}}">
             <td>{{ucfirst($students->name)}}</td>
              
              <td>{{ucfirst($students->city)}}</td> 
              <td>
            <div class="btn-group">
                                      <button class="btn btn-primary open_modal" value="{{$students->id}}"><i class="icon_plus_alt2"></i></button> 
                                      <button class="btn btn-danger delete-student" value="{{$students->id}}"><i class="icon_close_alt2"></i></button>
                                  </div> 
              </td>
            </tr>
            @endforeach
                               
                               
                           </tbody>
                        </table>
                      </section>                   
                  </div>
              </div>







 
                       


  <!-- Modal -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Student List</h4>
                                          </div>
                                          <div class="modal-body">
 
                    {!! Form::open(['url' => '/edit','class'=>'form-horizontal form-validate','id'=>'editForm']) !!}
          
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control" id="stname" name="name" placeholder="Name" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">City <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" value="">
                    </div>
                </div>
               {!! Form::close() !!}

                                          </div>
                                          <div class="modal-footer">
                                            <input type="hidden" id="student_id" name="student_id" value="0">
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                              <button type="button" class="btn btn-primary btn-save" value="update">Save changes</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                  
                              <!-- modal -->

@endsection
