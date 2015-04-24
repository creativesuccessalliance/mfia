<?php

$PageTitle = 'Multi Family Investing Association - Apartment Investing';

// get kissmetrics session id
if (isset($_COOKIE['km_ai'])) {
    $kiss_id = $_COOKIE['km_ai'];
}

// set the cookies
// utm_source
if (isset($_COOKIE['utm_source'])) {
    $utm_source = $_COOKIE['utm_source']; // get data from cookie
}
else {
    $utm_source = $_GET['utm_source']; // get cookie variable
    setcookie('utm_source', $utm_source, time() + (86400 * 30), '/', '.multifamilyinvestors.org'); // set the cookie and expire after 30 days (86400 = 1 day)
}
// utm_campaign
if (isset($_COOKIE['utm_campaign'])) {
    $utm_campaign = $_COOKIE['utm_campaign'];
}
else {
    $utm_campaign = $_GET['utm_campaign'];
    setcookie('utm_campaign', $utm_campaign, time() + (86400 * 30), '/', '.multifamilyinvestors.org');
}
// utm_medium
if (isset($_COOKIE['utm_medium'])) {
    $utm_medium = $_COOKIE['utm_medium'];
}
else {
    $utm_medium = $_GET['utm_medium'];
    setcookie('utm_medium', $utm_medium, time() + (86400 * 30), '/', '.multifamilyinvestors.org');
}
// utm_term
if (isset($_COOKIE['utm_term'])) {
    $utm_term = $_COOKIE['utm_term'];
}
else {
    $utm_term = $_GET['utm_term'];
    setcookie('utm_term', $utm_term, time() + (86400 * 30), '/', '.multifamilyinvestors.org');
}
// utm_content
if (isset($_COOKIE['utm_content'])) {
    $utm_content = $_COOKIE['utm_content'];
}
else {
    $utm_content = $_GET['utm_content'];
    setcookie('utm_content', $utm_content, time() + (86400 * 30), '/', '.multifamilyinvestors.org');
}
// placement
if (isset($_COOKIE['placement'])) {
    $placement = $_COOKIE['placement'];
}
else {
    $placement = $_GET['placement'];
    setcookie('placement', $placement, time() + (86400 * 30), '/', '.multifamilyinvestors.org');
}
// aid
if (isset($_COOKIE['aid'])) {
    $aid = $_COOKIE['aid'];
}
else {
    $aid = $_GET['aid'];
    setcookie('aid', $aid, time() + (86400 * 30), '/', '.multifamilyinvestors.org');
}
// device
if (isset($_COOKIE['device'])) {
    $device = $_COOKIE['device'];
}
else {
    $device = $_GET['device'];
    setcookie('device', $device, time() + (86400 * 30), '/', '.multifamilyinvestors.org');
}
// inf_field_Email
if (isset($_COOKIE['inf_field_Email'])) {
    $inf_field_Email = $_COOKIE['inf_field_Email'];
}
else {
    $inf_field_Email = $_GET['inf_field_Email'];
    setcookie('inf_field_Email', $inf_field_Email, time() + (86400 * 30), '/', '.multifamilyinvestors.org');
}
?>

