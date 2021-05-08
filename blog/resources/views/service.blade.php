@extends('masterLayout.app')
@section('title', 'Service')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Our Services</h3>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4" style="width:100%;">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="card mb-5" style="width:100%;">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="card mb-5" style="width:100%;">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Your Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Your Message</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>



            <div class="col-md-6">
            <h3>Address</h3>
            <p>Laldigir Par, Sylhet Osmani Medical, Sylhet</p>
            <p>+8801914681167</p>
            <p>dhiraj.baidya.kintu@gmail.com</p>
            </div>
        </div>
    </div>
@endsection
