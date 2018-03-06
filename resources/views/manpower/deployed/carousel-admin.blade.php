@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Manage Carousel</h3></div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <!-- COMPONENT START -->
                    <div class="form-group">
                        <div class="input-group input-file" name="Fichier1">
			<span class="input-group-btn">
        		<button class="btn btn-default btn-choose" type="button">Choose</button>
    		</span>
                            <input type="text" class="form-control" placeholder='Choose a file...'/>
                            <span class="input-group-btn">
       			 <button class="btn btn-warning btn-reset" type="button">Reset</button>
    		</span>
                        </div>
                    </div>
                    <h4>Captions</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" id="cHeading" placeholder="Caption Heading">
                    </div>
                    <div class="form-group">
                        <textarea id="caption" class="form-control" placeholder="Caption"></textarea>
                    </div>
                    <div class="input-group">
                        <div class="radio">
                            <label><input type="radio" id="includeBtn" name="optradio">Include Button</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="btnTxt" placeholder="Button Text">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="btnUrl" placeholder="Button URL">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="postCarouselData" class="btn btn-primary pull-right" >Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4"><img src="{{ asset( 'images/intro/2.jpg') }}" class="img-thumbnail"
                                alt="Cinque Terre"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function() {

        })

    </script>

@endsection
