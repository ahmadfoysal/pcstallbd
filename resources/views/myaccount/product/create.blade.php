@extends('layout.app')

@section('content')
    <section class="s-space-bottom-full bg-accent-shadow-body">

        <div class="container">
            <div class="row">
                @include('partials.accountmenu')
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="tab-content my-account-wrapper gradient-wrapper input-layout1">

                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h2>Post A Free Add</h2>
                            </div>
                            <div class="input-layout1 gradient-padding post-ad-page">
                                <form id="post-add-form">
                                    <div class=" mb-50 pb-30">
                                        <div class="section-title-left-dark border-bottom d-flex">
                                            <h3><img src="{{ asset('img/post-add1.png') }}" alt="post-add"
                                                    class="img-fluid"> Product
                                                Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Item Category<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <select id="category-name" class='select2'>
                                                            <option value="0">Select a Category</option>
                                                            <option value="1">Electronics</option>
                                                            <option value="2">Fashin &amp; Life Style</option>
                                                            <option value="3">Car &amp; Vehicles</option>
                                                            <option value="3">Hobby, Sport &amp; Kids</option>
                                                            <option value="3">Pets &amp; Animals</option>
                                                            <option value="3">Overseas Jobs</option>
                                                            <option value="3">Property</option>
                                                            <option value="3">Education</option>
                                                            <option value="3">Home &amp; Garden</option>
                                                            <option value="3">Business &amp; Industry</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label possition-top" for="first-name">Item Condition
                                                    <span>
                                                        *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="radio radio-primary radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="option1"
                                                            name="radioInline1" checked="">
                                                        <label for="inlineRadio1">New</label>
                                                    </div>
                                                    <div class="radio radio-primary radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="option2"
                                                            name="radioInline1">
                                                        <label for="inlineRadio2"> Used </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Item Title <span>
                                                        *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" class="form-control"
                                                        placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Description<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <textarea placeholder="What makes your ad unique" class="textarea form-control" name="message" id="description"
                                                        rows="4" cols="20" data-error="Message field is required" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="first-name">Set Price <span>
                                                        *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="describe-ad2" class="form-control price-box"
                                                        placeholder="৳ 0.00">
                                                    <div class="radio radio-primary radio-inline">
                                                        <input type="radio" id="inlineRadio3" value="option1"
                                                            name="radioInline2" checked="">
                                                        <label for="inlineRadio3">Fixed</label>
                                                    </div>
                                                    <div class="radio radio-primary radio-inline">
                                                        <input type="radio" id="inlineRadio4" value="option2"
                                                            name="radioInline2">
                                                        <label for="inlineRadio4"> Negotiable </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Upload Picture<span>
                                                        *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <ul class="picture-upload">
                                                        <li>
                                                            <input type="file" id="img-upload1" class="form-control">
                                                        </li>
                                                        <li>
                                                            <input type="file" id="img-upload2" class="form-control">
                                                        </li>
                                                        <li>
                                                            <input type="file" id="img-upload3" class="form-control">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-20 float-right">
                                            <button type="submit" class="cp-default-btn-sm">Submit Now!</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
