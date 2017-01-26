<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
<style>
    /* carousel */
#quote-carousel {
  padding: 0 10px 30px 10px;
  margin-top: 30px;
  text-align:center;
}
/* indicator position */
#quote-carousel .carousel-indicators {
  right: 50%;
  top: auto;
  bottom: -10px;
  margin-right: -19px;
}
/* indicator color */
#quote-carousel .carousel-indicators li {
  background: #c0c0c0;
}
/* active indicator */
#quote-carousel .carousel-indicators .active {
  background: #333333;
  height:10px;
  width:10px;
  margin-bottom:1px;
}
/* typography */
small
{color: #cacaca; border-top:1px solid #2f1e41; padding: 10px; display: inline-block; margin-top: 20px;}
.heading_t
{text-align: center;}
p {
  font-style:italic;
}
</style>
<div class="titlebar">
    <h2>Our Testimonials</h2>
    <p></p>
    <hr/>
</div>


<h1 class="heading_t">Take a look below to learn what our clients are saying about us:    </h1>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
      
<!-- Bottom Carousel Indicators -->
<ol class="carousel-indicators">
  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
  <li data-target="#quote-carousel" data-slide-to="1"></li>
  <li data-target="#quote-carousel" data-slide-to="2"></li>
</ol>
        
<!-- Carousel Slides / Quotes -->
<div class="carousel-inner">

<!-- Quote 1 -->
<div class="item active">
  <div class="row">
    <div class="col-sm-12">
        <img src="public/images/testimonial-client.png" width="100px">
      <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.&rdquo;</p>
      <small><strong>Vulputate M., Dolor</strong></small>
    </div>
  </div>
</div>

<!-- Quote 2 -->
<div class="item">
  <div class="row">
    <div class="col-sm-12">
        <img src="public/images/testimonial-client.png" width="100px">
      <p>&ldquo;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.&rdquo;</p>
      <small><strong>Fringilla A., Vulputate Sit</strong></small>
    </div>
  </div>
</div>

<!-- Quote 3 -->
<div class="item">
  <div class="row">
    <div class="col-sm-12">
        <img src="public/images/testimonial-client.png" width="100px">
      <p>&ldquo;Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.&rdquo;</p>
      <small><strong>Aenean A., Justo Cras</strong></small>
    </div>
  </div>
</div>
  
</div>
        

      </div>                          
    </div>
  </div>
</div>