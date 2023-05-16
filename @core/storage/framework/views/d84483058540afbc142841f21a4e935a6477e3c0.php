<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/jquery-ui.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/media-uploader.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/spectrum.min.css')); ?>">
    <style>
        .nice-select .option {
            min-height: 30px;
            padding: 0px 10px;
            font-size: 14px;
            font-weight: 600;
        }

        .nice-select .option:hover, .nice-select .option.focus, .nice-select .option.selected.focus {
            font-weight: 700;
        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Contact Page Builder')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-msg','data' => []]); ?>
<?php $component->withName('error-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.flash-msg','data' => []]); ?>
<?php $component->withName('flash-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            </div>

            <div class="col-lg-12 mt-t">
                <div class="card margin-bottom-30">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Contact Page Builder settings')); ?></h4>
                        <div class="alert alert-info"><?php echo e(__('if you enable page builder, your contact page will load only page builder content.')); ?></div>
                        <form action="<?php echo e(route('admin.contact.page.builder')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="about_page_page_builder_status"><strong><?php echo e(__('Enable/Disable Page Builder For Home Page')); ?></strong></label>
                                <label class="switch">
                                    <input type="checkbox" name="contact_page_page_builder_status"
                                           <?php if(!empty(get_static_option('contact_page_page_builder_status'))): ?> checked <?php endif; ?> >
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <button type="submit"
                                    class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Page Builder')); ?></h4>
                        <div id="page-builder-wrap"
                             class="margin-top-50 page-builder-content-wrap <?php if(get_static_option('contact_page_page_builder_status')): ?> d-block <?php else: ?> d-none <?php endif; ?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="page-builder-area-wrapper">
                                        <ul id="sortable"
                                            class="sortable available-form-field main-fields sortable_widget_location">
                                            <?php echo \App\PageBuilder\PageBuilderSetup::get_saved_addons_by_location('contactpage'); ?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="search-wrap">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="search_addon_field" placeholder="<?php echo e(__('Search Addon')); ?>" name="s">
                                        </div>
                                    </div>
                                    <div class="all-addons-wrapper">
                                        <ul id="sortable_02" class="available-form-field all-widgets sortable_02">
                                            <?php echo \App\PageBuilder\PageBuilderSetup::get_admin_panel_widgets(); ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/summernote-bs4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/spectrum.min.js')); ?>"></script>

    <script>
        (function ($) {
            "use strict";

            $(document).ready(function () {

                /*---------------------------------
              *   PREVIEW IMAGE
              * --------------------------------*/
                $(document).on('mouseover','.all-addons-wrapper ul.ui-sortable li.widget-handler',function (e){
                    var imgUrl = $(this).find('a').attr('href');
                    $(this).append('<div class="imageupshow"><img src="'+imgUrl+'" alt=""></div>');
                });
                $(document).on('mouseout','.all-addons-wrapper ul.ui-sortable li.widget-handler',function (e){
                    $(this).find('.imageupshow').remove();
                });

                /*----------------------------------
                *   SEARCH WIDGETS
                * ---------------------------------*/
                $(document).on('keyup','#search_addon_field',function (){
                    var searchText = $(this).val();
                    var allWidgets = $('.available-form-field.sortable_02 li > h4');
                    console.log($(this).val());
                    console.log(allWidgets);
                    $.each(allWidgets,function (index,value){
                       var text = $(this).text();
                       var found = text.toLowerCase().match(searchText.toLowerCase().trim());
                       if (!found){
                           $(this).parent().hide();
                       }else{
                           $(this).parent().show();
                       }
                    });
                });
                /*-----------------------------------
                *   RANGE SCRIPT
                * ---------------------------------*/
                $(document).on('change','.page-builder-area-wrapper input[type="range"]',function (e){
                   e.preventDefault();
                    var el = $(this);
                    el.next('.range-val').text(el.val()+el.data('unit-type'));
                });

                    /*-----------------------------------
                   *   PAGE BUILDER SHOW/HIDE CONDITION
                   * ---------------------------------*/
                var checkbox = document.querySelector('input[name="contact_page_page_builder_status"]');
                checkbox.addEventListener('change', ShowHidePageBuilderContainer);
                function ShowHidePageBuilderContainer() {
                    var value = document.querySelector('input[name="contact_page_page_builder_status"]:checked');
                    var pageBuilderContainer = document.getElementById('page-builder-wrap');
                    if (value !== null) {
                        pageBuilderContainer.classList.remove('d-none');
                        pageBuilderContainer.classList.add('d-block');
                    } else {
                        pageBuilderContainer.classList.add('d-none');
                        pageBuilderContainer.classList.remove('d-block');
                    }
                }
                /*-----------------------------------
                *   PAGE BUILDER CORE SCRIPT
                * ---------------------------------*/

                $(".sortable").sortable({
                    handle: "h4.top-part",
                    axis: "y",
                    placeholder: "sortable-placeholder",
                    receive: function (event, ui) {
                        resetOrder(this.id);
                    },
                    stop: function (event, ui) {
                        resetOrder(this.id);
                    }
                });

                $(".sortable_02").sortable({
                    handle: "h4.top-part",
                    connectWith: '.sortable_widget_location',
                    helper: "clone",
                    remove: function (e, li) {
                        var addonClass = li.item.attr('data-name');
                        var namespace = li.item.attr('data-namespace');
                        var markup = '';
                        $.ajax({
                            'url': "<?php echo e(route('admin.page.builder.get.addon.markup')); ?>",
                            'type': "POST",
                            'data': {
                                '_token': "<?php echo csrf_token(); ?>",
                                'addon_class': addonClass,
                                'addon_namespace': namespace,
                                'addon_page_id': '',
                                'addon_page_type': 'static',
                                'addon_location': 'contactpage',
                            },
                            async: false,
                            success: function (data) {
                                markup = data;
                            }
                        });
                        li.item.clone()
                            .html(markup)
                            .insertAfter(li.item);
                        $(this).sortable('cancel');

                        return markup;
                    }
                }).disableSelection();

                $('body').on('click', '.remove-widget', function (e) {
                    $(this).parent().remove();
                    $(".sortable_02").sortable("refreshPositions");
                    var parent = $(this).parent();
                    var widgetType = parent.find('input[name="addon_type"]').val();
                    resetOrder();

                    if (widgetType === 'update') {
                        var widget_id = parent.find('input[name="id"]').val();
                        $.ajax({
                            'url': "<?php echo e(route('admin.page.builder.delete')); ?>",
                            'type': "POST",
                            'data': {
                                '_token': "<?php echo csrf_token(); ?>",
                                'id': widget_id
                            },
                            success: function (data) {
                            }
                        });
                    }
                });

                $('body').on('click', '.expand', function (e) {
                    $(this).parent().find('.content-part').toggleClass('show');
                    var expand = $(this).children('i');
                    var parent = $(this).parent();
                    var classname = $(this).parent().data('name');
                    if (expand.hasClass('ti-angle-down')) {
                        expand.attr('class', 'ti-angle-up');
                        $('body .nice-select').niceSelect();
                        $('.note-editable').trigger('focus');
                        var colorPickerNode = $('li[data-name="'+classname+'"] .color_picker');
                        colorPickerInit(colorPickerNode);

                        var summerNote = $('li[data-name="'+classname+'"] .summernote');

                            summerNote.summernote({
                                disableDragAndDrop: true,
                                height: 200,   //set editable area's height
                                codeviewFilter: true,
                                codeviewIframeFilter: true,
                                toolbar: [
                                    // [groupName, [list of button]]
                                    ['style', ['bold', 'italic', 'underline', 'clear']],
                                    ['font', ['strikethrough', 'superscript', 'subscript']],
                                    ['fontsize', ['fontsize']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['height', ['height']],
                                    ['Insert', ['link','table','video','picture']],
                                ],
                                styleTags: [
                                    'p',
                                    { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
                                    'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
                                ],
                                codemirror: { // codemirror options
                                    theme: 'monokai'
                                },
                                callbacks: {
                                    onPaste: function (e) {
                                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                                        e.preventDefault();
                                        document.execCommand('insertText', false, bufferText);
                                    }
                                }
                            });
                    } else {
                        expand.attr('class', 'ti-angle-down');
                        $('body .color_picker').spectrum('destroy');
                        $('body .nice-select').niceSelect('destroy');
                        $('li[data-name="'+classname+'"] .summernote').summernote('destroy');
                    }
                    $('body .icp-dd').iconpicker('destroy');
                    $('body .icp-dd').iconpicker();

                });

                $('body').on('click', '.widget_save_change_button', function (e) {
                    e.preventDefault();
                    var parent = $(this).parent().find('.widget_save_change_button');
                    parent.text('<?php echo e(__('Saving...')); ?>').attr('disabled', true);
                    var form = $(this).parent();
                    var widgetType = $(this).parent().find('input[name="addon_type"]').val();
                    var formAction = $(this).parent().attr('action');
                    var udpateId = '';
                    var formContainer = $(this).parent();

                    $.ajax({
                        type: "POST",
                        url: formAction,
                        data: form.serializeArray(),
                        success: function (data) {
                            udpateId = data.id;
                            if (widgetType === 'new') {
                                formContainer.attr('action', "<?php echo e(route('admin.page.builder.update')); ?>")
                                formContainer.find('input[name="addon_type"]').val('update');
                                formContainer.prepend('<input type="hidden" name="id" value="' + udpateId + '">');
                            }

                            if (data === 'ok') {
                                form.append('<span class="text-success"><?php echo e(__('data saved success')); ?></span>');
                            }
                            setTimeout(function () {
                                form.find('span.text-success').remove();
                            }, 2000);
                        }
                    });

                    parent.text('saved..');
                    setTimeout(function () {
                        parent.text('<?php echo e(__('Save Changes')); ?>').attr('disabled', false);
                    }, 1000);
                });

                /**
                 * reset order function
                 * */
                function resetOrder(dropedOn) {
                    var allItems = $('#' + dropedOn + ' li');
                    $.each(allItems, function (index, value) {
                        $(this).find('input[name="widget_order"]').val(index + 1);
                        $(this).find('input[name="widget_location"]').val(dropedOn);
                        var id = $(this).find('input[name="id"]').val();
                        var widget_order = index + 1;
                        if (typeof id != 'undefined') {
                            reset_db_order(id, widget_order);
                        }
                    });
                }

                /**
                 * reorder function
                 * */
                function reset_db_order(id, addon_order) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('admin.page.builder.update.addon.order')); ?>",
                        data: {
                            _token: "<?php echo e(csrf_token()); ?>",
                            id: id,
                            addon_order: addon_order
                        },
                        success: function (data) {
                            //response ok if it saved success
                        }
                    });
                }

                $(document).on('click', '.widget-area-expand', function (e) {
                    e.preventDefault();
                    var widgetbody = $(this).parent().parent().find('.widget-area-body');
                    widgetbody.toggleClass('hide');
                    var expand = $(this).children('i');
                    if (expand.hasClass('ti-angle-down')) {
                        expand.attr('class', 'ti-angle-up');
                    } else {
                        expand.attr('class', 'ti-angle-down');
                        var allWidgets = $(this).parent().parent().find('.widget-area-body ul li');
                        $.each(allWidgets, function (value) {
                            $(this).find('.content-part').removeClass('show');
                        });
                    }
                });
                /*-----------------------------------
                *  COLOR Picker INIT FUnction
                * ---------------------------------*/

                function colorPickerInit(selector){

                    $.each(selector,function (index,value){
                        var el = $(this);
                        el.spectrum({
                            showAlpha: true,
                            showPalette: true,
                            cancelText : '',
                            showInput: true,
                            allowEmpty:true,
                            chooseText : '',
                            maxSelectionSize: 2,
                            color: el.next('input').val(),
                            change: function(color) {
                                el.next('input').val( color ? color.toRgbString() : '');
                                el.css({
                                    'background-color' : color ? color.toRgbString() : ''
                                });
                            },
                            move: function(color) {
                                el.next('input').val( color ? color.toRgbString() : '');
                                el.css({
                                    'background-color' : color ? color.toRgbString() : ''
                                });
                            },
                            palette: [
                                [
                                    "<?php echo e(get_static_option('site_color')); ?>",
                                    "<?php echo e(get_static_option('site_main_color_two')); ?>",
                                    "<?php echo e(get_static_option('site_secondary_color')); ?>",
                                    "<?php echo e(get_static_option('site_heading_color')); ?>",
                                    "<?php echo e(get_static_option('site_paragraph_color')); ?>",
                                    "<?php echo e(get_static_option('portfolio_home_color')); ?>",
                                    "<?php echo e(get_static_option('logistics_home_color')); ?>",
                                    "<?php echo e(get_static_option('industry_home_color')); ?>",
                                    "<?php echo e(get_static_option('construction_home_color')); ?>",
                                    "<?php echo e(get_static_option('lawyer_home_color')); ?>",
                                    "<?php echo e(get_static_option('political_home_color')); ?>",
                                    "<?php echo e(get_static_option('medical_home_color')); ?>",
                                    "<?php echo e(get_static_option('medical_home_color_two')); ?>",
                                    "<?php echo e(get_static_option('fruits_home_color')); ?>",
                                    "<?php echo e(get_static_option('fruits_home_heading_color')); ?>",
                                    "<?php echo e(get_static_option('portfolio_home_dark_color')); ?>",
                                    "<?php echo e(get_static_option('portfolio_home_dark_two_color')); ?>",
                                    "<?php echo e(get_static_option('charity_home_color')); ?>",
                                    "<?php echo e(get_static_option('dagency_home_color')); ?>",
                                    "<?php echo e(get_static_option('cleaning_home_color')); ?>",
                                    "<?php echo e(get_static_option('cleaning_home_two_color')); ?>",
                                    "<?php echo e(get_static_option('course_home_color')); ?>",
                                    "<?php echo e(get_static_option('grocery_home_two_color')); ?>",
                                    "<?php echo e(get_static_option('grocery_home_color')); ?>"
                                ]
                            ]
                        });

                        el.on("dragstop.spectrum", function(e, color) {
                            el.next('input').val( color.toRgbString());
                            el.css({
                               'background-color' : color.toHexString()
                            });
                        });
                    });
                }

                /*------------------------------------------
                *   ICON PICKET INIT
                * ----------------------------------------*/
                $('.icp-dd').iconpicker();
                $('body').on('iconpickerSelected','.icp-dd', function (e) {
                    var selectedIcon = e.iconpickerValue;
                    $(this).parent().parent().children('input').val(selectedIcon);
                    $('body .dropdown-menu.iconpicker-container').removeClass('show');
                });

                /*-------------------------------------------
                *   REPEATER SCRIPT
                * ------------------------------------------*/
                $(document).on('click','.all-field-wrap .action-wrap .add',function (e){
                    e.preventDefault();

                    var el = $(this);
                    var parent = el.parent().parent();
                    var container = $('.all-field-wrap');
                    var clonedData = parent.clone();
                    var containerLength = container.length;
                    clonedData.find('#myTab').attr('id','mytab_'+containerLength);
                    clonedData.find('#myTabContent').attr('id','myTabContent_'+containerLength);
                    var allTab =  clonedData.find('.tab-pane');
                    allTab.each(function (index,value){
                        var el = $(this);
                        var oldId = el.attr('id');
                        el.attr('id',oldId+containerLength);
                    });
                    var allTabNav =  clonedData.find('.nav-link');
                    allTabNav.each(function (index,value){
                        var el = $(this);
                        var oldId = el.attr('href');
                        el.attr('href',oldId+containerLength);
                    });

                    parent.parent().append(clonedData);

                    if (containerLength > 0){
                        parent.parent().find('.remove').show(300);
                    }
                    // parent.parent().find('.iconpicker-popover').remove();
                    parent.parent().find('.icp-dd').iconpicker('destroy');
                    parent.parent().find('.icp-dd').iconpicker();

                });

                $(document).on('click','.all-field-wrap .action-wrap .remove',function (e){
                    e.preventDefault();
                    var el = $(this);
                    var parent = el.parent().parent();
                    var container = $('.all-field-wrap');

                    if (container.length > 1){
                        el.show(300);
                        parent.hide(300);
                        parent.remove();
                    }else{
                        el.hide(300);
                    }
                });



            });
        })(jQuery);
    </script>
    <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
    <?php echo $__env->make('backend.partials.media-upload.media-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wildmp.com\@core\resources\views/backend/page-builder/contactpage.blade.php ENDPATH**/ ?>