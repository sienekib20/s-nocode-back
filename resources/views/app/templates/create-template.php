<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
    <title>
        <?= 'Partner' ?>
    </title>
</head>

<body>
    <div class="sp-wrapper">
        <?= parts('nav.navbar') ?>
        <div class="sp-main-content">
            <div class="sp-container">
                <?= parts('nav.sidebar') ?>
                <div class="sp-data-page">
                    <div class="sp-card">
                        <div class="sp-card-title">
                            <span class="title"></span>
                            <smal class="text-muted"></smal>
                        </div>
                        <div class="sp-card-content">
                            <div class="sp-create-template">
                                <form action="<?= route('template.add') ?>" method="POST" enctype="multipart/form-data" class="sp-form">
                                    <div class="sp-accordion">
                                        <div class="sp-accordion-item active">
                                            <div class="sp-accordion-header">
                                                <div class="title">
                                                    <span class="bold">Template</span>
                                                    <small class="text-muted">Basic template information</small>
                                                </div>
                                                <span class="bi-chevron-down"></span>
                                            </div>
                                            <div class="sp-accordion-contain">
                                                <div class="sp-accodion-row">
                                                    <div class="sp-form-fields">
                                                        <input type="text" name="temp_name" class="sp-form-field" placeholder="Template name" required>
                                                        <small class="sp-form-error"></small>
                                                    </div>
                                                    <div class="sp-form-fields">
                                                        <input type="text" name="temp_author" class="sp-form-field" placeholder="Author" required>
                                                        <small class="sp-form-error"></small>
                                                    </div>
                                                </div>
                                                <div class="sp-accodion-row">
                                                    <div class="sp-form-fields">
                                                        <input type="text" name="temp_description" class="sp-form-field" placeholder="Description">
                                                        <small class="sp-form-error"></small>
                                                    </div>
                                                </div>

                                                <div class="sp-accodion-row">
                                                    <div class="sp-form-fields">
                                                        <input type="text" name="temp_editable" class="sp-form-field" placeholder="Editable: true/false" required>
                                                        <small class="sp-form-error"></small>
                                                    </div>
                                                    <div class="sp-form-fields">
                                                        <input type="text" name="temp_type" class="sp-form-field" placeholder="Type: Landing, Dash, Other">
                                                        <small class="sp-form-error"></small>
                                                    </div>
                                                </div>

                                                <div class="sp-accodion-row">
                                                    <div class="sp-form-fields">
                                                        <input type="text" name="temp_price" class="sp-form-field" placeholder="Price">
                                                        <small class="sp-form-error"></small>
                                                    </div>
                                                </div>

                                                <div class="sp-accodion-row">
                                                    <div class="sp-form-fields"></div>
                                                    <div class="sp-form-fields">
                                                        <input type="text" name="temp_payment_status" class="sp-form-field" placeholder="Payment status: 0/1" required>
                                                        <small class="sp-form-error"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!--/.sp-accordion-item-->

                                        <div class="sp-accordion-item">
                                            <div class="sp-accordion-header">
                                                <div class="title">
                                                    <span class="bold">Template components</span>
                                                    <small class="text-muted">Load all template pages and assets</small>
                                                </div>
                                                <div>
                                                    <!--<button type="button" class="sp-accordion-btn"><span class="bi-plus"></span> file</button>
                          <button type="button" class="sp-accordion-btn"><span class="bi-plus"></span> image</button> -->
                                                    <span class="bi-chevron-down"></span>
                                                </div>
                                            </div>
                                            <?php
                                            $items = [
                                                [
                                                    'title' => 'Load All Assets',
                                                    'name' => 'template_assets[]',
                                                    'accept' => '.css,.js',
                                                    'id' => 'assets',
                                                ],
                                                [
                                                    'title' => 'Load All Images',
                                                    'name' => 'template_images[]',
                                                    'accept' => 'image/jpg,image/png,image/jpeg',
                                                    'id' => 'images'
                                                ],
                                                [
                                                    'title' => 'Load All Pages',
                                                    'name' => 'template_pages[]',
                                                    'accept' => '.html,.htm',
                                                    'id' => 'pages'
                                                ]
                                            ];
                                            ?>
                                            <div class="sp-accordion-contain" id="asset-container">
                                                <?php foreach ($items as $item) : ?>
                                                    <div class="sp-accordion-row">
                                                        <div class="sp-form-fields full-width">
                                                            <div class="sp-form-label sp-form-field">
                                                                <div>
                                                                    <small class="bi-three-dots-vertical"></small>
                                                                    <label for="<?= $item['id'] ?>"> <small>
                                                                            <?= $item['title'] ?>
                                                                        </small> </label>
                                                                    <small class="statusFile">0 ficheiro(s)</small>
                                                                    <button type="button" style="margin-right: 0.5rem;">reset</button>
                                                                </div>
                                                                <span class="bi-x" onclick="removeMe(this)"></span>
                                                            </div>
                                                            <input type="file" name="<?= $item['name'] ?>" id="<?= $item['id'] ?>" accept="<?= $item['accept'] ?>" onchange="changeStatusFileText(this)" multiple hidden>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div><!--/.sp-accordion-item-->
                                    </div>

                                    <div class="sp-form-contain">
                                        <button type="submit" class="sp-form-btn">Create</button>
                                    </div>
                                </form> <!--/.form-create-->

                            </div>
                        </div>
                    </div> <!--/.sp-card-->

                    <div class="leaveAlwaysSpaceInBottomOfPage"></div>

                </div> <!--/.sp-data-page-->

            </div> <!--/.sp-container-->

        </div> <!--/.sp-main-content-->



    </div> <!--/.sp-wrapper-->

</body>

</html>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/default/predefinidos.js?v=<?= time() ?>"></script>
<script src="/assets/js/template/create.js?v=<?= time() ?>"></script>