@extends('layouts.master', ['title' => 'Product Lead'])
@section('content')
    <div class="w-auto">
        <h1>Purchase Request Form</h1>
        <form action="{{ route('purchase-lead-enquiry') }}" method="POST">
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
            <div class="mb-3">
                <label for="state" class="form-label">State *</label>
                <select name="state" id="state" required>
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City *</label>
                <select name="city" id="city" required>
                    <option value="">Select City</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name *</label>
                <select name="product_name" class="form-control" id="product_name" required>
                    <option value="">Select Product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->product_name }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity *</label>
                <select name="quantity" id="quantity" required>
                    <option value="">Select quantity</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="1" id="add_more">
                <label class="form-check-label" for="add_more">
                    Add more product
                </label>
            </div>
            <div style="display: none" id="add_more_conatiner">
                <div class="mb-3">
                    <label for="name" class="form-label">Product</label>
                    <select name="add_more_product_name" class="form-control" id="product_name">
                        <option value="">Select Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->product_name }}">{{ $product->product_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity For Product</label>
                    <select name="add_more_quantity" id="quantity">
                        <option value="">Select quantity</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="zipcode" class="form-label">Zip/Postal Code *</label>
                <input type="number" name="zipcode" class="form-control" id="zipcode" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address *</label>
                <input type="text" name="address" class="form-control" id="address" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price *</label>
                <input type="number" name="price" class="form-control" id="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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

            $('#add_more').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#add_more_conatiner').show();
                } else {
                    $('#add_more_conatiner').hide();
                }
            })
        });
    </script>
@endsection
