@extends('frontend.app')

@section('title')
    Contact Us
@stop

@push('styles')
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="frontend/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="frontend/css/headers/header-default.css">
    <link rel="stylesheet" href="frontend/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="frontend/plugins/animate.css">
    <link rel="stylesheet" href="frontend/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="frontend/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="frontend/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="frontend/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="frontend/css/pages/page_contact.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="frontend/css/theme-colors/blue.css" id="style_color">
@endpush

@section('content')
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <div class="headline"><h2>Contact Form</h2></div>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat.</p><br>

                <form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form sky-changes-3">
                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label class="label">Name</label>
                                <label class="input">
                                    <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="name" id="name">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">E-mail</label>
                                <label class="input">
                                    <i class="icon-append fa fa-envelope-o"></i>
                                    <input type="email" name="email" id="email">
                                </label>
                            </section>
                        </div>

                        <section>
                            <label class="label">Subject</label>
                            <label class="input">
                                <i class="icon-append fa fa-tag"></i>
                                <input type="text" name="subject" id="subject">
                            </label>
                        </section>

                        <section>
                            <label class="label">Message</label>
                            <label class="textarea">
                                <i class="icon-append fa fa-comment"></i>
                                <textarea rows="4" name="message" id="message"></textarea>
                            </label>
                        </section>

                    </fieldset>

                    <footer>
                        <button type="submit" class="btn-u">Send message</button>
                    </footer>

                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p>Your message was successfully sent!</p>
                    </div>
                </form>
            </div><!--/col-md-9-->

            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2>Contacts</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
                </ul>

                <!-- Business Hours -->
                <div class="headline"><h2>Business Hours</h2></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                    <li><strong>Saturday:</strong> 11am to 3pm</li>
                    <li><strong>Sunday:</strong> Closed</li>
                </ul>

                <!-- Why we are? -->
                <div class="headline"><h2>Why we are?</h2></div>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
                    <li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
                    <li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
                </ul>
            </div><!--/col-md-3-->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
@stop