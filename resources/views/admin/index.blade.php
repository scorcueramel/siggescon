@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de visualización</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3> 13436 </h3>
                    <p> Student Strength </p>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3> ₹185358 </h3>
                    <p> Todays Collection </p>
                </div>
                <div class="icon">
                    <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3> 5464 </h3>
                    <p> New Admissions </p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3> 723 </h3>
                    <p> Faculty Strength </p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- comentarios --}}

        <section style="background-color: #d3defa;">
            <div class="container my-5 py-5">
              <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <div class="card text-dark">
                    <div class="card-body p-4">
                      <h4 class="mb-0">Recent comments</h4>
                      <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
          
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                          height="60" />
                        <div>
                          <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                          <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                              March 07, 2021
                              <span class="badge bg-primary">Pending</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                          </div>
                          <p class="mb-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and
                            scrambled it.
                          </p>
                        </div>
                      </div>
                    </div>
          
                    <hr class="my-0" />
          
                    <div class="card-body p-4">
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60"
                          height="60" />
                        <div>
                          <h6 class="fw-bold mb-1">Lara Stewart</h6>
                          <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                              March 15, 2021
                              <span class="badge bg-success">Approved</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="text-success"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-danger"><i class="fas fa-heart ms-2"></i></a>
                          </div>
                          <p class="mb-0">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It
                            has roots in a piece of classical Latin literature from 45 BC, making it
                            over 2000 years old. Richard McClintock, a Latin professor at
                            Hampden-Sydney College in Virginia, looked up one of the more obscure
                            Latin words, consectetur, from a Lorem Ipsum passage, and going through
                            the cites.
                          </p>
                        </div>
                      </div>
                    </div>
          
                    <hr class="my-0" style="height: 1px;" />
          
                    <div class="card-body p-4">
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(33).webp" alt="avatar" width="60"
                          height="60" />
                        <div>
                          <h6 class="fw-bold mb-1">Alexa Bennett</h6>
                          <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                              March 24, 2021
                              <span class="badge bg-danger">Rejected</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                          </div>
                          <p class="mb-0">
                            There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or
                            randomised words which don't look even slightly believable. If you are
                            going to use a passage of Lorem Ipsum, you need to be sure.
                          </p>
                        </div>
                      </div>
                    </div>
          
                    <hr class="my-0" />
          
                    <div class="card-body p-4">
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp" alt="avatar" width="60"
                          height="60" />
                        <div>
                          <h6 class="fw-bold mb-1">Betty Walker</h6>
                          <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                              March 30, 2021
                              <span class="badge bg-primary">Pending</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                          </div>
                          <p class="mb-0">
                            It uses a dictionary of over 200 Latin words, combined with a handful of
                            model sentence structures, to generate Lorem Ipsum which looks
                            reasonable. The generated Lorem Ipsum is therefore always free from
                            repetition, injected humour, or non-characteristic words etc.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </section>




