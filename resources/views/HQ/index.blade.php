@extends('layouts.base')

@section('content')
        <div class="backdrop-container bg-hq">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="hero-unit">
                            <h1>The Property Management Tools You've Been Missing</h1>
                        <div class="btns">
                            <a class="btn btn-hg btn-success" href="#">Get Started</a>
                        </div>
                        <h2>From Inventories to Repair Reporting, LettingHQ provides all the tools you need.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 bg-check product-tile">
                    <h1>LettingCheck</h1>
                    <div class="row">
                        <div class="col-lg-7 description">
                            <p><span class="fui-check"></span> Simple Inventory Creation</p>
                            <p><span class="fui-photo"></span> Easily add Photos to your report</p>
                            <p><span class="fui-document"></span> Automatic Comparison and Checkout reports</p>
                            <p><span class="fui-list-bulleted"></span> Reports available instantly to print, email or edit</p>
                        </div>
                        <div class="col-lg-5"><img src="/images/lettingcheck/ipad-rooms.png" class="img-responsive" /></div>
                    </div>
                    <a class="btn btn-huge btn-inverse learn-more" href="#"></span> Learn More</a>
                </div>
                <div class="col-md-4 bg-fix product-tile">
                    <h1>LettingFix</h1>
                    <p>Some text</p>
                    <a class="btn btn-huge btn-inverse" href="#"></span> Learn More</a>
                </div>
                <div class="col-md-4 bg-photy product-tile">
                    <h1>Photy</h1>
                    <p>Some text</p>
                    <a class="btn btn-huge btn-inverse" href="#"></span> Learn More</a>
                </div>
            </div>
        </div>
@stop