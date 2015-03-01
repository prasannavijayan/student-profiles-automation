<?php

/**
 * @pnk: http://www.Awcore.com/dev
 */
 
   function pagination($query, $per_page = 10,$page = 1, $url = '?'){        
    	$query = "SELECT COUNT(*) as `num` FROM {$query} ";
    	$row = mysql_fetch_array(mysql_query($query));
    	$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<div class='pagination'>";
                    $pagination .= "<span class='details pull-left'>Page $page of $lastpage</span><br>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<span ><a class='current'>$counter</a></span>";
    				else
    					$pagination.= "<span><a href='{$url}page=$counter'>$counter</a></span>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<span><a class='current'>$counter</a></span>";
    					else
    						$pagination.= "<span><a href='{$url}page=$counter'>$counter</a></span>";					
    				}
    				$pagination.= "<span class='dot'>...</span>";
    				$pagination.= "<span><a href='{$url}page=$lpm1'>$lpm1</a></span>";
    				$pagination.= "<span><a href='{$url}page=$lastpage'>$lastpage</a></span>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<span><a href='{$url}page=1'>1</a></span>";
    				$pagination.= "<span><a href='{$url}page=2'>2</a></span>";
    				$pagination.= "<span class='dot'>...</span>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<span><a class='current'>$counter</a></span>";
    					else
    						$pagination.= "<span><a href='{$url}page=$counter'>$counter</a></span>";					
    				}
    				$pagination.= "<span class='dot'>..</span>";
    				$pagination.= "<span><a href='{$url}page=$lpm1'>$lpm1</a></span>";
    				$pagination.= "<span><a href='{$url}page=$lastpage'>$lastpage</a></span>";		
    			}
    			else
    			{
    				$pagination.= "<span><a href='{$url}page=1'>1</a></span>";
    				$pagination.= "<span><a href='{$url}page=2'>2</a></span>";
    				$pagination.= "<span class='dot'>..</span>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<span><a class='current'>$counter</a></span>";
    					else
    						$pagination.= "<span><a href='{$url}page=$counter'>$counter</a></span>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<span><a href='{$url}page=$next'>Next</a></span>";
                $pagination.= "<span><a href='{$url}page=$lastpage'>Last</a></span>";
    		}else{
    			$pagination.= "<span><a class='current'>Next</a></span>";
                $pagination.= "<span><a class='current'>Last</a></span>";
            }
    		$pagination.= "</div>\n";		
    	}
    
    
        return $pagination;
    } 
?>
