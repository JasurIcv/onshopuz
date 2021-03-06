<div>

  <section>
      <!--Google map-->
      <div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0"
          allowfullscreen></iframe>
      </div>
  </section>

  <!--Main Layout-->
  <main>

    <div class="container-fluid mb-5">

      <!--Grid row-->
      <div class="row" style="margin-top: -140px;">

        <!--Grid column-->
        <div class="col-md-12">
            <div class="card pb-5">
            <div class="card-body">

              <div class="container">

                <!-- Section: Contact v.3 -->
                <section class="contact-section my-5">

                  <!-- Form with header -->
                  <div class="card">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-lg-8">

                        <div class="card-body form">

                          <!-- Header -->
                          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i><?php echo e(__('main.writetous')); ?></h3>

                          <!-- Grid row -->
                          <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                              <div class="md-form mb-0">
                                <input type="text" id="form-contact-name" class="form-control" wire:model="yourname" placeholder="<?php echo e(__('main.yourname')); ?>">

                              </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                              <div class="md-form mb-0">
                                <input type="text" id="form-contact-email" class="form-control" wire:model="youremail" placeholder="<?php echo e(__('main.youremail')); ?>">

                              </div>
                            </div>
                            <!-- Grid column -->

                          </div>
                          <!-- Grid row -->

                          <!-- Grid row -->
                          <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                              <div class="md-form mb-0">
                                <input type="text" id="form-contact-phone" class="form-control"  wire:model="yourphone" placeholder="<?php echo e(__('main.yourphone')); ?>">

                              </div>
                            </div>
                            <!-- Grid column -->



                          </div>
                          <!-- Grid row -->

                          <!-- Grid row -->
                          <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                              <div class="md-form mb-0">
                                <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"  wire:model="yourmessage" placeholder="<?php echo e(__('main.yourmessage')); ?>"></textarea>

                                <a class="btn-floating btn-lg blue" wire:click="text()">
                                  <i class="far fa-paper-plane"></i>
                                </a>
                              </div>
                            </div>
                            <!-- Grid column -->

                          </div>
                          <!-- Grid row -->

                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-lg-4">

                        <div class="card-body contact text-center h-100 white-text">

                          <h3 class="my-4 pb-2">Contact information</h3>
                          <ul class="text-lg-left list-unstyled ml-4">
                            <li>
                              <p><i class="fas fa-map-marker-alt pr-2 mb-4"></i>New York, 94126, USA</p>
                            </li>
                            <li>
                              <p><i class="fas fa-phone pr-2 mb-4"></i>+ 01 234 567 89</p>
                            </li>
                            <li>
                              <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                            </li>
                          </ul>
                          <hr class="hr-light my-4">
                          <ul class="list-inline text-center list-unstyled">
                            <li class="list-inline-item">
                              <a class="p-2 fa-lg tw-ic">
                                <i class="fab fa-twitter"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 fa-lg li-ic">
                                <i class="fab fa-linkedin-in"> </i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 fa-lg ins-ic">
                                <i class="fab fa-instagram"> </i>
                                </a>
                            </li>
                          </ul>

                        </div>

                      </div>
                      <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                  </div>
                  <!-- Form with header -->

                </section>
                <!-- Section: Contact v.3 -->

              </div>

            </div>
          </div>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>

  </main>
  <!--Main Layout-->



          <button class="btn btn-primary btn-rounded btn-sm"><?php echo e(__('main.checkout')); ?></button>

        </div>
        <!--Footer-->
        <div class="modal-footer">
          <button type="button" class="btn btn-grey btn-rounded btn-sm" data-dismiss="modal"><?php echo e(__('main.close')); ?></button>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- /.Cart Modal -->


</div>

<?php /**PATH D:\OpenServer\domains\onshopuz\resources\views/livewire/contact-component.blade.php ENDPATH**/ ?>