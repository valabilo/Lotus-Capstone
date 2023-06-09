<div class=" container-fluid mt-3 p-0 ">
    <h2 class="text-center py-5 bg-secondary fs-2 text-light fw-bold">PERFORMANCE, DELIVERED</h2>
</div>
<div>
    <a href="#myForm" onclick="openForm()" class="open-button">
        <img width="75px"
            src="https://cdn4.iconfinder.com/data/icons/social-media-flat-7/64/Social-media_FB-Messenger-256.png"
            alt=""></a>
    <div class="chat-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <h1>Chat</h1>
            <label for="msg"><b>Message</b></label>
            <textarea placeholder="Type message.." name="msg" required></textarea>
            <button type="submit" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
</div>
<footer id="footer">
    <div class="footer-inner">
        <div class="row mx-3 pt-3 wrapper clearfix">
            <div class="col-md-4 flex-1">
                <div class="footer-logo mb-4">
                    <a href="#">
                        <img width="200px" height="150px" src="{{ asset('public/projectassets/logo.jpg') }}"
                            alt="">
                    </a>
                </div>
                <div class="footer-support">
                    <h3 class="foot-font fs-3 pb-3 pt-2">Support</h3>
                    <hr class="me-4">
                    <p class="py-2"><a href="#">Service Center</a></p>
                    <p class="pb-2"><a href="#">Product Registration</a></p>
                    <p class="pb-2"><a href="#">Warranty Informations</a></p>
                    <p class="pb-2"><a href="#">FAQs</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <div>
                        <h3 class="foot-font fs-3 footer-about pb-3 pt-2">About Us</h3>
                        <hr class="me-4">
                        <p class="py-2"><a href="#">Why Lotus</a></p>
                        <p class="pb-2"><a href="#">Featured Articles</a></p>
                    </div>
                    <div>
                        <h3 class="footer-contact foot-font fs-3 pb-3 pt-2">Contact Us</h3>
                        <hr class="me-4">
                        <div>
                            @foreach ($contact as $contact)
                                <div class="col-md-4 d-flex gap-1 py-2">
                                    <img width="20px" height="20px"
                                        src="{{ asset('public/projectassets/phone-icon.png') }}" alt="">
                                    <p class="text-nowrap">{{ $contact->number }}</p>
                                </div>
                            @endforeach
                            {{-- <div class="col-md-4 d-flex gap-1">
                                <img width="20px" height="20px" src="projectassets/phone-icon.png"" alt="">
                                <p class="text-nowrap">(02)8-921-0000</p>
                            </div> --}}
                        </div>
                    </div>
                    <div>
                        <h3 class="foot-font fs-3 pb-3 pt-2">Follow Us</h3>
                    </div>
                    <hr class="me-4">
                    <div class="socials row mt-3 px-5 pb-2">
                        <div class="col"><a href="...">
                                <img class="rounded img-fluid" width="50px" height="50px"
                                    src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_facebook-256.png"
                                    alt=""></a>
                        </div>
                        <div class="col"><a href="...">
                                <img class="rounded img-fluid" width="50px" height="50px"
                                    src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Twitter3_colored_svg-512.png"
                                    alt=""></a>
                        </div>
                        <div class="col"><a href="...">
                                <img class="rounded img-fluid" width="50px" height="50px"
                                    src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-128.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="foot">
                    <form class="footer-form footer-form" action="">
                        <h3 class="foot-font fs-3 pb-3 pt-2">Email Sign up</h3>
                        <p class="my-1">Sign up to receive the latest info on new LOTUS products, special offers and
                            more.</p>
                        <table>
                            <tr>
                                <td class="td1">
                                    <label for="" class="col-sm-5 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control ms-1">
                                    </div>
                                </td>
                                <td class="td2 ">
                                    <label for="" class="col-sm-5 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control ms-1">
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td class="td3" colspan="2">
                                    <label for="" class="col-sm-5 col-form-label">Email Address</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control ms-1"><br>
                                        <a href="#footer" class="btn btn-outline-warning mb-2">Subscribe</a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div>
                    <small>By signing up you agree to receive emails from Lotus with news, special offers, promotions
                        and
                        other
                        information. You can unsubscribe at any time. See our Privacy Policy or Contact Us by filling
                        out
                        this form.</small>
                </div>
            </div>
        </div>
        <div class="footer-ann bg-dark">
            <div class="col-md-3">
                <h2 class="ms-2 px-5 py-2 textt-wrap">© Lotus Philippines</h2>
            </div>
            <div class="col-md-9">
                <h2 class="ms-2 px-5 py-2">ALL RIGHTS RESERVED 2023</h2>
            </div>
        </div>
</footer>
<!-------Chat Us-->
