<?php $page = 'contact'; include 'header.php'; ?> 

<div class="pv-back">
    <div class="container">
        <h2>Contact Us</h2>
        <p><a href="index.php">Home</a> &nbsp; | &nbsp; Contact</p>
    </div>
</div>
<div class="contact-page">
    <div style="margin-top:40px;">
        <div class="container">
            <h2>GET IN TOUCH</h2>
        </div>
    </div>
    <section class="midcont">
        <div class="container">
            <div class="sub-content">
                <div class="row">
                    <div class="col-md-4 section wow slide" data-wow-delay="1s">
                        <div class="">
                            <ul class="address wow fadeInDown" data-wow-delay="2s">
                                <li> <i> Address:</i>
                                    <a href="https://www.google.com/maps/place/Charleston,+SC+29403/@32.8048118,-79.9614481,14z/data=!3m1!4b1!4m6!3m5!1s0x88fe7a5be34d02e9:0x36d7be821e73f989!8m2!3d32.8007242!4d-79.9500477!16s%2Fm%2F020vtx6" class="contact_links">Charleston, SC 29403</a>
                                </li>
                            </ul>
                            <ul class="address wow fadeInDown" data-wow-delay="3s">
                                <li> <i>Phone:</i>
                                    <a href="telme:+1 (843) 568-4444" class="contact_links">+1 (843) 568-4444</a>
                                </li>
                            </ul>
                            <ul class="address wow fadeInDown" data-wow-delay="4s">
                                <li> <i>Email:</i>
                                    <a href="mailto:info@charlestonyellowtoptaxi.com" class="contact_links">info@charlestonyellowtoptaxi.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-8 col-md-8 col-sm-12 abb">
                        <div class="row thank-message">
                            <div class="col-md-12"> <br /> </div>
                        </div>
                        <div class="sub">
                            <form action="response.php" method="post" onsubmit="return formvalidation(this)">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="inp"> 
                                            <input id="firstname" name="firstname" type="text" tabindex="1" class="border inpinner" onfocus="this.className='border1';" onblur="this.className='border';" placeholder="Your Full Name*" value="" /> 
                                        </div>
                                        <div class="inp"> 
                                            <input id="address" name="address" type="text" tabindex="3" class="border inpinner" onfocus="this.className='border1';" onblur="this.className='border';" placeholder="Your Address*" value="" /> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="inp"> 
                                            <input id="phone" name="phone" type="text" tabindex="2" class="border inpinner" onfocus="this.className='border1';" onblur="this.className='border';" placeholder="Your Phone*" value="" /> 
                                        </div>
                                        <div class="inp"> 
                                            <input id="email" name="email" type="text" tabindex="4" class="border inpinner" onfocus="this.className='border1';" onblur="this.className='border';" placeholder="Your Email*" value="" /> 
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="inp"> 
                                            <textarea name="comments" cols="20" rows="15" tabindex="5" class="borderk inpinner" id="comments" style="height:150px" onfocus="this.className='borderka';" placeholder="Your Comment*" onblur="this.className='borderk';"></textarea> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        <button id="submit" class="default-btn" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53656.448155154954!2d-79.97895800000245!3d32.80477207653719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fe7a5be34d02e9%3A0x36d7be821e73f989!2sCharleston%2C+SC+29403%2C+USA!5e0!3m2!1sen!2snp!4v1507043071389" width="100%" height="300" frameborder="0" style="border:0; pointer-events:none;" allowfullscreen></iframe> 

<?php include 'footer.php'; ?>