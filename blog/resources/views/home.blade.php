@extends('masterLayout.app')
@section('title', 'Home')
@section('content')
    <div class="container-fluid m-0 parallax">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 text-center banner-m-Top">
                <h1 class="text-white">Software Engineer</h1>
                <h5 class="text-white">Mobile & Web Development</h5>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>



    <div class="container mt-5 text-center">
        <h3 class="mb-5">My Services</h3>
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
                <div class="card mb-4" style="width:100%;">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>




            <div class="col-md-4">
                <div class="card mb-4" style="width:100%;">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container mt-5 text-center">
        <h3 class="mb-5">Recent Projects</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4" style="width:100%;">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-primary">Click Here</button>
                    </div>
                </div>
            </div>




            <div class="col-md-4">
                <div class="card mb-4" style="width:100%;">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-primary">Click Here</button>
                    </div>
                </div>
            </div>




            <div class="col-md-4">
                <div class="card mb-4" style="width:100%;">
                    <img src="{{asset('images/img1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="btn btn-primary">Click Here</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container mt-5">
        <h3 class="mb-5 text-center">Contact With Me</h3>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.2524728803196!2d91.86844026437167!3d24.889368350229425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751aad583c627c5%3A0x7c63909c20633d6!2zTGFsZGlnaGlycGFyLCDgprjgpr_gprLgp4fgpp8!5e0!3m2!1sbn!2sbd!4v1620496926298!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
