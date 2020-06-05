@extends('layouts.app')
@section('title',"contact")
@section('content')


 <!-- Page feature start -->
    <section class="page-feature">
      <div class="container text-center">
        <h2>Contact</h2>
        <div class="breadcrumb">
          <a href="home.html">Home</a>
          <span>/ Contact</span>
        </div>
      </div>
    </section>
    <!-- Page feature end -->

    <!-- Contact section start -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <span class="tagline">Contact us</span>
              <h3 class="sec-title">If You Have Any Query, <br>Drop a Message</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">            
            <form action="contact-mail" method="post">
              @csrf
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="f_name">First Name</label>
                  <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name" required>
                </div>
                <div class="form-group col-sm-6">
                  <label for="l_name">Last Name</label>
                  <input type="text" class="form-control" id="l_name" name="l_name"placeholder="Last name">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email">email</label>
                  <input type="email" class="form-control" id="email"  name="email"placeholder="Email address" required>
                </div>
                <div class="form-group col-sm-6">
                  <label for="phone">Phone number</label>
                  <input type="text" class="form-control" id="phone" 
                  name="phone" placeholder="Phone number">
                </div>
              </div>         
              <div class="form-group">
                <label for="message">Your Message</label>
                <textarea name="message" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
              </div>              
              <button type="submit" class="btn btn-default">send message</button>
            </form>
          </div>
          <div class="col-md-4">
            <aside class="sidebar">
              <div class="widget contact-info">
                <h3 class="widget-title">Contact info</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quod accusamus est obcaecati eum culpa in explicabo cupiditate animi corporis.</p>
                <div>
                  <h6>Location Info</h6>
                  <span>Address line 1, Avg Centre Point.
                  Level 5, New Yourk City - USA</span>
                </div>
                <div>
                  <h6>Hotline numbers</h6>
                  <a href="tel:+12345678912">+123 4567 8912</a>
                  <a href="tel:+32176542198">+321 7654 2198</a>
                </div>
                <div>
                  <h6>Email Us</h6>
                  <a href="mailto:youremail@domain.com">youremail@domain.com</a>
                  <a href="mailto:help@example.com">help@example.com</a>
                </div>                
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact section end -->

    <!-- Map start -->
    <section class="map-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <h3 class="sec-title">Location Map</h3>
            </div>
          </div>
        </div>
      </div>
      <div>
            <iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.2451929493594!2d90.37906006571423!3d23.750121981023614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b21d33b85b%3A0xf8a536fa7e37a5df!2sCloudIcon+InfoTech!5e0!3m2!1sen!2s!4v1500200557633" width="100%" height="550" frameborder="0" style="border:1px solid #279BDB;"></iframe>
      </div>
    </section>
    <!-- Map end -->
    @endsection