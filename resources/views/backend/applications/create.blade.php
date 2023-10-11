@extends('backend.layouts.backend')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Application</h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="{{url('user/application/create')}}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Fullname</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Your fullname" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email Address</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>ID Number</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="idno" id="idno"
                                                placeholder="Your ID Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Phone Number</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                placeholder="Your Phone Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Gender</label>
                                        <div class="form-group">

                                            <select class="form-control" id="gender" name="gender">
                                                <option selected="select">Select....</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Passport</label>
                                        <div class="form-group">

                                            <select class="form-control" id="passport" name="passport">
                                                <option selected="select">Select....</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Passport Number</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="passportno" id="passportno"
                                                placeholder="Your Passport Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Passport Expery Date</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="passdate" id="passdate"
                                                placeholder="Expery Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Your Data of Birth</label>
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="dob" id="dob"
                                                placeholder="Your  dob">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Parent Name</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="parentname" id="parentname"
                                                placeholder="Your Parent Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Parent Phone Number</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="pphone" id="pphone"
                                                placeholder="Your Parent Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Disability?</label>
                                        <div class="form-group">

                                            <select class="form-control" id="pwd" name="pwd">
                                                <option selected="select">Select....</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Subcounty</label>
                                        <div class="form-group">

                                            <select class="form-control" id="subcounty" name="subcounty">
                                                <option selected="select">Select Subcounty....</option>
                                                <option value="mandera">Mandera East</option>
                                                <option value="rhamu">Rhamu</option>
                                                <option value="elwak">Elwak</option>
                                                <option value="banisa">Banisa</option>
                                                <option value="takaba">Takaba</option>
                                                <option value="lafey">Lafey</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Ward</label>
                                        <div class="form-group">

                                            <select class="form-control" id="ward" name="ward">
                                                <option selected>Select Ward ...</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Highest Education Level</label>
                                        <div class="form-group">

                                            <select class="form-control" id="education" name="education">
                                                <option selected="select">Highest Education Level....</option>
                                                <option value="postgraduate">Masters Degree</option>
                                                <option value="undergraduate">Bachelors Degree</option>
                                                <option value="college">College</option>
                                                <option value="vocational">Vocational</option>
                                                <option value="kcse">Secondary</option>
                                                <option value="kcpe">Primary</option>
                                                <option value="madarasa">Madarasa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Grade</label>
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="grade" id="grade"
                                                placeholder="Enter Your grade">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Fields of Study</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="qualification"
                                                id="qualification" placeholder="Enter Your Field of Study">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Years of experience </label>
                                        <div class="form-group">

                                            <select class="form-control" id="experience" name="experience">
                                                <option selected>Years of experience ...</option>
                                                <option value="0">None</option>
                                                <option value="1">1-2 years</option>
                                                <option value="3">3 years</option>
                                                <option value="4">4-6 years</option>
                                                <option value="5">above 7 years</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Employer Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="employer" id="employer"
                                                placeholder="Enter your recent Employer Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Position held</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="job" id="job"
                                                placeholder="Enter your recent job designation">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Duties & Responsibilities</label>
                                        <div class="form-group">
                                            <textarea id="duties" name="duties" cols="40" rows="5"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Are You Intrested in? </label>
                                        <div class="form-group">
                                            <select class="form-control" id="career" name="career">
                                                <option selected>Select Opportunities ...</option>
                                                <option value="none">None</option>
                                                <option value="training">Training & Capacity Building</option>
                                                <option value="internship">Internship</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Skills Training</label>
                                        <div class="form-group">
                                            <select class="form-control" id="skills" name="skills">
                                                <option selected>Select Skills Training...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Passport Photo</label>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" id="image"
                                                accept=".png, .jpeg, .jpg, image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Id Copy</label>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="id_copy" id="id_copy"
                                                accept=".png, .jpeg, .jpg, image/*">
                                        </div>
                                    </div>
                                </div>



                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-success btn-block" type="submit">Submit</button>
                        </div>
                        </form>


                    </div>

                </div>

            </div>



            @endsection