<?php include('../header.php');?>

    <!-- Call to Action -->
    <div id="call-to-action-section" class="blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center" style="font-size: 40px">"It's Time to Increase Your Capital Flowing Investments
                        <br>and Obtain Future Appreciation"</h1>
                    <h2 class="text-center" style="">Learn The System Used to Invest In Multi-Family Properties, <span style="color: #f9cd55">Created By
                    	<br>A Man Who Has Controlled Over 8,200 Units Across The United States!</span></h2>
                    <hr class="dashed">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px">
                        <iframe src="//fast.wistia.net/embed/iframe/o7cx7ee1a3?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe>
                        <script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
                    </div>
                </div>
                <div class="col-sm-5">
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-2x fa-check-circle"></i>How to <u>find apartment investments quickly</u>, even if you’re just getting started.</li>
                        <li><i class="fa-li fa fa-2x fa-check-circle"></i>How to <u>locate great properties</u> that over 99% of buyers miss.</li>
                        <li><i class="fa-li fa fa-2x fa-check-circle"></i>How to <u>find easy to access private funding</u> for your real estate deals.</li>             
                        <li style="padding-top: .6em"><i class="fa-li fa fa-2x fa-check-circle"></i>How to <u>get amazing management companies</u> to manage your tenants, so you are never a “landlord.”</li>
                        <li><i class="fa-li fa fa-2x fa-check-circle"></i>What markets will <u>give you the highest returns.</u></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    <a href="#opt-in" data-toggle="modal" data-target="#opt-in" class="btn center-block cta-button">Yes! Send Me The FREE Training Course&nbsp;<i class="fa fa-angle-double-right"></i></a>
                    <p class="text-center cta-disclaimer">
                        <img src="../img/lock.png" height="18" width="14">&nbsp;We respect privacy. Unsubscribe at any time.
                    </p>
                </div>
            </div>

            <p class="text-center" style="font-size: 14px; color: #fff">As with all investments, there is always an element of risk, there is a chance of you losing part or all of your investment.
                <br>You must always try to get the best education and practice safe investing, no matter which investment vehicle you choose.</p>
        </div>
    </div>

    <!-- Intro -->
    <div id="main-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Dear Real Estate Investor,</h2>
                    <p>As you may know, multi-family investing is the buying, selling and/or holding of multi-family properties for monthly cash flow, equity appreciation and short term or long term profit. Properties can be “flipped” (bought and sold quickly) for immediate profit or held for long term gain and wealth creation.</p>
					<p>Now is a good time to start investing in multi-family properties. When you signup today for our <a href="#opt-in" data-toggle="modal" data-target="#opt-in"><strong>FREE 5-Day Online Training Course</strong></a>, we'll send you our <strong>Quick Start Printout</strong>, a step-by-step guide that shows you exactly what you need to do in order to get started in multi-family investing.</p>
                    <h2>Now Is The Time.</h2>
                    <p>The Wall Street Journal said that more wealth will be created in the next two years than the following eleven years combined.</p>
                    <p>While this may be true for some, it is not true for many others who will not take the time to educate and make <strong>informed investment decisions.</strong></p>
                    <p>My name is David Lindahl and along with co-authoring a book with Donald Trump I also wrote the book on real estate market cycles, it's called
                        <em>Emerging Real Estate Markets</em>&nbsp;and it sat in the number one best seller list for quite a while.</p>
                    <p>Over the last 18 years, I have controlled over 8,200 units and like many real estate investors, I started out owning nothing and bought my first three family property that got me started in the exciting and secure arena of multi-family real estate investing.</p>
                    <p>Before you consider investing with multi-family homes, here are seven things you must know...</p>
                    <hr>
                    <span id="lg-seven" class="pull-left">7</span>
                    <h2 class="text-center" style="margin-top: 25px; margin-right: 35px">The Seven Things You Must Know About Multi-Family Investing</h2>
                    <ul class="fa-ul seven-things" style="margin-left: 0">
                        <li>
                            <span class="fa-stack fa-2x" style="color: #85D4FF;">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-inverse fa-stack-1x"><strong>1</strong></i>
                            </span>
                            <p>
                                <strong style="font-size: 22px">Multi Family Properties Can Protect Your Wealth</strong>
                                <br>You’ve worked hard, you’ve established yourself. Over time, real estate values have proven time and time again, that they will go up. We feel one of the safest investments you can make is putting your money in real estate. One of the largest benefits of Multi Family real estate is it gives you cash flow while it appreciates.</p>
                        </li>
                        <li>
                            <span class="fa-stack fa-2x" style="color: #70CDFF;">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-inverse fa-stack-1x"><strong>2</strong></i>
                            </span>
                            <p>
                                <strong style="font-size: 22px">Your Properties Should Run on Autopilot</strong>
                                <br>When you secure a property, always hire a good qualified management company to run it and you can continue to invest in other properties… or enjoy your life in any way you choose. Whether you are traveling the globe, or just sitting at home, your management company oversees the day to day operations of your investment...delegation is the key to happiness.</p>
                        </li>
                        <li>
                            <span class="fa-stack fa-2x" style="color: #5CC6FF;">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-inverse fa-stack-1x"><strong>3</strong></i>
                            </span>
                            <p>
                                <strong style="font-size: 22px">Emerging Markets Create Faster Appreciation</strong>
                                <br>Institutional investors understand the power of emerging markets. In fact MIT offers a course specifically surrounding markets that explode with appreciation. Be sure you study this critical element to success.</p>
                        </li>
                        <li>
                            <span class="fa-stack fa-2x" style="color: #47BFFF;">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-inverse fa-stack-1x"><strong>4</strong></i>
                            </span>
                            <p>
                                <strong style="font-size: 22px">Use “Under Valued” Properties For Quick Gains</strong>
                                <br>Value add properties definitely look less attractive, but that is exactly why they yield a higher return and increase cash flow.</p>
                        </li>
                        <li>
                            <span class="fa-stack fa-2x" style="color: #33B8FF;">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-inverse fa-stack-1x"><strong>5</strong></i>
                            </span>
                            <p>
                                <strong style="font-size: 22px">Going Big Can Equal Bigger Returns</strong>
                                <br>Small properties are good but tend to be for beginning investors. You’ve earned the status you enjoy today, larger properties will bring you larger returns with less risk, that’s the irony, but you already know this.</p>
                        </li>
                        <li>
                            <span class="fa-stack fa-2x" style="color: #1FB0FF;">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-inverse fa-stack-1x"><strong>6</strong></i>
                            </span>
                            <p>
                                <strong style="font-size: 22px">Start Where You Are Comfortable</strong>
                                <br>If you are just beginning, get educated, take action, take calculated risks, get the confidence of having your first deal under you belt and then watch your portfolio grow.</p>
                        </li>
                        <li>
                            <span class="fa-stack fa-2x" style="color: #0AA9FF;">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-inverse fa-stack-1x"><strong>7</strong></i>
                            </span>
                            <p>
                                <strong style="font-size: 22px">Use a Proven System</strong>
                                <br>You use systems in your day to day life and business, it only makes sense that you should use them in your real estate investing too. Proven systems bring you proven results and get you to your goals faster.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <div id="dave-bio">
                        <img src="../img/photo-dave.png" height="281" width="263" class="img-responsive center-block" style="margin-top: 20px">
                        <div style="padding: 25px">
                            <h2>David Lindahl</h2>
                            <p>David has grown a real estate portfolio from nothing to controlling over 8,200 units over the last 18 years and for the past eleven years has been sharing this proven system, a system he still uses on a daily basis to secure his returns and grow his holdings, with those looking to increase their current cash flow and increase their future security.</p>
                            <p>A graduate of Northeastern University earning a degree in Finance and Economics, David was accepted into Harvard Business School’s OPM program as a result of growing one of the nations largest commercial real estate companies.</p>
                            <p>David is the author of three of the best selling real estate books on the market today, <em>Multi-Family Millions</em>, <em>Emerging Real Estate Markets</em> and was personally requested by Donald Trump to co-author Trump University's <em>Commercial Real Estate Investing 101</em>.</p>
                            <p>David also enjoys foreign travel, tennis, golf and spending time with his family.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-2 col-sm-8">
                <a href="#opt-in" data-toggle="modal" data-target="#opt-in" class="btn center-block cta-button">Yes! Send Me The FREE Training Course&nbsp;<i class="fa fa-angle-double-right"></i></a>
                <p class="text-center cta-disclaimer">
                    <img src="../img/lock.png" height="18" width="14">&nbsp;We hate spam as much as you and promise to
                    <strong>NEVER</strong>&nbsp;share or abuse your e-mail address and contact information in any way.
                </p>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div id="testimonial-section" style="background: url(../img/bg-blue.png) repeat; padding: 40px 0">
        <div class="container">
            <h1 class="text-center" style="font-size: 45px">What Others Are Saying...</h1>
            <div class="row testimonial">
                <div class="col-sm-3">
                    <img src="../img/testimonials/rick-chafee.png" height="208" width="208" class="img-responsive center-block" style="margin-top: 40px">
                </div>
                <div class="col-sm-9">
                    <h2 class="text-left">Rick Chafee
                        <br>
                        <span style="font-style: italic; color: #666; font-weight: 300">Barrington, RI</span>
                    </h2>
                    <p><i class="fa fa-lg fa-quote-left"></i>&nbsp;Thank you Dave and your team! Since doing your training and implementing your strategies, you have helped me take my real estate investing business to the next level. I have had so much success in such a short period of time and it is all due to your guidance! You have made me realize that the bigger numbers are just as easy. I am now working on some larger deals right now, because I know that they are just as easy as the small ones. I would have never done any of this if it wasn’t for you and your team's help!&nbsp;<i class="fa fa-lg fa-quote-right"></i>
                    </p>
                </div>
            </div>

            <div class="row testimonial">
                <div class="col-sm-3">
                    <img src="../img/testimonials/frank-leotti.png" height="208" width="208" class="img-responsive center-block" style="margin-top: 40px">
                </div>
                <div class="col-sm-9">
                    <h2>Frank Leotti
                        <br>
                        <span style="font-style: italic; color: #666; font-weight: 300">Rowland Heights, CA</span>
                    </h2>
                    <p><i class="fa fa-lg fa-quote-left"></i>&nbsp;As a real estate appraiser, I have appraised literally hundreds of buildings for some very wealthy people. Whether you have no experience or lots of experience, I would highly recommend Dave’s training course as soon as possible. The tools that Dave and his team give you are complete and step-by-step. Anyone looking to take their real estate business to the next level, should definitely do this training as soon as possible. Thanks for all of your help Dave and your team!&nbsp;<i class="fa fa-lg fa-quote-right"></i>
                    </p>
                </div>
            </div>

            <div class="row testimonial">
                <div class="col-sm-3">
                    <img src="../img/testimonials/valineta-jingles.png" height="208" width="208" class="img-responsive center-block">
                </div>
                <div class="col-sm-9">
                    <h2>Valineta Jingles
                        <br>
                        <span style="font-style: italic; color: #666; font-weight: 300">Long Beach, CA</span>
                    </h2>
                    <p><i class="fa fa-lg fa-quote-left"></i>&nbsp;Thank you so much Dave and your team! After your training, I walked away feeling empowered and knew I could get into multi-family investing. By taking me step-by-step, you gave me the confidence to be successful in real estate!&nbsp;<i class="fa fa-lg fa-quote-right"></i>
                    </p>
                </div>
            </div>

            <div class="row testimonial">
                <div class="col-sm-3">
                    <img src="../img/testimonials/brian-marsh.png" height="208" width="208" class="img-responsive center-block">
                </div>
                <div class="col-sm-9">
                    <h2>Brian Marsh
                        <br>
                        <span style="font-style: italic; color: #666; font-weight: 300">Phoenix, AZ</span>
                    </h2>
                    <p><i class="fa fa-lg fa-quote-left"></i>&nbsp;I just wanted to take a moment to say thank you Dave. After going through your training, I have already made several changes in my business and I am in the process of implementing several new marketing plans, not one or two, but several. I was also able take the necessary step to go out and buy and sell an apartment complex just a few months after completing your training!&nbsp;<i class="fa fa-lg fa-quote-right"></i>
                    </p>
                </div>
            </div>

            <div class="row testimonial">
                <div class="col-sm-3">
                    <img src="../img/testimonials/debbie-wallace.png" height="208" width="208" class="img-responsive center-block" style="margin-top: 20px">
                </div>
                <div class="col-sm-9">
                    <h2>Debbie Wallace
                        <br>
                        <span style="font-style: italic; color: #666; font-weight: 300">Leominster, MA</span>
                    </h2>
                    <p><i class="fa fa-lg fa-quote-left"></i>&nbsp;I completed Dave Lindahl’s training in December last year and started looking for apartment buildings in some of the emerging markets that Dave and his team mention around the US. The training truly shows you how to finance any deal. I didn’t have any money just like most people. But Dave and his team taught me how to go out and get it done. I am living proof. Thanks Dave and your team for all of the help and guidance.&nbsp;<i class="fa fa-lg fa-quote-right"></i>
                    </p>
                </div>
            </div>
            <div class="col-sm-offset-2 col-sm-8">
                <a href="#opt-in" data-toggle="modal" data-target="#opt-in" class="btn center-block cta-button">Yes! Send Me The FREE Training Course&nbsp;<i class="fa fa-angle-double-right"></i></a>
                <p class="text-center cta-disclaimer">
                    <img src="../img/lock.png" height="18" width="14">&nbsp;We hate spam as much as you and promise to
                    <strong>NEVER</strong>&nbsp;share or abuse your e-mail address and contact information in any way.
                </p>
            </div>
        </div>
    </div>

    <!-- 5-Day Training Description -->
    <section id="training-description" class="container content-section">
        <h1 class="text-center" style="font-size: 45px; margin: 40px">Our FREE 5-Day Online Quick Start Training Course Covers...</h1>
        <div class="row vertical-align">
            <div class="col-sm-7">
                <h1 class="text-center" style="font-size: 75px; color: #666">DAY 1</h1>
                <h2 class="text-center" style="margin-top: 0">How To Profit In <br>Emerging Real Estate Markets</h2>
                <h3>On the first day, we will cover...</h3>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>What is an Emerging Market</strong> and why are they so valuable?</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>Where to <strong>find and recognize extremely profitable Emerging Markets</strong> (you may be in one right now!)</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>The <strong>four phases of the Market Cycle</strong> and their key characteristics!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>What <strong>buying and selling strategy you should be using</strong>, in each market phase, to make the least amount of money in the most amount of time with the least amount of risk.</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>The critical skill of <strong>recognizing when the market phase is changing</strong> so you change your investment strategy so you continue to do well investing (this is the number one mistake investors make)</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>How to <strong>tell when your market, or any market is ready to Emerge</strong>...getting in early is a key to being very profitable.</li>
                </ul>
            </div>
            <div class="col-sm-5">
                <a href="#opt-in" data-toggle="modal" data-target="#opt-in"><img src="../img/funnel/preview-module1.png" class="img-responsive center-block"></a>
            </div>
        </div>
        <hr class="shadow">
        <div class="row vertical-align">
            <div class="col-sm-5">
                <a href="#opt-in" data-toggle="modal" data-target="#opt-in"><img src="../img/funnel/preview-module2.png" class="img-responsive center-block"></a>
            </div>
            <div class="col-sm-7">
                <h1 class="text-center" style="font-size: 75px; color: #666">DAY 2</h1>
                <h2 class="text-center" style="margin-top: 0">Where The Good <br>Multi Family Deals Are Now</h2>
                <h3>This is what we will cover...</h3>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>Where the good multi-family deals are</strong> in your back yard!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>How to <strong>attract the motivated sellers</strong> to increase your chances of getting a really good deal!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>What to say to a real estate broker</strong> so he sends you “pocket listings” (his best deals)!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>How to really “blow it” with a real estate broker and have them never call you again...you want to avoid this common mistake!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>How to <strong>use direct mail to get multi-family owners calling you</strong> to sell you their properties...the key is in the headline of your letter!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>Three places to get extremely high response rates</strong> from motivated sellers</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>The place brokers put their premium listing FIRST</strong> and how to get on that list! <strong>HINT: Its NOT the interent,</strong> they post their listing on the net <strong>LAST!</strong></li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>How to <strong>set up a marketing campaign</strong> so you have a <strong>constant stream of deals</strong> coming into your real estate business</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>And much, much more...</li>
                </ul>
            </div>
        </div>
        <hr class="shadow">
        <div class="row vertical-align">
            <div class="col-sm-7">
                <h1 class="text-center" style="font-size: 75px; color: #666">DAY 3</h1>
                <h2 class="text-center" style="margin-top: 0">How to Get Money To Fund Your Deals</h2>
                <p>Have you have ever wondered how top investors get money to fund their deals? I’m going to show you exactly how and reveal the <strong>top techniques of using other people's money to fund your deals.</strong></p>
                <h3>On the third day, we will cover...</h3>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-lg fa-check"></i>Where I first found private money</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>Using owner financing</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>Using hard money</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>Finding angel investors</li>
                </ul>
            </div>
            <div class="col-sm-5">
                <a href="#opt-in" data-toggle="modal" data-target="#opt-in"><img src="../img/funnel/preview-module3.png" class="img-responsive center-block"></a>
            </div>
        </div>
        <hr class="shadow">
        <div class="row vertical-align">
            <div class="col-sm-5">
                <a href="#opt-in" data-toggle="modal" data-target="#opt-in"><img src="../img/funnel/preview-module4.png" class="img-responsive center-block"></a>
            </div>
            <div class="col-sm-7">
                <h1 class="text-center" style="font-size: 75px; color: #666">DAY 4</h1>
                <h2 class="text-center" style="margin-top: 0">The Secret to Analyzing Deals Correctly</h2>
                <h3>In this training, you will discover...</h3>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-lg fa-check"></i>How to <strong>analyze deals accurately every time</strong>, even if you’re just getting started.</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>A simple <strong>3 step formula that anyone can use to determine the value of a property!</strong></li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>Why you should never use the mortgage amount to analyze a deal, and if you did, why you probably did it wrong!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>Where to go to practice analyzing deals</strong> that are on the market now!
                    </li>
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>What to say to a broker</strong> when giving an offer that is much lower than asking price so you get his next good deal – a very little know but very effective strategy for getting deals!
                    </li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>And much, much, more...</li>
                </ul>
            </div>
        </div>
        <hr class="shadow">
        <div class="row vertical-align">
            <div class="col-sm-7">
                <h1 class="text-center" style="font-size: 75px; color: #666">DAY 5</h1>
                <h2 class="text-center" style="margin-top: 0">How To Create Your Own Cash Flow Machine</h2>
                <h3>The final day of the training course covers...</h3>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-lg fa-check"></i>Where to <strong>find good quality management companies</strong> so you never have to be a landlord!
                    </li>
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>What report you must read each month</strong> and what format you need to read it in to ensure you recognize anything that could be a future problem, ensuring your property is cash flowing properly!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>Why a CPM and/or ARM is the most important person on your team</strong>. We'll even tell you how to get the good ones!
                    </li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>The one report you must read each and every Monday <strong>to ensure your property is going to give you cash flow.</strong>
                    </li>
                    <li><i class="fa-li fa fa-lg fa-check"></i><strong>Marketing techniques</strong> that will improve your properties.</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>Why the <strong>quality of your traffic (people who come to possibly rent from you) is much more important than the amount!</strong>
                    </li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>The <strong>number one reason your tenants will move out on you and how to avoid it</strong>...reducing tenant turnover will put more cash flow in your pocket!</li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>Why <strong>notices and preleases tell you how much money your going to put in your pocket</strong> 30 days from now.
                    </li>
                    <li><i class="fa-li fa fa-lg fa-check"></i>And much, much more...</li>
                </ul>
            </div>
            <div class="col-sm-5">
                <a href="#opt-in" data-toggle="modal" data-target="#opt-in"><img src="../img/funnel/preview-module5.png" class="img-responsive center-block"></a>
            </div>
        </div>
           <div class="col-sm-offset-2 col-sm-8">
                <a href="#opt-in" data-toggle="modal" data-target="#opt-in" class="btn center-block cta-button">Yes! Send Me The FREE Training Course&nbsp;<i class="fa fa-angle-double-right"></i></a>
                <p class="text-center cta-disclaimer">
                    <img src="../img/lock.png" height="18" width="14">&nbsp;We hate spam as much as you and promise to
                    <strong>NEVER</strong>&nbsp;share or abuse your e-mail address and contact information in any way.
                </p>
            </div>
    </section>

    <!-- Comments -->
	<div class="container">
	    <div class="row">
	        <div class="col-sm-12">
	        	<hr>
	        	<h1>Join the discussion</h1>
	            <?php include('../comments.php');?>
	        </div>
	    </div>
	</div>

    <!-- Opt-in Modal -->
    <div id="opt-in" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="privacy" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close modal-btn-close" data-dismiss="modal" aria-hidden="true">
                        <img src="../img/close-btn.png" height="38" width="38" />
                    </button>
                    <div class="progress" style="height: 40px; margin: 10px 0; background-color: #C8D6DC;">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; font-size: 18px;
    line-height: 2;">
                            50% Complete
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="background: url(img/bg-light.png) repeat;">
                    <p class="text-center">Almost there! Complete this form and click the button below to start your training course and to receive your MFIA Investor Newsletter.</p>
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="../img/arrow-download.png" height="256" width="256" class="img-responsive hidden-xs" style="margin-top: 40px">
                        </div>
                        <div class="col-sm-7">
                            <h3 class="text-center" style="margin-bottom: 25px">Where do we send your video course & quick start printout?</h3>
                            <form id="video-training-series" accept-charset="UTF-8" action="https://m160.infusionsoft.com/app/form/process/be6750adcbd88703fef5be25120aebdc" class="infusion-form" method="POST" data-parsley-validate>
                                <input name="inf_form_xid" type="hidden" value="be6750adcbd88703fef5be25120aebdc" />
                                <input name="inf_form_name" type="hidden" value="5-Day Video Series &#a;Opt In" />
                                <input name="infusionsoft_version" type="hidden" value="1.39.0.34" />
                                <!--<input name="inf_custom_csalsid" type="hidden" value="<?php echo $csalsid;?>" />-->
                                <input name="inf_custom_Source0" type="hidden" value="<?php echo $utm_source;?>" />
                                <input name="inf_custom_Medium" type="hidden" value="<?php echo $utm_medium;?>" />
                                <input name="inf_custom_Terms" type="hidden" value="<?php echo $utm_term;?>" />
                                <input name="inf_custom_Content" type="hidden" value="<?php echo $utm_content;?>" />
                                <input name="inf_custom_Campaign0" type="hidden" value="<?php echo $utm_campaign;?>" />
                                <input name="inf_custom_Placement" type="hidden" value="<?php echo $placement;?>" />
                                <input name="inf_custom_aid" type="hidden" value="<?php echo $aid;?>" />
                                <input name="inf_custom_device" type="hidden" value="<?php echo $device;?>" />
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="inf_field_FirstName" placeholder="First Name" data-parsley-trigger="change" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" name="inf_field_Email" placeholder="Email" data-parsley-trigger="change" required>
                                </div>
                                <p class="text-center">
                                    <button type="submit" class="btn btn-block cta-button">Start The Training Course&nbsp;<i class="fa fa-angle-double-right"></i>
                                    </button>
                                </p>
                                <p class="text-center cta-disclaimer">
                                    <img src="../img/lock.png" height="18" width="14">&nbsp;We won’t send you spam. Unsubscribe at any time.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    _kmq.push(['identify', '<?php echo $inf_field_Email ?>']); // IDENTIFY CONTACT
    _kmq.push(['record', 'Viewed Page - LP Training Course']); // PAGE SPECIFIC EVENT
    </script>

    <?php include('../footer.php');?>