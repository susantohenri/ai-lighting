<!DOCTYPE html>
<html lang="en" class="body-error"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Ai - Lighting Portal</title>
        <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('asset/css/styles.css') ?>" rel="stylesheet">
        <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
    </head>
    <body>
        <form method="POST" action="" enctype="multipart/form-data" novalidate>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading" style="margin-top:5px">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h3 class="bold" style="color:#828396">Ai - Lighting Portal Company Sign Up</h3>
                                </div>
                                <div class="col-sm-12 top">
                                    <div class="progress" style="margin-bottom:0px">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">Part 1 of 4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">

                            <!--signup Step1 setting company-->
                            <div class="signup" id="signup1">
                                <div class="row space">
                                    <div class="col-sm-12 text-center">
                                        <img src="<?= base_url('asset/img/ai-lighting.png') ?>" style="height:80px" alt="">
                                        <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 box_desc">
                                        <div class="form-group">
                                            
                                            <div class="col-sm-12">
                                                <p class="text-justify top">
                                                    Welcome to the Ai - Lighting Portal Company sign up.
                                                </p>
                                                <p class="text-justify top">
                                                    The process will only take a few minutes and will allow you to log in to the portal and have access to information about how to access VEET incentives.
                                                </p>
                                                <p class="text-justify">
                                                    Be sure to have your Company and A Class licence details handy as only complete profiles will be granted access.
                                                </p>
                                                <p class="text-justify">
                                                    There are no upfront costs and credit card information is not required. <br>
                                                    We look forward to assisting your business in accessing VEET Scheme incentives.
                                                </p>
                                                
                                                <br>
                                                <p class="">
                                                    Thank's
                                                </p>
                                               <p>
                                                   The My Electrician Team
                                               </p>

                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <!-- <input type="submit" class="btn btn-sm btn-primary" value="NEXT"> -->
                                                <a class="btn btn-sm btn-primary btn-next" data-target="#signup2">NEXT</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                    </div>
                                </div>
                            </div>
                            <!--close signup step 1 setting-->

                            <!--signup Step2 setting company-->
                            <div class="signup hidden" id="signup2">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <img src="<?= base_url('asset/img/ai-lighting.png') ?>" style="height:80px" alt=""> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 box_desc">
                                            <div class="form-group">
                                                <div class="col-sm-12 text-center"><h4>Electricians Details</h4></div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 bold">Company Name</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class=" form-control validate[required] input-sm" name="company[name]" size="50" value="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 bold">Company ABN Number:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class=" form-control validate[required] input-sm" name="company[abn]" size="25" value="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 bold">Company Address</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class=" form-control validate[required] input-sm" name="company[address]" size="50" value="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-3">
                                                    <label for="" class="bold col-sm-12">Suburb</label>
                                                    <div class="col-sm-12" style="margin-bottom:10px">
                                                        <input type="text" class=" form-control validate[required] input-sm" name="company[suburb]" size="25" value="">
                                                    </div>
                                                </div>    
                                                <div class="col-sm-5">
                                                    <label for="" class="bold col-sm-12">postal code</label>
                                                    <div class="col-sm-7" style="margin-bottom:10px">
                                                        <input type="text" class=" form-control validate[required] input-sm" name="company[postcode]" size="25" value="">
                                                    </div>
                                                <div class="clearfix"></div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-3">
                                                    <label for="" class="bold col-sm-12">Account Signatory</label>
                                                </div>   
                                                <div class="col-sm-3">
                                                    <label for="" class="bold col-sm-12">First Name</label>
                                                    <div class="col-sm-12" style="margin-bottom:10px">
                                                        <input type="text" class=" form-control validate[required] input-sm" name="company[firstname]" size="50" value="">
                                                    </div>
                                                </div>    
                                                <div class="col-sm-5">
                                                    <label for="" class="bold col-sm-12">Last Name</label>
                                                    <div class="col-sm-7" style="margin-bottom:10px">
                                                        <input type="text" class=" form-control validate[required] input-sm" name="company[lastname]" size="50" value="">
                                                    </div>
                                                <div class="clearfix"></div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="bold col-sm-3">Telephone Number</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class=" form-control validate[required] input-sm" name="company[phone]" size="25" value=""> 
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="bold col-sm-3">Email Address</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="validate[required,custom[email]] form-control validate[required] input-sm" name="company[email]" size="50" value="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="bold col-sm-3">R.E.C Number</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class=" form-control validate[required] input-sm" name="company[rec_no]" size="25" value="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="bold col-sm-3">A license No</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class=" form-control validate[required] input-sm" name="company[a_class_lic_no]" size="25" value="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <br>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="col-sm-12 text-center">
                                                            <div class="checkbox">
                                                                <label>
                                                                  <input type="checkbox" id="agree_company"> ‘I agree to Ai Lighting <a href="<?= site_url('Agreement') ?>" target="_blank" style="color:#0000FF">Terms and Conditions</a>’ 
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                            
                                          <div class="col-sm-12 text-center space">
                                            <a class="btn btn-sm btn-primary btn-next hidden" data-target="#signup3">NEXT</a>
                                          </div>
                                         
                                        
                                    </div>
                                </div>
                            </div>

                            <!--signup step3-->
                            <div class="signup hidden" id="signup3">
                                    <div class="row box_desc" style="border:none;margin-top:5px">
                                        <div class="col-sm-12 text-center">
                                            <h3 class="bold text-center">Create Adminsrator log in</h3>
                                        </div>
                                    </div>
                                    <div class="row box_desc" style="border:none">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="col-sm-offset-4 col-sm-4">
                                                    <input required="" class="form-control validate[required] input-md email" name="user[email]" type="text" placeholder="Email">
                                                    <input required="" class="form-control validate[required] input-md" name="user[password]" type="password" placeholder="Password">
                                                    <input required="" class="form-control validate[required] input-md" name="password2" type="password" placeholder="Password">
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row space">
                                        <div class="col-sm-12 text-center">
                                            <a class="btn btn-sm btn-primary btn-next" data-target="#signup4">NEXT</a>
                                        </div>
                                    </div>
                                
                            </div>
                            <!--close signup3-->

                            <!--signup step4-->
                            <div class="signup hidden" id="signup4">
                                <div class="row box_desc">
                                    <div class="col-sm-offset-3 col-sm-6 space">
                                        


                                        <p class="justify">You have successfully created your company profile and are almost ready to create VEECs.</p>
                                        <p class="justify">Your log in will be activated within 24 hours.</p>
                                        <p class="justify">You will be notified by email when your account is active and further details will be provided about the final steps required to create VEECs</p>
                                        <br>
                                        <p class="">Thanks for signing up!</p>
                                        <p class="">
                                            Kind Regards,
                                            <br>
                                            Ai Lighting Team
                                        </p>
                                    </div>
                                </div>
                                <div class="row space">
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" name="submit" value="SIGN IN" class="btn-success btn-sm btn">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript" src="<?= base_url('asset/js/jquery-1.11.1.min.js') ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#agree_company').click(function () {
                if ($(this).is(':checked')) $('[data-target="#signup3"]').removeClass('hidden')
                else $('[data-target="#signup3"]').addClass('hidden')
            })
            $('.btn-next').click(function () {
                var target = $(this).attr('data-target')
                if ($(this).is('[data-target="#signup4"]')) {
                    if ($('[name="user[password]"]').val() !== $('[name="password2"]').val()) {
                        alert('password does not match')
                        return false
                    }
                }
                $('[id^="signup"]').addClass('hidden')
                $(target).removeClass('hidden')
                var eq = parseInt(target.replace('#signup', ''))
                var percent = [25, 50, 75, 100]
                var html = 'Part ' + eq + ' of 4'
                eq--
                $('.progress-bar').css('width', percent[eq] + '%').html(html)
            })
        })
    </script>
</body></html>