

<?php $__env->startSection('title'); ?>
   About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('additional_script'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?php echo e(asset('build/css/intlTelInput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('build/css/demo.css')); ?>">

    <style>
      .hide{
        display: none;
      }
      input::placeholder {
        font-size: 14px;
        color: #999999 !important;
        opacity: 0.5;
      }
      .iti--allow-dropdown {
        width: 100%
      }
      .p-10 {
        padding-top: 20px;
      }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <div class="section banner-page" data-background="<?php echo e(asset('images/worship_5.jpg')); ?>">

            <div class="content-wrap pos-relative">
                <div class="d-flex justify-content-center bd-highlight mb-3">
                    <div class="title-page">Volunteering</div>
                </div>

                <div class="d-flex justify-content-center bd-highlight mb-3">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Volunteer</li>
                    </ol>
                    </nav>
                </div>

            </div>
        </div>

        <div class="clearfix"></div>

        <!-- WE NEED YOUR HELP -->
        <div class="section services" style="padding-bottom: 50px">
            <div class="content-wrap" style="padding-top: 0px; padding-bottom: 0px">
                <div class="container-fluid" style=" background-color: #f0f0f0; padding-bottom: 20px; border-bottom-right-radius: 50% 20%;">

                    <div class="row">

                        <div class="col-md-5" style="padding: 0px">
                            <img src="<?php echo e(asset('images/volunteer.jpg')); ?>" style="border-bottom-right-radius: 80% 80%; width: 100%" />
                        </div>

                        <div class="col-md-6" style="padding-top: 30px; text-align: justify">
                            <div style="padding: 25px">
                                <h2 class="section-heading">
                                    Volunteer <span>With Us </span> (TROD)
                                </h2>
                                <p style="font-size: 1.35rem; line-height: 31px; margin: -10px 0 0; font-weight: 700; padding-right: 20px;">
                                    Through our volunteers, we are able to improve the lives of families and communities around us. No matter how much time you can spare or 
                                    how many days a week you can give, all of our volunteer roles ensure your safety. Volunteering to serve will be a great way of meeting 
                                    new people, learning new skills, and contributing to the ministry. 
                                </p>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-heading" style="margin-bottom: 0px; padding-bottom: 10px">
                         Get the latest updates <span>and news with Staying Connected </span> - TROD Volunteering
                    </h2>
                    <p style="font-size: 15px">
                        Staying Connected, our volunteer hub, is dedicated to sharing the latest volunteering opportunities, inspiring stories and news from our volunteering 
                        outreach.
                    </p>
                    <hr/>
                </div>

                <div class="col-md-12" style="padding-bottom: 80px">

                      <?php if($errors->has('phone_number')): ?>
                        <script>
                          Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Oops...',
                            text: "Phone Number Validation Failed | Please Enter Valid Phone Number",
                            showConfirmButton: true,
                            footer: '<span style="color: #900; font-size: 14px">The Root Of David (TROD) | Volunteering!</span>',
                            timer: 4500
                          });
                        </script>
                      <?php endif; ?>

                      <?php if(session('success')): ?>
                        <script>
                          Swal.fire({
                            icon: 'success',
                            title: 'Great...',
                            text: '<?php echo e(session('success')); ?>',
                            footer: '<span style="color: #900; font-size: 14px">The Root Of David (TROD) | Volunteering!</span>',
                            timer: 4500
                          });
                        </script>
                      <?php endif; ?>

                      <?php if(session('errmsg')): ?>
                        <script>
                          Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: '<?php echo e(session('errmsg')); ?>',
                            footer: '<span style="color: #900; font-size: 14px">The Root Of David (TROD) | Volunteering!</span>',
                            timer: 4500
                          });
                        </script>
                      <?php endif; ?>

                    <?php if($errors->any()): ?>
                      <div class="alert alert-danger alert-dismissible fade show">
                          <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><i class="fa fa-info-circle"></i> <?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                      </div>
                    <?php endif; ?>

                    <form name="form1" id="form1" action="<?php echo e(route('volunteersubmit')); ?>" method="POST" autocomplete="off">
                      <?php echo csrf_field(); ?>

                        <div class="row">
                          <div class="form-group col-md-6 p-10">
                            <label>Firstname: <span class="label-important" style="color:red">*</span></label>
                            <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="<?php echo e(old('firstname')); ?>" required>
                          </div>
                          <div class="form-group col-md-6 p-10">
                            <label>Lastname: <span class="label-important" style="color:red">*</span></label>
                            <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="<?php echo e(old('lastname')); ?>" required>
                          </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 p-10">
                              <label>Email: <span class="label-important" style="color:red">*</span></label>
                              <input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo e(old('email')); ?>" required>
                            </div>

                            <div class="form-group col-md-6 p-10">
                              <label>Phone Number: <span class="label-important" style="color:red">*</span></label><br/>
                              <input type="hidden" id="countryCode" name="countryCode" value="">
                              <input type="tel" name="phone_number" id="phone" class="form-control" style="width: 100% !important" required>

                              <div id="valid-msg" class="hide" style="color: green; font-size: 13px;"></div>
                              <div id="error-msg" class="hide" style="color: red; font-size: 13px;"></div>

                            </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-12 p-10">
                              <hr style="margin:0px"/>
                          </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12 p-10" style="margin-bottom: 0px; padding-bottom: 0px">
                                <label>Address:</label>
                            </div>
                            <div class="form-group col-md-6" style="padding-top: 10px" >
                              <input type="text" name="address_line_1" class="form-control" placeholder="Address Line 1" value="<?php echo e(old('address_line_1')); ?>">
                            </div>
                            <div class="form-group col-md-6" style="padding-top: 10px">
                              <input type="text" name="address_line_2"  class="form-control" placeholder="Address Line 2" value="<?php echo e(old('address_line_2')); ?>">
                            </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6 p-10">
                            <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo e(old('city')); ?>">
                          </div>
                          <div class="form-group col-md-4 p-10">
                            <input type="text" name="state" class="form-control" placeholder="State/Province" value="<?php echo e(old('state')); ?>">
                          </div>
                          <div class="form-group col-md-2 p-10">
                            <input type="text" name="post_code" class="form-control" placeholder="Postal/Zip Code" value="<?php echo e(old('post_code')); ?>">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-12 p-10">
                              <hr style="margin:0px"/>
                          </div>
                        </div>
                        
                        <div class="form-group p-10">
                            <label>Any Special Comments:</label>
                            <textarea class="form-control" name="comment"><?php echo e(old('comment')); ?></textarea>
                        </div>

                        <div class="form-group p-10">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck" required>
                              <label class="form-check-label" for="gridCheck">
                                By Registering For TROD Volunteering, You Have Agreed To Our 
                                <span data-toggle="modal" data-target="#staticBackdrop" style="cursor: pointer; color: #b27522"> 
                                  <b>Privacy Policy</b> 
                                </span>
                              </label>
                            </div>
                        </div>

                        <div class="form-group p-10">
                          <button type="submit" id="submit" class="btn btn-primary" style="font-size: 16px;">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i> TROD Volunteering Registration
                          </button>
                        </div>
                      </form>

                </div>

            </div>
        </div>
    </div>



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?php echo e(asset('build/js/intlTelInput.js')); ?>"></script>
    <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
         hiddenInput: "full_number",
         initialCountry: "gb",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        separateDialCode: true,
        utilsScript: "<?php echo e(asset('build/js/utils.js')); ?>",
      });
    </script>

    <script>
      $(document).ready(function(){

        $('#submit').on('click', function () {
          var countryCode = $(".iti__selected-dial-code").text();
          $("#countryCode").val(countryCode);
        });

      }); 
      </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\TROD Website\resources\views/volunteer.blade.php ENDPATH**/ ?>