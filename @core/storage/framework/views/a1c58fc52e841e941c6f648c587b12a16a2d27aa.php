<?php $__env->startSection('style'); ?>
    <?php echo $__env->make('backend.partials.media-upload.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Call To Action Area')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend/partials/error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Call To Action Area Settings')); ?></h4>

                        <form action="<?php echo e(route('admin.home12.cta')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="nav-item nav-link <?php if($key == 0): ?> active <?php endif; ?>" id="nav-home-tab" data-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo e($lang->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="form-group">
                                            <label for="medical_cta_area_section_<?php echo e($lang); ?>_subtitle"><?php echo e(__('Subtitle')); ?></label>
                                            <input type="text" name="medical_cta_area_section_<?php echo e($lang->slug); ?>_subtitle" value="<?php echo e(get_static_option('medical_cta_area_section_'.$lang->slug.'_subtitle')); ?>" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="medical_cta_area_section_<?php echo e($lang); ?>_title"><?php echo e(__('Title')); ?></label>
                                            <input type="text" name="medical_cta_area_section_<?php echo e($lang->slug); ?>_title" value="<?php echo e(get_static_option('medical_cta_area_section_'.$lang->slug.'_title')); ?>" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="medical_cta_area_section_<?php echo e($lang->slug); ?>_description"><?php echo e(__('Description')); ?></label>
                                            <input type="hidden" name="medical_cta_area_section_<?php echo e($lang->slug); ?>_description" >
                                            <div class="summernote" data-content='<?php echo e(get_static_option('medical_cta_area_section_'.$lang->slug.'_description')); ?>'></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="medical_cta_area_section_<?php echo e($lang); ?>_hotline"><?php echo e(__('Hotline')); ?></label>
                                            <input type="text" name="medical_cta_area_section_<?php echo e($lang->slug); ?>_hotline" value="<?php echo e(get_static_option('medical_cta_area_section_'.$lang->slug.'_hotline')); ?>" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="medical_cta_area_section_<?php echo e($lang); ?>_button_text"><?php echo e(__('Button Text')); ?></label>
                                            <input type="text" name="medical_cta_area_section_<?php echo e($lang->slug); ?>_button_text" value="<?php echo e(get_static_option('medical_cta_area_section_'.$lang->slug.'_button_text')); ?>" class="form-control" >
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label for="medical_cta_area_section_cta_area_email"><?php echo e(__('Query Received Email')); ?></label>
                                <input type="text" name="medical_cta_area_section_cta_area_email" value="<?php echo e(get_static_option('medical_cta_area_section_cta_area_email')); ?>" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/summernote-bs4.js')); ?>"></script>
    <?php echo $__env->make('backend.partials.media-upload.media-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(document).ready(function () {

            $('.summernote').summernote({
                height: 200,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).prev('input').val(contents);
                    }
                }
            });

            if($('.summernote').length > 0){
                $('.summernote').each(function(index,value){
                    $(this).summernote('code', $(this).data('content'));
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wildmp.com\@core\resources\views/backend/pages/home/medical/cta-area.blade.php ENDPATH**/ ?>