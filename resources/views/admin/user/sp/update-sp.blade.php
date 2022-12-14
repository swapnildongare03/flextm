@extends('layouts.admin-dashboard')
@section('title')
    Admin : Update Organization
@endsection
@section('sidebar-organization')
    active
@endsection

@section('main-content')
    <h1>Update Organization</h1>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="box">
                    <form class="form" action="{{ route('organization.update', $sp->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="box-body">
                            <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                            <hr class="my-15">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" value="{{ $sp->name }}"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" name="email" value="{{ $sp->email }}"
                                            class="form-control @error('email') is-invalid @enderror" placeholder="E-mail">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Contact Number</label>
                                        <input type="text" name="mobile" value="{{ $sp->mobile }}"
                                            class="form-control @error('mobile') is-invalid @enderror" placeholder="Phone">
                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Requirements</h4>
                            <hr class="my-15">
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <input type="text" name="country" value="{{ $sp->country }}"
                                    class="form-control @error('country') is-invalid @enderror" placeholder="Company Name">
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Language</label>
                                        <select class="form-control select2  @error('language_id') is-invalid @enderror"
                                            name="language_id" style="width: 100%;">
                                            @if ($language)
                                                @foreach ($language as $item)
                                                    <option value={{ $item->id }}>{{ $item->name }}</option>
                                                @endforeach
                                            @else
                                                <option value="">NO Language found</option>
                                            @endif
                                        </select>
                                        @error('language_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">VAT-ID</label>
                                        <input type="text" name="vat_id" value="{{ $sp->vat_id }}"
                                            class="form-control @error('vat_id') is-invalid @enderror" placeholder="VAT-ID">
                                        @error('vat_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <textarea rows="5" name="company_address" value=""
                                            class="form-control @error('company_address') is-invalid @enderror" placeholder=" Address">{{ $sp->address }}</textarea>
                                        @error('company_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Invocing Address</label>
                                        <textarea rows="5" name="invoice_address" value=""
                                            class="form-control @error('invoice_address') is-invalid @enderror" placeholder="Invocing Address">{{ $sp->invoice_address }}</textarea>
                                        @error('invoice_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-6">
                                    <input type="checkbox" id="md_checkbox_4" name="free_trial"
                                        value="{{ $sp->free_trial }}"
                                        class="chk-col-info @error('free_trial') is-invalid @enderror" />
                                    <label for="md_checkbox_4">Free Trial</label>
                                    @error('free_trial')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="checkbox" id="md_checkbox_3"
                                        class="chk-col-success @error('subscription') is-invalid @enderror"
                                        name="subscription" value="{{ $sp->subscription }}" />
                                    <label for="md_checkbox_3">Subscription</label>
                                    @error('subscription')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="image" style="margin-top: 100px">Select Image</label>
                                        </div>
                                        <div class="col-md-10 text-center">
                                            <input type="file" id="image" name="logo_url" hidden>
                                            <img width="50%" id="img_frame" style="cursor: pointer"
                                                @if ($sp->logo_url) src="{{ asset(Storage::url($sp->logo_url)) }}"
                                                @else
                                                src="{{ asset('images/avtar.png') }}" @endif>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-warning me-1">
                                <i class="ti-trash"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <script>
        $(document).ready(function() {
            $('#img_frame').click(function() {
                $('#image').click();
            });

            $('#image').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#img_frame').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        })
    </script>
@endsection
