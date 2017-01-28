<style>
    
    section{
padding: 25px 0;
background: #fff; }
.divider {
width: 100%;
margin: 10px auto 15px;
position: relative;
height: 1px;
-webkit-backface-visibility: hidden;
-webkit-transform: translateZ(0) scale(1, 1); }
.divider::after {
height: 1px;
background: #e8e8e8;
background: -moz-linear-gradient(left, transparent 0, rgba(0, 0, 0, 0.09) 35%, rgba(0, 0, 0, 0.09) 70%, transparent 100%);
background: -webkit-gradient(linear, left top, right top, color-stop(0, transparent), color-stop(35%, rgba(0, 0, 0, 0.09)), color-stop(70%, rgba(0, 0, 0, 0.09)), color-stop(100%, transparent));
background: -webkit-linear-gradient(left, transparent 0, rgba(0, 0, 0, 0.09) 35%, rgba(0, 0, 0, 0.09) 70%, transparent 100%);
background: -o-linear-gradient(left, transparent 0, rgba(0, 0, 0, 0.09) 35%, rgba(0, 0, 0, 0.09) 70%, transparent 100%);
background: -ms-linear-gradient(left, transparent 0, rgba(0, 0, 0, 0.09) 35%, rgba(0, 0, 0, 0.09) 70%, transparent 100%);
background: linear-gradient(to right, transparent 0, rgba(0, 0, 0, 0.09) 35%, rgba(0, 0, 0, 0.09) 70%, transparent 100%);
position: absolute;
bottom: -1px;
content: "";
width: 100%;
left: 0; }
p {
font-size: 14px;
color: #666;
line-height: 1.4;
margin-bottom: 30px; }
h3
{margin-top: 10px;}
.shadow, .shadow-narrow {
position: relative;
background-color: #fff; }
.service-block {
margin-bottom: 30px;
border-radius: 3px;
border: 1px solid #f1f1f1;
padding-top: 3px;
padding-bottom: 30px;
padding-left: 5px;
padding-right: 5px;
height: 450px;}
.shadow-narrow::before, .shadow::before {
position: absolute;
left: 0;
height: 60%;
bottom: 0;
width: 100%;
content: "";
background-color: #fff;
z-index: 2; }
.shadow-narrow::after, .shadow::after {
content: "";
position: absolute;
height: 50%;
width: 96%;
left: 50%;
bottom: 2px;
margin-left: -48%;
-webkit-box-shadow: 0 5px 7px #999;
box-shadow: 0 5px 7px #999;
z-index: 1;
border-radius: 10%;
-webkit-transition: all .3s ease-in-out;
-o-transition: all .3s ease-in-out;
transition: all .3s ease-in-out; }
.shadow-narrow:hover::after, .shadow:hover::after {
bottom: 10px; }
.icon.bg-df {
background-color: #09afdf;
color: #ffffff; }
.service-block .icon {
margin-bottom: 10px; }
.icon {
display: inline-block;
text-align: center;
background-color: rgba(255, 255, 255, 0.85);
color: #000;
font-size: 24px;
width: 60px;
height: 60px;
line-height: 58px;
transition: all .2s ease-in-out;
border-radius: 0;
transform:rotate(45deg);
border: 1px solid transparent; }
.shadow *, .shadow-narrow * {
position: relative;
z-index: 3; }
.service-block p {
clear: both;
margin-bottom: 15px; }
.icon i {
position: relative;
z-index: 1;
transform:rotate(-45deg); 
}
</style>
<section>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
<h2 class="text-uppercase">OUR ADMIN CAREER TIPS</h2>
<div class="divider"></div>
<p>Need advice for your workday? Start here. You'll find career tips, career advice, and articles on career basics.</p>
</div>
<div class="col-md-4 ">
<div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
    <img src="<?php echo base_url();?>public/images/interview-tips1.png">
<h3>Interview Tips</h3>
<div class="divider clearfix"></div>
<p> Conduct Research on the Employer, Hiring Manager, and Job Opportunity Review Common Interview Questions and Review Common Interview Questions and Prepare Your Responses Be Authentic, Upbeat, Focused, Confident, Candid, and Concise</p>
<a href="<?php echo base_url()?>interview-tips"  class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
</div>
</div>
<div class="col-md-4 ">
<div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
<img src="<?php echo base_url();?>public/images/interview-tips2.jpg">
<h3>Having The Conversation With Your Boss</h3>
<div class="divider clearfix"></div>
<p>Managers ask about your future plans so they can help develop your skills and advocate for you. But if your goal is to stay where you are, you can be honest (and still be viewed as a valuable member</p>
<a href="<?php echo base_url()?>interview-tips"  class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
</div>
</div>
<div class="col-md-4 ">
<div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
<img src="<?php echo base_url();?>public/images/interview-tips3.jpg">  
<h3>Questions To Ask Yourself Before Quitting Your Perfectly Good Job</h3>
<div class="divider clearfix"></div>
<p>1.Did I Daydream About Being Somewhere Else Today? Do you spend a good amount of your..</p>
<a href="<?php echo base_url()?>interview-tips" class="btn btn-primary">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
</section>