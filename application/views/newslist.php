<br />
<div class="container">
  <div class="about_top">
 <div class="row" style="padding:20px; " >
 <a href="<?php echo site_url()?>/page" class=" btn btn-primary" style="float:right; margin-top:-40px;" >Back</a>
           <?php
				foreach($news as $rec)
				{
					if($rec->news_status == 1)
					{
			?> 
            <div style="border:1px dashed; color:#063;background-color:#CCC;height:220px;"> 
                
            	<table  style="padding:10px 20px;margin:0px 0px 30px 20px;" >      
                	<tr>
                    
						<td ><strong><?php echo $rec->news_title.br(2); ?> </strong>
                        <img  alt="<?php echo $rec->news_image;?>" src="<?php echo base_url().'/images/news/'.$rec->news_image;?>" height="120" width="220" /> <br />
                    
                    	</td>
                    
                    <td  style="padding-left:60px;"><?php echo substr(wordwrap($rec->news_desc,70,"<br />",true),0,140).'...';?>
                   
                    </td>	
                     <div style="float:right;margin-right:50px; margin-top:80px;">
                    <span ><?php echo nbs(4).anchor('news/view/'.$rec->news_id,'View More...',"class='btn btn-default'");?></span> 
                    	</div>
                    </tr>
                    <div style="float:right;">
                    	<br /></div>
                    	
                        
                   <br />
                </table>
            </div>  
            <?php
					}
					echo br();
				}
				?>
                <div style="margin:20px;font-size:25px;font-family:Verdana, Geneva, sans-serif;padding-left:10px;">
                <strong style="color:#963;">
                
                <?php
				echo $this->pagination->create_links();
				?>   </strong>
                </div>   
                         </div>
	<div class="clearfix"> </div>
  </div>  
  
   </div>