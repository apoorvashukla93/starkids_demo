<?php include 'include/dbconfig.php'; ?>
<?php 

    include("header.php");

?>
<div class="inner-page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-title">
                            <h2>Upload Your Photo</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home /</a> Upload Photo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->

        <!-- Multistep Form Start Here -->
        <div class="multistep-form pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!-- multistep form -->
                        <form class="regform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active">Your Personal Informations</li>
                                <li>Upload Photo Informations</li>
                                <li>Preview Details Again</li>
                                <li>Terms and Conditions</li>
                                <li>Status </li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset id="first">
                                <h2 class="title">Your Personal Informations</h2>
                                <input type="text" class="text_field" name="name" placeholder="Your First Name" />
                                <br/>
                                <input type="text" class="text_field" name="name" placeholder="Your Last Name" />
                                <br/>
                                <input type="email" class="text_field" name="email" placeholder="Email" />
                                <br/>
                                <input type="password" class="text_field" name="pass" placeholder="Password" />
                                <br/>
                                <input type="password" class="text_field" name="cpass" placeholder="Confirm Password" />
                                <br/>
                                <input type="button" name="next" class="next_btn margin-0" value="Next >" />
                            </fieldset>
                            <fieldset>
                                <h2 class="title">Upload Photo Informations</h2>
                                <select class="options">
                                    <option>--Select Category--</option>
                                    <option>Photo Contest</option>
                                    <option>HD Photo</option>
                                    <option>Sractch View Photo</option>
                                    <option>Normal Photo</option>
                                </select>
                                <br/>
                                <input type="text" class="text_field" name="marks" placeholder="Your Photo Name" />
                                <br/>
                                <input type="text" class="text_field" name="pyear" placeholder="Photo Size" />
                                <br/>
                                <input type="text" class="text_field" name="univ" placeholder="Photo Color" />
                                <br/>
                                <input type="file" class="text_field" name="univ" />
                                <br/>
                                <textarea name="textarea" cols="30" rows="10" placeholder="Photo Upload"></textarea>
                                <input type="button" name="previous" class="pre_btn" value="< Back" />
                                <input type="button" name="next" class="next_btn" value="Next >" />
                            </fieldset>
                            <fieldset>
                                <h2 class="title">Preview Details Again</h2>
                                <ul id="preview">
                                    <li><img src="images/preview.jpg" alt=""></li>
                                    <li><span>Name :</span> John Deo</li>
                                    <li><span>E-mail :</span> johndeo@gmail</li>
                                    <li><span>Photo Name :</span> Natural Photo for Photo Grapher</li>
                                    <li><span>Photo Category :</span> Natural Photo</li>
                                    <li><span>Photo Size :</span> 1920x7000</li>
                                    <li><span>Photo Nature :</span> HD</li>
                                    <li><span>Photo Color :</span> Dark</li>
                                    <li><span>Photo Status :</span> Publish</li>
                                </ul>
                                <input type="button" name="previous" class="pre_btn" value="< Back" />
                                <input type="button" name="next" class="next_btn" value="Next >" />
                            </fieldset>
                            <fieldset>
                                <h2 class="title">Terms and Conditions</h2>
                                <div class="term-and-conditions">
                                    <input type="checkbox"> I have read and accept Official contest rules
                                </div>
                                <input type="button" name="previous" class="pre_btn" value="< Back" />
                                <input type="button" name="next" class="next_btn" value="Submit >" />
                            </fieldset>
                            <fieldset>
                                <h2 class="title">Status Sucess</h2>
                                <p>Thanks for your submitting Photo , we will inform you soon.</p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        


<?php include("footer.php")  ?>