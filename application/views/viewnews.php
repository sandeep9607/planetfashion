<div class="templatemo-content-wrapper">
        <div class="templatemo-content">
         
          <div style="float:right;margin-right:30px;">
               <a href="<?php echo site_url(); ?>/news" class="btn btn-primary"><i class="fa fa-reply"></i>Back</a>
           </div>
          <h2 style="margin-left:15px;margin-top:30px;">News in detail</h2>
          
         
            <div >
             <div class="row" style="background-color:#CCC;">
                  <div class="col-md-8 margin-bottom-15">
                  <br />
                  <div style="padding-left:50px;">
                  	<div style="float:right; margin-right: -250px;">
                  		<img  src="<?php echo base_url()?>/images/news/<?php echo $news[0]->news_image;?>" height="300px" />
                    	<br /><br />
                    </div>
                    <div>
                    	<h2>"<?php echo nbs(2).$news[0]->news_title.nbs(2);?>"</h2>
                    </div>
                    <br /><br />
                    <div>                   
                  		<?php echo wordwrap($news[0]->news_desc,60,"<br />",true);?>
                    </div>
                    <br /><br />
                    
                 </div>
                 
                 
                  </div>
                
                </div>
           <br /><br />   
           
 			
          
          </div>
        
      </div>
    </div>