@extends('layouts.master', ['title' => 'Mars SmartLife &#8211; Design For Convenience. Build For You'])
@section('content')
<div class="main">
    <section id="product" class="contact-us-section gray-light-bg ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-4">
                        <h2>Service <span>Request</span> Form </h2>

                    </div>
                </div>
            </div>
            <!--start product carousel-->
            <div class="product-wrap pt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="single-product rounded shadow-sm white-bg p-3">
                            <form action="{{ route('service-lead-enquiry') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address *</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Mobile *</label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" required>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="input-group input-group-sm mb-3 w-100">
                                        <div class="input-group-prepend w-25">
                                            <span class="input-group-text w-100" id="inputGroup-sizing-sm">State *</span>
                                        </div>
                                        <select class="w-75" name="state" id="state" required>
                                            <option value="" disabled>Select State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="input-group input-group-sm mb-3 w-100">
                                        <div class="input-group-prepend w-25">
                                            <span class="input-group-text w-100" id="inputGroup-sizing-sm">City *</span>
                                        </div>
                                        <select class="w-75" name="city" id="city" required>
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="input-group input-group-sm mb-3 w-100">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Zip/Postal Code *</span>
                                        </div>
                                        <input type="number" name="zipcode" class="form-control" id="zipcode" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address *</label>
                                    <textarea type="text" name="address" class="form-control" id="address" rows="2" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name *</label>
                                    <select name="product_id" class="form-control" id="product_name" required>
                                        <option value="">Select Product</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="invoice" class="form-label">Invoice *</label>
                                    <input type="file" name="invoice" class="form-control" id="invoice" required>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="temrs_condition">
                                    <label class="form-check-label" for="temrs_condition">
                                        I agree to pay installation charges where applicable.
                                    </label>
                                </div>
                                <button type="submit" id="submit-button" class="btn btn-primary" disabled>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#state").change(function() {
                let state_id = $(this).val();
                let url = `api/cities/${state_id}`;

                $('#city option').remove();
                $.ajax({
                    type: "GET",
                    url: url,
                    cache: false,
                    contentType: 'application/json',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    success: (res) => {
                        let options = '<option value="" selected disabled>Select City</option>';
                        res.forEach(el => {
                            options += '<option value="' + el.id + '">' + el.city_name +
                                '</option>';
                        })
                        console.log(options);
                        $('#city').prepend(options);
                    }
                });
            });
        });
    </script>
    <script>
        $('#temrs_condition').on('change', function() {
            if ($(this).is(':checked')) {
                $('#submit-button').removeAttr('disabled');
            }
            else{
                $('#submit-button').attr('disabled', 'disabled');
            }
        });
    </script>
@endsection
