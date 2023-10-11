@extends('backend.layouts.backend')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update opportunity Info </h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="/career/update/{{$Career->id}}"
                                enctype="multipart/form-data">
                                @csrf

                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label>Opportunity type</label>
                                    <select class="form-control" id="role" name="type">
                                        <option value="jobs" {{ $Career->type === 'jobs' ? 'selected' : '' }}>Jobs
                                        </option>
                                        <option value="training" {{ $Career->type === 'training' ? 'selected' : '' }}>
                                            training
                                        </option>
                                        <option value="intern" {{ $Career->type === 'intern' ? 'selected' : '' }}>Intern
                                        </option>

                                    </select>
                                </div>
                                <div class="form-group">

                                    <input type="text" class="form-control" value="{{$Career->title}}" name="title"
                                        id="title" placeholder="Enter Title example Training,Careers or Intern">
                                </div>
                                <div class="form-group vacancy-field">
                                    <input type="text" class="form-control" value="{{$Career->vacancy}}" name="vacancy"
                                        placeholder="Enter Vacancy Number">
                                </div>

                                <div class="form-group venue-field">
                                    <input type="text" class="form-control" value="{{$Career->venue}}" name="venue"
                                        placeholder="Enter Training Venue">
                                </div>

                                <div class="form-group">

                                    <textarea class="form-control" name="description" value="{{$Career->description}}"
                                        id="description" placeholder="Enter  Description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>image</label>
                                    <input type="file" class="form-control" name="image" id="image"
                                        accept=".png, .jpeg, .jpg, image/*">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="open">Open</option>
                                        <option value="close">Close</option>
                                    </select>
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-success btn-block" type="submit">Submit</button>

                                </div>
                            </form>







                        </div>

                    </div>

                </div>



                @endsection