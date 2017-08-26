@extends('user.user_layout')
 
@section('title')
  MMI Blank
@endsection

@section('style')

 <!-- Bootstrap Core CSS -->
    <link href="{{ asset('templates/template-1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('floating-labels/floating-labels.js') }}"></script>

     <link rel="stylesheet" href="{{ asset('floating-labels/floating-labels.css') }}">
     {{-- <link rel="stylesheet" href="{{ asset('gridcss/col.css') }}"> --}}


    <script src="{{ asset('closing_form.js') }}"></script>
    
@endsection


 

@section('content')

<br />
 <section  id="content">
      <div class="col-lg-6">
                         <div class="row control-group">
                            <div class="form-group span4 col-xs-3 floating-label-form-group controls">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last name" id="lastname" required data-validation-required-message="Please enter your lastname address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group span4 floating-label-form-group controls">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" placeholder="First name" id="firstname" required data-validation-required-message="Please enter your lastname address.">
                                <p class="help-block text-danger"></p>
                            </div> 
                            <div class="form-group span4 floating-label-form-group controls">
                                <label for="middlename">Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle name" id="middlename" required data-validation-required-message="Please enter your lastname address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="form-group span4 col-xs-12 floating-label-form-group controls">
                                <label for="name">Gender</label>
                                <select class="form-control input-lg" name="course_id" required>
                                    <option value="">Select Gender</option>
                                    <option v-for="gender in genders" :value="gender.id">@{{ gender.name}}</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group span4 col-xs-12 floating-label-form-group controls" {{-- style="border: 1px solid white" --}}>
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" placeholder="Birthday" name="birthday" required data-validation-required-message="Please enter your birthday.">
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group span4 col-xs-12 floating-label-form-group controls" {{-- style="border: 1px solid white" --}}>
                                <label for="birthdayplace">Birth Place</label>
                                <input type="text" class="form-control" placeholder="Birth Place" name="birthplace" required data-validation-required-message="Please enter your birthplace.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <div class="row control-group">
                            <div class="form-group span5 col-xs-12 floating-label-form-group controls">
                                <label for="name">Civil Status</label>
                                {{-- <select class="form-control input-lg" name="course_id" required v-model="csid" :change="checkSingle()"> --}}
                                <select class="form-control input-lg" name="course_id" id="civilstatus">
                                    <option value="">Select Civil Status</option>
                                    <option v-for="cs in civilstatus" :value="cs.id">@{{cs.name}}</option>
                                    <option v-for="cs in civilstatus" :value="cs.id" id="Single">Single</option>
                                    <option v-for="cs in civilstatus" :value="cs.id" id="Married">Married</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                         
                       {{--  <transition name="slide-fade"> --}}
                            <div id="married_form" v-if="show" style="display: none;">
                                <div class="row control-group">
                                    <div class="form-group span4 col-xs-12 floating-label-form-group controls">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" placeholder="Spouse/Husband Lastname" id="lastname" required data-validation-required-message="Please enter your lastname address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group span4 col-xs-12 floating-label-form-group controls">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" placeholder="Spouse/Husband Firstname" name="firstname" required data-validation-required-message="Please enter your firstname address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group span4 col-xs-12 floating-label-form-group controls">
                                        <label for="middlename">Middlename</label>
                                        <input type="text" class="form-control" placeholder="Spouse/Husband Middlename" name="middlename" required data-validation-required-message="Please enter your middlename address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>

                               
                            </div>
                        {{-- </transition> --}}

                       
                        <div class="row control-group">
                            <div class="form-group span12 col-xs-12 floating-label-form-group controls">
                                <label for="admission_id">Admission Type</label>
                                <select class="form-control input-lg" >
                                    <option value="">Select Admission Type</option>
                                    <option v-for="admission in admissions"> @{{ admission.name }} </option>
                                </select>
                            </div>
                        </div>

                       
                        <div class="row control-group">
                            <div class="form-group span12 col-xs-12 floating-label-form-group controls">
                                <label for="admission_id">School Year</label>
                                <select class="form-control input-lg" name="admission_id">
                                    <option value="">Select School Year</option>
                                    <option v-for="sy in schoolyears" :value="sy.id">@{{ sy.name }}</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group span12 col-xs-12 floating-label-form-group controls">
                                <label for="name">Course</label>
                                <select class="form-control input-lg" name="course_id">
                                  <option value="">Select Course</option>
                                     <option v-for="course in courses" :value="course.id">@{{ course.name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group span12 col-xs-12 floating-label-form-group controls">
                                <label for="semester">Semester</label>
                                <select class="form-control input-lg" name="semester">
                                    <option value="">Select Semester</option>
                                     <option v-for="semester in semesters" :value="semester.id">@{{ semester.name }}</option>
                                </select>
                            </div>
                        </div>

                         <div class="row control-group">
                            <div class="form-group span12 col-xs-12 floating-label-form-group controls">
                                <label for="name">Schedule</label>
                                <select class="form-control input-lg" name="course_id">
                                    <option value="">Select Schedule</option>
                                    <option v-for="schedule in schedules">@{{ schedule.days + ' ' +schedule.start_time + '-' + schedule.end_time}}</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        
                </div><!-- col-lg-6 -->
               <div class="col-lg-6">
                        <div class="row control-group">
                            <div class="form-group span12 col-xs-12 floating-label-form-group controls">
                                <label for="emergency">In case of emergency notify </label>
                                <input type="text" class="form-control" placeholder="In case of emergency notify (Enter Name) " name="middlename" required data-validation-required-message="Please enter emergency Name & Contact Number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group span12 col-xs-12 floating-label-form-group controls">
                                <label for="emergency">In case of emergency notify </label>
                                <input type="text" class="form-control" placeholder="In case of emergency notify (Enter Name) " name="middlename" required data-validation-required-message="Please enter emergency Name & Contact Number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group span12 col-xs-12">
                                <input type="submit" class="btn btn-success btn-lg" value="Send">
                            </div>
                        </div>
                </div>
    </section>

@endsection


@section('script')
   

@endsection