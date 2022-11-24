@extends('layout.app')

@section('content')
    <section class="s-space-bottom-full bg-accent-shadow-body">

        <div class="container">
            <div class="row">
                @include('partials.accountmenu')
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="tab-content my-account-wrapper gradient-wrapper input-layout1">

                        <div class="gradient-padding">
                            <h2 class="title-section">Manage User</h2>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">email</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>John Smith</td>
                                        <td>012887374859</td>
                                        <td>jogn@gmail.com</td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class="gradient-wrapper mb--xs mb-30 border-none">
                                <ul class="cp-pagination">
                                    <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"
                                                aria-hidden="true"></i>Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">Next<i class="fa fa-angle-double-right"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
