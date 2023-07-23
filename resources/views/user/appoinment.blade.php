<section class="section appoinment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <div class="appoinment-content">
                    <img src="{{ url('frontend/images/about/img-3.jpg') }}" alt="" class="img-fluid">
                    <div class="emergency">
                        <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">Book appoinment</h2>
                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui
                        velit . Iste dolorum atque similique praesentium soluta.</p>
                    <form  class="appoinment-form" method="POST" action="{{ url('appointment') }}">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name"  type="text" class="form-control"
                                        placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email"  type="text" class="form-control"
                                        placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="" name="doctor">
                                        <option value="">--Select Doctor--</option>
                                        @foreach ($doctor as $doctor)
                                            <option value="{{ $doctor->name }}">
                                                {{ $doctor->name }}--Speciality--{{ $doctor->speciality }}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date"  type="date" class="form-control"
                                        placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="phone" type="Number" class="form-control"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                        </div>
<button type="submit" class="btn btn-primary">Submit</button>
                        {{-- <a class="btn btn-main btn-round-full" href="{{ url('appointment') }}">Make
                            Appoinment <i class="icofont-simple-right ml-2  "></i></a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
