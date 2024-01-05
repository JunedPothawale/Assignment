@extends('component.auth-master')

@section('auth-content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-4">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                                </a>
                                <form>
                                    <div class="mb-3">
                                        <label for="FullName" class="form-label">Full Name</label>
                                        <input type="text" name="fname" class="form-control" id="FullName"
                                            aria-describedby="textHelp" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Email" class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control" id="Email"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="Password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="Password" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" name="comfirm_password" class="form-control"
                                            id="ConfirmPassword" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="DOB" class="form-label">Birth Date</label>
                                        <input type="date" class="form-control" id="DOB" required>
                                    </div>
                                    <div class="mb-4 d-flex justify-content-evenly">
                                        <div>
                                            <label for="Male" class="form-radio-label">Male</label>
                                            <input type="radio" name="gender" value="Male" class="form-radio-input"
                                                id="Male" required>
                                        </div>
                                        <div>
                                            <label for="Female" class="form-radio-label">Female</label>
                                            <input type="radio" name="gender" value="female" placeholder="Female"
                                                class="form-radio-input" id="Female" required>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="Country" class="form-label">Country</label>
                                        <select class="form-select" name="country" id="Country" required>
                                            <option value="0" disabled selected>Country</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="State" class="form-label">State</label>
                                        <select class="form-select" id="State" name="state" required>
                                            <option value="0" disabled selected>State</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="City" class="form-label">City</label>
                                        <select class="form-select" id="City" name="city" required>
                                            <option value="0" disabled selected>City</option>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Sign Up">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ url('/login') }}">Sign
                                            In</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
