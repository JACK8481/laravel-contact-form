<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg, #4facfe, #00f2fe); min-height:100vh;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

           <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body">

                    <div class="text-center mb-4">
    <h2 class="fw-bold text-primary"> Contact Form</h2>
    <p class="text-muted">Fill in your details below</p>
</div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/contact">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input
                                type="text"
                                class="form-control"
                                name="phone"
                                placeholder="Enter your phone number">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <input
                                type="text"
                                class="form-control"
                                name="country"
                                placeholder="Enter your country">
                        </div>

                         <div class="mb-3">
                            <label class="form-label">Fields</label>
                            <input
                                type="text"
                                class="form-control"
                                name="field"
                                placeholder="Enter your field ">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Submit
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>