{{--         <div class="container mt-5">

            <div class="row  d-flex justify-content-center">

                <div class="col-md-8">

                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                        <h5>Unread comments(6)</h5>

                        <div class="buttons">

                            <span class="badge bg-white d-flex flex-row align-items-center">
                                <span class="text-primary">Comments "ON"</span>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                  
                                </div>
                            </span>
                            
                        </div>
                        
                    </div>



                    <div class="card p-3">

                        <div class="d-flex justify-content-between align-items-center">

                      <div class="user d-flex flex-row align-items-center">

                        <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                        <span><small class="font-weight-bold text-primary">james_olesenn</small> <small class="font-weight-bold">Hmm, This poster looks cool</small></span>
                          
                      </div>


                      <small>2 days ago</small>

                      </div>


                      <div class="action d-flex justify-content-between mt-2 align-items-center">

                        <div class="reply px-4">
                            <small>Remove</small>
                            <span class="dots"></span>
                            <small>Reply</small>
                            <span class="dots"></span>
                            <small>Translate</small>
                           
                        </div>

                        <div class="icons align-items-center">

                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-check-circle-o check-icon"></i>
                            
                        </div>
                          
                      </div>


                        
                    </div>







                    <div class="card p-3 mt-2">

                        <div class="d-flex justify-content-between align-items-center">

                      <div class="user d-flex flex-row align-items-center">

                        <img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle mr-2">
                        <span><small class="font-weight-bold text-primary">olan_sams</small> <small class="font-weight-bold">Loving your work and profile! </small></span>
                          
                      </div>


                      <small>3 days ago</small>

                      </div>


                      <div class="action d-flex justify-content-between mt-2 align-items-center">

                        <div class="reply px-4">
                            <small>Remove</small>
                            <span class="dots"></span>
                            <small>Reply</small>
                            <span class="dots"></span>
                            <small>Translate</small>
                           
                        </div>

                        <div class="icons align-items-center">
                            <i class="fa fa-check-circle-o check-icon text-primary"></i>
                            
                        </div>
                          
                      </div>


                        
                    </div>










                    <div class="card p-3 mt-2">

                        <div class="d-flex justify-content-between align-items-center">

                      <div class="user d-flex flex-row align-items-center">

                        <img src="https://i.imgur.com/0LKZQYM.jpg" width="30" class="user-img rounded-circle mr-2">
                        <span><small class="font-weight-bold text-primary">rashida_jones</small> <small class="font-weight-bold">Really cool Which filter are you using? </small></span>
                          
                      </div>


                      <small>3 days ago</small>

                      </div>


                      <div class="action d-flex justify-content-between mt-2 align-items-center">

                        <div class="reply px-4">
                            <small>Remove</small>
                            <span class="dots"></span>
                            <small>Reply</small>
                            <span class="dots"></span>
                            <small>Translate</small>
                           
                        </div>

                        <div class="icons align-items-center">
                            <i class="fa fa-user-plus text-muted"></i>
                            <i class="fa fa-star-o text-muted"></i>
                            <i class="fa fa-check-circle-o check-icon text-primary"></i>
                            
                        </div>
                          
                      </div>


                        
                    </div>






                    <div class="card p-3 mt-2">

                        <div class="d-flex justify-content-between align-items-center">

                      <div class="user d-flex flex-row align-items-center">

                        <img src="https://i.imgur.com/ZSkeqnd.jpg" width="30" class="user-img rounded-circle mr-2">
                        <span><small class="font-weight-bold text-primary">simona_rnasi</small> <small class="font-weight-bold text-primary">@macky_lones</small> <small class="font-weight-bold text-primary">@rashida_jones</small> <small class="font-weight-bold">Thanks </small></span>
                          
                      </div>


                      <small>3 days ago</small>

                      </div>


                      <div class="action d-flex justify-content-between mt-2 align-items-center">

                        <div class="reply px-4">
                            <small>Remove</small>
                            <span class="dots"></span>
                            <small>Reply</small>
                            <span class="dots"></span>
                            <small>Translate</small>
                           
                        </div>

                        <div class="icons align-items-center">
                           
                            <i class="fa fa-check-circle-o check-icon text-primary"></i>
                            
                        </div>
                          
                      </div>


                        
                    </div>


                    
                </div>
                
            </div>
            
        </div> --}}
        {{-- fin de comentarios --}}        
    </div>
</div>



@stop

@section('css')
    <style>
    body{
    background:#eee;    
    }

    .card-box {
        position: relative;
        color: #fff;
        padding: 20px 10px 40px;
        margin: 20px 0px;
    }
    .card-box:hover {
        text-decoration: none;
        color: #f1f1f1;
    }
    .card-box:hover .icon i {
        font-size: 100px;
        transition: 1s;
        -webkit-transition: 1s;
    }
    .card-box .inner {
        padding: 5px 10px 0 10px;
    }
    .card-box h3 {
        font-size: 27px;
        font-weight: bold;
        margin: 0 0 8px 0;
        white-space: nowrap;
        padding: 0;
        text-align: left;
    }
    .card-box p {
        font-size: 15px;
    }
    .card-box .icon {
        position: absolute;
        top: auto;
        bottom: 5px;
        right: 5px;
        z-index: 0;
        font-size: 72px;
        color: rgba(0, 0, 0, 0.15);
    }
    .card-box .card-box-footer {
        position: absolute;
        left: 0px;
        bottom: 0px;
        text-align: center;
        padding: 3px 0;
        color: rgba(255, 255, 255, 0.8);
        background: rgba(0, 0, 0, 0.1);
        width: 100%;
        text-decoration: none;
    }
    .card-box:hover .card-box-footer {
        background: rgba(0, 0, 0, 0.3);
    }
    .bg-blue {
        background-color: #00c0ef !important;
    }
    .bg-green {
        background-color: #00a65a !important;
    }
    .bg-orange {
        background-color: #f39c12 !important;
    }
    .bg-red {
        background-color: #d9534f !important;
    }        
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop