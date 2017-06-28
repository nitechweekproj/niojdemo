<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $OJ_NAME?></title>  
    <?php include("template/$OJ_TEMPLATE/css.php");?>	    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include("template/$OJ_TEMPLATE/nav.php");?>
    <div class="sui-container">	    
      <div class="sui-pagination">
        <ul>
          <li class="prev"><a href="problemset.php?page=1">&lt;&lt;</a></li>
          <?php
            if(!isset($page)) $page=1;
            $page=intval($page);
            $section=8;
            $start=$page>$section?$page-$section:1;
            $end=$page+$section>$view_total_page?$view_total_page:$page+$section;
            for ($i=$start;$i<=$end;$i++){
            echo "<li class='".($page==$i?"active ":"")."page-item'>
                    <a href='problemset.php?page=".$i."'>".$i."</a></li>";
            }
          ?>
          <li class="next"><a href="problemset.php?page=<?php echo $view_total_page?>">&gt;&gt;</a></li>
        </ul>
      </div>

      <div class="sui-container">
        <form method="post" role="form" action=problem.php class="sui-form  form-horizontal">
            <div class="control-group">
              <input name='id' type=text placeholder="Problem ID" class="input-default">
              <div class="controls">
                <button type="submit" class="sui-btn btn-xlarge btn-primary">Go</button>
              </div>
            </div>
            <div class="control-group">
              <input name=search type=text placeholder="Keywords Title or Source" class="input-default">
              <div class="controls">
                <button type="submit" class="sui-btn btn-xlarge btn-primary"><?php echo $MSG_SEARCH?></button>
              </div>
            </div>
        </form>
      </div>

      <table id='problemset' width='90%'class='sui-table table-zebra'>
        <thead>
        <tr>
          <th width='5'></th>
          <th width='20'><?php echo $MSG_PROBLEM_ID?></th>
          <th><?php echo $MSG_TITLE?></th>
          <th class='hidden-xs' width='10%'><?php echo $MSG_SOURCE?></th>
          <th width=60 ><?php echo $MSG_AC?></th>
          <th width=60 ><?php echo $MSG_SUBMIT?></th>
        </tr>
        </thead>
        <tbody>
        <?php
          foreach($view_problemset as $row){
            foreach($row as $table_cell){
              echo "<td>";
              echo "\t".$table_cell;
              echo "</td>";
            }
            echo "</tr>";
          }
        ?>
        </tbody>
      </table>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include("template/$OJ_TEMPLATE/js.php");?>	    
  <script type="text/javascript" src="include/jquery.tablesorter.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#problemset").tablesorter();
}
);
</script>
</body>
</html>
