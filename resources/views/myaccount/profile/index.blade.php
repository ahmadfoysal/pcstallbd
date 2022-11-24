@extends('layout.app')

@section('content')
    <section class="s-space-bottom-full bg-accent-shadow-body">

        <div class="container">
            <div class="row">
                @include('partials.accountmenu')
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="tab-content my-account-wrapper gradient-wrapper input-layout1">

                        <div class="gradient-padding">
                            <h2 class="title-section">Personal Information</h2>
                            <form id="login-page-form">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label possition-top">Account</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline1"
                                                    checked="">
                                                <label for="inlineRadio1">Indivisual</label>
                                            </div>
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline1">
                                                <label for="inlineRadio2">Business</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Email</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="first-name2" class="form-control"
                                                placeholder="Enter your e-mail here . . .">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">First Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="first-name" class="form-control"
                                                placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="last-name" class="form-control"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Phone</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="phone" class="form-control"
                                                placeholder="Your Phone Number">
                                            <div class="checkbox checkbox-primary checkbox-circle">
                                                <input id="checkbox1" type="checkbox" checked="">
                                                <label for="checkbox1">Hide the phone number on the published ads.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Current Password</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="c-password" class="form-control"
                                                placeholder="Type  Your Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">New Password</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="n-password" class="form-control"
                                                placeholder="Type  Your Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                        <label class="control-label">Confirm Password</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-12">
                                        <div class="form-group">
                                            <input type="text" id="r-password" class="form-control"
                                                placeholder="Type  Your Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="ml-auto col-lg-9 col-md-8 col-sm-8 col-12 ml-none--mb">
                                        <div class="form-group">
                                            <button type="submit" class="cp-default-btn-sm">Update Details!</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
